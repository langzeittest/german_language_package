<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

include(str_replace('-informal-female', '-informal-male', __FILE__));

$PHORUM['DATA']['LANG']['mod_username_restrictions']['max_length']     = 'Bitte w�hle einen k�rzeren Namen als Teilnehmerin (die maximale L�nge ist %length% Zeichen).';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['min_length']     = 'Bitte w�hle einen l�ngeren Namen als Teilnehmer (die minmale L�nge ist %length% Zeichen).';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['only_lowercase'] = 'Bitte w�hle einen anderen Namen als Teilnehmer. Der Name "%username%" enth�lt einen oder mehrere Gro�buchstaben, es sind aber nur Kleinbuchstaben erlaubt. Im unten stehenden Formular wurde der Name bereits in Kleinbuchstaben umgewandelt.';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['valid_chars']    = 'Bitte w�hle einen anderen Namen als Teilnehmer. Der Name "%username%" enth�lt einen oder mehrere unzul�ssige Zeichen. Zul�assige Zeichen sind: %valid_chars%. Im unten stehenden Formular wurden die unzul�ssigen Zeichen bereits aus dem Namen entfernt.';

?>
