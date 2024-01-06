<?php session_start()
if($_SESSION=["j1"]=="1")
{
    $a=rand (10,20);
    $b=rand (10,0);
    $c=$b+$a;
    echo "<h2>";
    echo $a."+".$b."=?</h2>";
}
?>

<form>
    <input type="text" name="t1">
    <input type="hidden" name="javob" value="<?=$c;?>"> 
    <input type="submit" name="s1" value="Tekshirish"> 
</form>

<?php
if(isset($_GET["s1"]))
{
    if ($_GET["t1"]==$_GET["javob"])
    {
        $_SESSION["j2"]=1;
    ?>
    <script type="text/javascript"> 
    window.location.href="index3.php";
    </script>
    <?
}
}
else{
    echo "Javob noto'g'ri";
}
else{
    header(
    "Location:index.php"
    );
}
?>