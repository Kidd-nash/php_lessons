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