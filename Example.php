<?php
require_once 'Class.itunes.php';

$itunesobj = new iTunes_Connect();

//$data = $itunesobj->searchiTunes("jack johnson",NULL,NULL,NULL,NULL,5);
//echo "<pre>";
//print_r($data);
//echo "</pre>";


// Two characters country code
// http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2

/*
$data = $itunesobj->getAppDetails("400274934","US");   ////  slanka 505461492
echo "<pre>";
print_r($data);
echo "</pre>";
*/

// Two characters country code
// http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
/*
$data = $itunesobj->getAppReviews("505461492");   ////  slanka 505461492
echo "<pre>";
print_r($data);
echo "</pre>";
*/

/* $data = $itunesobj->getMacApps("us",TOP_MAC_APPS_FREE,MAC_BUSINESS,2);
echo "<pre>";
print_r($data);
echo "</pre>"; */


/* $data = $itunesobj->getMovies("us",TOP_MOVIES,MOVIES_COMEDY,5);
echo "<pre>";
print_r($data);
echo "</pre>"; */

/* $data = $itunesobj->getMusic("us",MUSIC_TOP_SONGS,MUSIC_TYPE_DANCE,3);
echo "<pre>";
print_r($data);
echo "</pre>"; */

/* $data = $itunesobj->getMusicVideos("us",TOP_MUSIC_VIDEOS,MUSIC_VIDEOS_LATIN,2);
echo "<pre>";
print_r($data);
echo "</pre>"; */

/* $data = $itunesobj->getPodCasts("us",TOP_PODCASTS,PODCASTS_ARTS,3);
echo "<pre>";
print_r($data);
echo "</pre>"; */

 $data = $itunesobj->getTvShows("us",TOP_TV_SEASONS,TV_SHOWS_COMEDY,3);
 echo "<pre>";
print_r($data);
echo "</pre>"; 




