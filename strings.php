<?php
//strings
echo "hello <br>";
echo 'hello <br>';
//string functions
//strlen() returns the length of a string
echo strlen("hello");
echo "<br>";
//str_replace()function replaces some characters with some other characters in a string.
$x="hello php";
echo str_replace("hello","hi",$x);
echo "<br>";
//strtoupper() function returns the string in upper case:
echo strtoupper($x);
echo "<br>";
echo strtoupper("good morning <br>");
//The strtolower() function returns the string in lower case:
echo strtolower($x."<br>");
//str_word_count() function counts the number of words in a string
echo str_word_count("hello world");
echo "<br>";
//strpos() function searches for a specific text within a string
echo strpos("hello world","world");
echo "<br>";
//strrev reverses a string
echo strrev("jane");
echo "<br>";
//substring substr()-returns a slice of slice
echo substr("hello jane",3);
echo "<br>";
echo substr("hello jane",3,5);