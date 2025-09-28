<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque a odit quis maiores labore impedit ut, doloremque eligendi aperiam iusto praesentium omnis beatae, dolor unde suscipit, fuga sequi repudiandae quaerat!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : ". strlen($loremIpsum) . "<br>";
echo "Panjang kata : ". str_word_count($loremIpsum) . "<br>";
echo "<p>". strtoupper($loremIpsum) . "</p>";
echo "<p>". strtolower($loremIpsum) . "</p>";

?>