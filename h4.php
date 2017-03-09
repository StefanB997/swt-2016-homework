<?php
function palindrom($word){
	$rev = strrev($word);
	if($word == $rev){
		return true;
	} else if($word !== $rev){
		return false;
	}
}
function reverse($niza){
	foreach($niza as $n){
		$p = palindrom($n['word']);
		if($p == $n['palin']){
			echo 'Success!';
		} else if($p !== $n['palin']){
			echo 'Fail';
		}
	}
}

$niza = [
	[
		'word' => 'racecar',
		'palin' => true	
	],
	[
		'word' => 'rebeka',
		'palin' => false
	],
	[
		'word' => 'motor',
		'palin' => false
	],
	[
		'word' => 'ana',
		'palin' => true
	],
	[
		'word' => 'civic',
		'palin' => true
	],
	[
		'word' => 'level',
		'palin' => true
	],


];

reverse($niza);




?>