<?php

// variables for the sitemap.php script
// variables used when the object is initialized ...

// directory separator, default is system separator
// but if the map is generated on windows but deployed on UNIX this might not work
 $desp='/';

// where to write sitemap to, default do't write, just show in browser

$smfilename="sitemap.xml";

// sitemap parse root, default is current directory

$smroot=".";


// Path we want prepended for deployed web site if we generate the map on a test site

$deployedPath="";

// Directory separator, default is to use the system separator, but if you test on Windows (sep = \)
// and deploy on Unix (sep = /) this might cause problems

$d_separator=DIRECTORY_SEPARATOR;


// array with pathnames to ignore, starting at root where we invoke 'new' the class ...
// The script stops descending into a branch if the branch matches the item in the ignoreArray
// To ignore branches further down the tree you need to specify the full path leading to the branch
//
//	a
//	 - b
//     - b1 (*)
//   - c
//	   - b1
// /a/b/b1 ignores only the marked (*) branch and not both b1 branches ...
// If you have a valid robots.txt file and/or want to exclude frontpage directories then don't
// specify these here, but use the following functions in the callback: setlocalSitemapDefaults( ) below

// exclude frontpage directories
//$mysitemap->excludeFrontpage();
//
// Use Disallow rules in robots.txt 
//$mysitemap->considerRobotsTxt("robots.txt");

 $ignoreArray[] = '/banners';
 $ignoreArray[] = '/blog';
 $ignoreArray[] = '/cgi-bin';
 $ignoreArray[] = '/clasica';
 $ignoreArray[] = '/descargas';
 $ignoreArray[] = '/firmas';
 $ignoreArray[] = '/intranet';
 $ignoreArray[] = '/libreria';
 $ignoreArray[] = '/securimage';
 $ignoreArray[] = '/slider';
 $ignoreArray[] = '/vacantes';
 $ignoreArray[] = '/VIDEO';
 $ignoreArray[] = '/Videos';
 $ignoreArray[] = '/Videos-entrenamiento-MCC';
 $ignoreArray[] = '/webdisk';
 $ignoreArray[] = '/BASURA';
// $ignoreArray[] = '/private/testing';


// file extenstions to ignore
//$ignoreExtensions[] = '.htm';
//$ignoreExtensions[] = '.html';
//$ignoreExtensions[] = '.php';
 $ignoreExtensions[] = '.pdf';
$ignoreExtensions[] = '.jpeg';
$ignoreExtensions[] = '.jpg';
$ignoreExtensions[] = '.png';
$ignoreExtensions[] = '.gif';
$ignoreExtensions[] = '.bmp';
$ignoreExtensions[] = '.mno';
$ignoreExtensions[] = '.psd';
$ignoreExtensions[] = '.tif';
$ignoreExtensions[] = '.js';
$ignoreExtensions[] = '.phppre';
$ignoreExtensions[] = '.css';
$ignoreExtensions[] = '.db';
$ignoreExtensions[] = '.bash';
$ignoreExtensions[] = '.htaccess';
$ignoreExtensions[] = '.awm';
$ignoreExtensions[] = '.swf';
$ignoreExtensions[] = '.txt';
$ignoreExtensions[] = '.xml';
$ignoreExtensions[] = '.dat';
$ignoreExtensions[] = '.default';
$ignoreExtensions[] = '.htaccess.phpupgrader';
$ignoreExtensions[] = '.phpupgrader';
$ignoreExtensions[] = '.inc';
$ignoreExtensions[] = '.ini';
$ignoreExtensions[] = '.ftpquota';
$ignoreExtensions[] = '.gdf';
$ignoreExtensions[] = '.ht_freecap_words';
$ignoreExtensions[] = '.shtml';
$ignoreExtensions[] = '.ico';
$ignoreExtensions[] = '.xls';
$ignoreExtensions[] = '.xlsx';
$ignoreExtensions[] = '.ppt';
$ignoreExtensions[] = '.doc';
$ignoreExtensions[] = '.json';
$ignoreExtensions[] = '.xcf';
$ignoreExtensions[] = '.exe';
$ignoreExtensions[] = '.1403312907';
$ignoreExtensions[] = '.mp4';
$ignoreExtensions[] = '.mp3';
$ignoreExtensions[] = '.mov';

// file names to ignore, comparison is case insensitive as all compares (suffix, dir-ignore, ..)
// the script files (sitemap.php and sitemap_vars.php as well as the output file $smfilename
// are ignored per default
// Note this is different from the directory ignores, as matching names are discarded at any level
// for example robots.txt or internal debugging files would be good candidates.

$ignoreFiles[] = 'sitemap.xml';
$ignoreFiles[] = 'error_log';
$ignoreFiles[] = '400.html';
$ignoreFiles[] = '401.html';
$ignoreFiles[] = '403.html';
$ignoreFiles[] = '404.html';
$ignoreFiles[] = '500.html';


// Overwrite default priority, value must be between 0 (least) - 0.5 (default) - 1.0 (most)
// $filePriority["filename"] = "0.7"

// $filePriority["index.html"] = "1.0";


// Overwrite Change frequency
		// always 	(dynamically generated)
		// hourly
		// daily
		// weekly
		// monthly
		// yearly
		// never	(archived pages)
// $fileChangeFreq["filename"] = "hourly"

// $fileChangeFreq["index.html"] = "weekly";


// this function is called after the sitemap object is instantiated ....


function	setlocalSitemapDefaults($mysitemap, $smfname)
{

	///////////////////////////////////////////////////////////
	// Set default priority, value must be between 0 (least) - 0.5 (default) - 1.0 (most)
	
	$mysitemap->setDefaultPriority("0.5");

	///////////////////////////////////////////////////////////

	// Set default Change frequency
		// always 	(dynamically generated)
		// hourly
		// daily
		// weekly
		// monthly
		// yearly
		// never	(archived pages)
		
	$mysitemap->setDefaultFrequency("monthly");

	///////////////////////////////////////////////////////////
	// Call this to also generate sitemap for sitemap.php and sitemap_init.php
	// $mysitemap->includeSelf();
	
	///////////////////////////////////////////////////////////

	// want to exclude frontpage directories at any level from processing
	// directories usually generated by frontpage ...
			// _derived
			// _private
			// _vti_cnf
			// _vti_pvt

	// $mysitemap->excludeFrontpage();

	///////////////////////////////////////////////////////////
	// Include robots.txt in ignore list
	 $mysitemap->considerRobotsTxt("robots.txt");

	///////////////////////////////////////////////////////////
	// Now write the sitemap and send it to echo too

	$mysitemap->processAndWriteXML($smfname, TRUE);

	// Could do this more than once, as long as $sitemap object is alove
	// $mysitemap->processAndWriteXML("test.xml", FALSE);

}



?>