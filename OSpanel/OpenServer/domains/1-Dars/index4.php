<body>
<form action="GET">
    Ism <br>
    <input name="ism" type="text" placeholder="Ismizni yozing"> <br>
    Shahar <br>
    <input name="city" type="text" placeholder="Shaharizni yozing"> <br>
    Tu'gilgan kun oy yili <br>
    <input name="sana" type="date" placeholder="Sanani yozing"> <br>
    <input type="submit">
</form>
</body>

<?php
ini_set('display_errors', '1');
error_reporting (E_ALL);

$user = 'root';
$password = '';
$dbName = 'kollej';

$dsn = "mysql: dbname=$dbName";
$pdo = new Pdo ($dsn, $user, $password);

$pdoStatement = $pdo->prepare(
    "INSERT INTO `students`
    (`ism`, `shahar`, `birthday`)
    VALUES
    ('$ism', '$city', '$sana',)
");

if (!$pdoStatement->execute()) {
    print 'Malumot olindi';
    }else{
print 'Qanaqadir xatolik yuz berdi';
}
?>