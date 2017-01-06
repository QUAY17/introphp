<?php


$firstName = "Barbie Ann";
	$number = 17;

		//echo $number, ' ', $firstName;
		//print $number;

# this is a comment

$firstName = "Jennifer"; //this stores my first name

$lastName = "Minnich"; #this stores my last name

//echo $firstName;
//echo ' ';
//echo $lastName;

$book = "Doris Lessing's nobel prize winning book on Communism in Eastern Europe";
//echo "$book is my favorite book";


//joining strings "concatenation" .

$fullName = $firstName . ' ' . $lastName;
//echo $fullName;
$fullName = "$firstName $lastName";

//echo $fullName;
$title = "(oops forgot)";
$author = "Doris Lessing";
$answer = 30;
$newLines = "\r\n\r\n";

$message = "Name: $fullName $newLines";
$message .= "Book: $book $newLines";
$message .= "Answer: $answer";
echo $message;

