<?php
include_once("security/security.php");
include_once("main/framework.php");
include_once("main/siteStatus.php");
include_once("main/page.php");
include_once("main/theme.php");
include_once("util/util.php");
include_once("util/xmlutil.php");
include_once("lib/dkp/dkpUtil.php");

/**
 * Renders the visible page to the user.
 * TODO(scott): Combine this class with the director.
 *
 * @author Scott Bailey (scott@zeddic.com)
 */
class site {

  /**
   * Renders the site and the current page.
   * Accepts two parameters:
   * $url - the url that the user requested. This will be used
   *      to load information from the backend database, such
   *      as parts that have been placed on it
   * $page  A page instance that was defined in a codebehind file.
   *      The data in this instance will be combined with data
   *      from the database.
   */
  function render($page) {
    //do a security check
    if( !security::hasPageAccess($page) ) {
      echo("Permission Denied for $page->url!");
      die();
    }

    //trigger any page events
    $page->handleEvents();

    //handle any ajax get requests
    $page->handleAjax();

    $this->callTemplate($page);
  }

  /**
   * Calls the template for the site, placing the page in
   * the master 'linker' template.
   */
  function callTemplate(&$page) {
    global $theme;

    //get global config values
    $title = $GLOBALS["SiteTitle"];
    $description = $GLOBALS["SiteDescription"];
    $keywords = $GLOBALS["SiteKeywords"];

    //render the page
    $content = $page->render();

    //append page name to global config site name
    if($page->title != "") {
      if($title != "")
        $title .= " - ";
      $title .= $page->title;
    }

    //check if the page requested extra headers
    //(CSS or JS includes)
    $extraHeaders = array_merge($this->getExtraHeaders($page),$page->extraHeaders);

    //send all the data to the main linker template
    //The location of this file is based on the current theme
    unset($template);
    $template = new template();

    //we will look for this template in two places:
    //1 - the current themes directory
    //2 - the common directory.
    //This allows the current theme to override the linker if needed

    $path = $theme->getDirectory()."linker.tmpl.php";
    if(fileutil::file_exists_incpath($path))
      $template->setDirectory($theme->getDirectory());
    else
      $template->setDirectory($theme->getCommonDirectory());
    $template->setFile("linker.tmpl.php");
    $template->set("title",$title);
    $template->set("keywords",$this->keywords);
    $template->set("description",$this->description);
    $template->set("content",$content);
    $template->set("extraHeaders",implode("\r\n\t",$extraHeaders)."\r\n");

    //display the page to the user
    echo($template->fetch("",0));
  }

  /**
   * Returns an array of extra headers defined at the site level.
   * These are extra js or css files handled by the site.
   */
  function getExtraHeaders(&$page) {
    global $SiteRoot;
    $toReturn = array();

    //include the core framework js
    $toReturn[] = "<script src=\"".$SiteRoot."js/core.js\" type=\"text/javascript\"></script>";


    //include inline js to init the core js
    $url = dispatcher::getUrl();

    $toReturn[] = "<script type=\"text/javascript\">Site.Init(\"$SiteRoot\",\"$url\",\"$page->id\");</script>";

    $server = util::getData("pserver");
    $guild = util::getData("pguild");

    $toReturn[] = "<script type=\"text/javascript\">DKP.Init(\"$server\",\"$guild\");</script>";

    //dynamically created css file code goes here? no , just the link to
    //the file that generates itself automattically.

    return $toReturn;
  }
}
?>
