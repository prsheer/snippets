<form action="" method="post">
    <label>Insert values separated by comma: </label>
    <input type="text" name="insertValues"><br><br>
    <input type="submit" name="submit" value="Uniquit" id="submit">
</form>
<?php

require_once 'UniqueValues.php';

$uniqueValues = new UniqueValues();
$uniqueValues->setUniqueValues($_POST["insertValues"]);

?>

<?php if ($uniqueValues->countUniqueValues() > 0) : ?>
    <p>Unique values are: </p>
<?php else : ?>
    <p>No values.</p>
<?php endif; ?>

<script src="uniquevalues.js"></script>
