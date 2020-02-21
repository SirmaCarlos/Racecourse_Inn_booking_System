<html lang="en">
<head>
    <title>Example of PHP GET method</title>
</head>
<body>
<?php
if(isset($_GET["scholname"])){
    echo "<p>welcome, " . $_GET["scholname"] . "</p>";
}
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">enterschool:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="registerschool">
</form>
</body>