<?php

require_once "connect.php";
require_once "horizontal-line.php";

echo "Update the cats field to add one more cat to it's count.<br>";

$count = $dbh->exec ("UPDATE profile SET cats = cats+1 WHERE name = 'Sybil'");
printf("Number of rows updated: %d\n", $count);
hr();
