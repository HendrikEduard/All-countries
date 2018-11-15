<?php
// DB credentials.
$host = '127.0.0.1';
$db   = 'Ghp02FgpuqfbeO';
$user = 'anything_but_root';
$pass = 'anything_but_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$db = new PDO($dsn, $user, $pass, $opt);?>


<select class='form-control' name='category_id'>
<option value="NULL" selected>Select country...</option>
  <?php $data = $db->query("SELECT * FROM countries")->fetchAll();
    foreach ($data as $country)  { ?>
  <option value="<?=$country->id?>"><?=$country->name?></option>
  <?php  } ?>
</select>