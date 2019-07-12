<?php
echo 'start';
$p = file_get_contents('https://www.tibia.com/community/?subtopic=killstatistics&world=Impera');
//echo $p;
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($p);
libxml_clear_errors();
foreach($doc->getElementsByTagName('tr') as $row){
	foreach($row->getElementsByTagName('td') as $node){
		echo $node->textContent . '<br/>';
	}
}
/*
$xpath = new DOMXPath($doc);
$row = $xpath->query('//*[@id="killstatistics"]/div[5]/div/div/form/table/tbody');
if ($row->length > 0){
	foreach($row as $tr){
		echo $tr;
	}
}
 */
