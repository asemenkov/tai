<?php

function printForm() {
    print "Test Printing";
    print "<br>";
}

function searchForValue($value) {
    $searchfor = $value;
    $file = './../form/logs.txt';
    $contents = file_get_contents($file);
// escape special characters in the query
    $pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
    $patterns = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
    $matches = [];
    if (preg_match_all($patterns, $contents, $matches)) {
        echo "Found matches for ". $value. ":" . PHP_EOL;
        echo implode("\n", $matches[0]);
    } else {
        echo "No matches found";
    }
}

function saveToFile() {
    
}

function show() {
    
}

function add() {
    
}

function showJava() {
    
}

function showPHP() {
    
}

function showCPP() {
    
}
