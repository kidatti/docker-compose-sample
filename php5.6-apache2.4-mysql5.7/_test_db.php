<?php

try {
    $pdo = new PDO('mysql:host=db;dbname=test;charset=utf8','test','test',
        array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
    exit('Database Error : '.$e->getMessage());
}

$stmt = $pdo->query("SELECT * FROM users");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    echo '<p>Name is '.$row['name'].'.</p>';
}

