<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset = "UTF = 8">
    <title>task_2.1</title>
</head>
<body>
<form method = "post">
    <textarea rows = "5" name = "textArea"></textarea>
    <input type = "submit" name = "text" value = "confirm">
</form>
<?php
if( true === isset( $_POST['textArea'] ) ){
    $string = $_POST['textArea'];
    echo "Numbers of the words: ". str_word_count($string).'<br>';
    echo "Numbers of the chars: ". strlen($string);
}
?>
</body>
</html>