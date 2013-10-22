<?php

// This file ist part of the German Language Files Package
// Get the complete package here:
// http://www.phorum.org/phorum5/read.php?65,129717

// Diese Datei ist Teil des Deutschen Sprachpakets
// Das komplette Paket gibt es hier:
// http://www.phorum.org/phorum5/read.php?65,129717

include(str_replace('-informal-male', '', __FILE__));

$PHORUM['DATA']['LANG']['mod_username_restrictions']['max_length']     = 'Bitte wähle einen kürzeren Teilnehmernamen (die maximale Länge ist %length% Zeichen).';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['min_length']     = 'Bitte wähle einen längeren Teilnehmernamen (die minmale Länge ist %length% Zeichen).';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['only_lowercase'] = 'Bitte wähle einen anderen Teilnehmernamen. Der Name "%username%" enthält einen oder mehrere Großbuchstaben, es sind aber nur Kleinbuchstaben erlaubt. Im unten stehenden Formular wurde der Name bereits in Kleinbuchstaben umgewandelt.';
$PHORUM['DATA']['LANG']['mod_username_restrictions']['valid_chars']    = 'Bitte wähle einen anderen Teilnehmernamen. Der Name "%username%" enthält einen oder mehrere unzulässige Zeichen. Zuläassige Zeichen sind: %valid_chars%. Im unten stehenden Formular wurden die unzulässigen Zeichen bereits aus dem Namen entfernt.';

?>
