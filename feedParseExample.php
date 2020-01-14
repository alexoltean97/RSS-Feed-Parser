<?php
include "db.php";
$html = "";
$url = "http://feeds.bbci.co.uk/news/world/europe/rss.xml";
$xml = simplexml_load_file($url);

for($i = 0; $i < 10; $i++){

    $title = $xml->channel->item[$i]->title;
    $html .= "<h4>$title</h4>";

    $link = $xml->channel->item[$i]->link;
    $html .= "<p>$link</p>";

    $query = "INSERT INTO parser (title,url) ";
    $query .= "VALUES ('$title', '$link')";

    if(!$query){
        die("Query Failed " . mysqli_error($conn));
    }
    mysqli_query($conn,$query);
}

echo $html;