<?php
function validateText($text){
	return preg_replace('/[^A-Za-z ]/','', $text);
}
function validateNumber($text){
	return preg_replace("/[^0-9]/","",$text);
}
?>