<?php session_start() ?>
<html>
<head></head>
<body>

<?php
$a=rand (0,10);
$b=rand (0,10);

echo "<h2>";
echo $a."+".$b."=?</h2>";
?>

<form>

<input type="text" name="t1">
<input type="hidden" name="javob" value="<?=$c; ?>"> 
<input type="submit" name="s1" value="Tekshirish">

</form>

<?php
if(isset($_GET["s1"]))
{
    if ($_GET["t1"]==$_GET["javob"])
    {
        $_SESSION["j1"]="1";
        ?>
    <script type="text/javascript"> 
    window.location.href="index2.php";
    </script>
    <?
}
}
?>
</body>
</html>