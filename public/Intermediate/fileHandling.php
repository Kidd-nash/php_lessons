<?php

//open file
$info_file = fopen("info.txt", "r");
//closes file
fclose($info_file);



//open file in read mode and stored in the variable
$welcome_file = fopen("welcome.txt", "r");
//file size to read
$size = filesize("welcome.txt");
//function read the context of wilcome text
$welcome_text = fread($welcome_file, $size);
//echo to find out what is in the file
echo $welcome_text;
//then close once done
fclose($welcome_file);


//open file my bands in write mode
$bands_file = fopen("my-bands.txt", "w");
//use fwrite function to write the name of favorite band
fwrite($bands_file, "Still Woozy");
//check out the file then close...
fclose($bands_file);


//open file in append mode
$pets_file = fopen("cool-pets.txt", "a");
//add favorite pet name to the file
fwrite($pets_file, "Funcho"); // varies
//check out the file then close...
fclose($pets_file);


// Long version of reading a text and appending contents
// $read_file = fopen("read-me.txt", "r");
// $read_size = filesize("read-me.txt");
// $read_text = fread($read_file, $read_size);
// fclose($read_file);

// $append_file = fopen("append-me.txt", "a");
// fwrite($append_file, "I love PHP!");
// fclose($append_file);

//Shorthand Functions for reading and appending
$read_text = file_get_contents("read-me.txt");

file_put_contents("append-me.txt", "I love PHP!", FILE_APPEND);


//initially set equal to hey.text and file does not exist
$name = "hello.txt";
//create a variable that calls the file_exists on the variable name
$exists = file_exists($name);
//create an if statement to read the file contents, else echo file not found
if ($exists) {
  echo file_get_contents($name);
} else {
  echo "file not found";
}
