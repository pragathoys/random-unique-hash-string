<?php
include "class.hashedkey.php";

// Create a new instance of the class and expect to create a string with length of 16 characters
$hashedClass = new Hashedkey(8);

// Get a new hashed string
echo $hashedClass->get_hashed_key();
