<form action="" method="post">
    <label>Insert first word: </label>
    <input type="text" name="first"><br><br>
    <label>Insert second word: </label>
    <input type="text" name="second">
    <input type="submit" name="submit" value="Anagramit" id="submit">
</form>
<?php

    require_once 'Anagram.php';

    $anagram = new Anagram();
    $anagram->setFirst($_POST['first']);
    $anagram->setSecond($_POST['second']);

    $areOrNot = $anagram->areOrNot();

?>
<?php if (isset($areOrNot)) : ?>
    <p>Words <?= $areOrNot; ?> anagrams</p>
<?php else: ?>
    <p>No words.</p>
<?php endif; ?>


<script src="anagram.js"></script>
