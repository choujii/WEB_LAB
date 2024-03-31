<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> task_3 </title>
</head>
<body>
<div id="form">
    <form method="post" action="save.php">
        <label for="email"> Email </label>
        <input type = "email" name="email" required>

        <label for = "category"> Category </label>
        <select name="category" required>
            <?php
            $direct = scandir("./categories");
            for($i = 2; $i < count($direct); $i++){
                echo "<option value = $direct[$i]> $direct[$i] </option>";
            }
            ?>
        </select>

        <label for="title"> Title </label>
        <input type="text" name="title" required>

        <label for="title"> Description </label>
        <textarea rows="5" name="description"> </textarea>

        <input type = "submit" value="confirm">
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>

        <tbody>
        <?php
        $direct = scandir("./categories");
        for ($i = 2; $i < count($direct); $i++){
            $titles = scandir("./categories/$direct[$i]");
            for($j = 2; $j < count($titles); $j++){
                $files = file("./categories/$direct[$i]/$titles[$j]");

                echo "<tr>";
                echo "<td>$direct[$i]</td>";
                $newTitle = str_replace(".txt","",$titles[$j]);
                echo "<td>$newTitle</td>";
                echo "<td>$files[0]</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>