<?php


$html = file_get_contents_curl("http://sv.wikipedia.org/wiki/Special:Slumpsida");

$doc = new DOMDocument();
@$doc->loadHTML($html);
$nodes = $doc->getElementsByTagName('p');

$body = $nodes->item(0)->nodeValue;



echo strip_tags($body);

?>
