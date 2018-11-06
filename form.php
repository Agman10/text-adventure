<?php
include_once 'include
//PDO


if(isset($_POST['submit])) {
    $stmt = $dbh->prepare("INSERT INTO form 
                            (place, text) 
                            VALUES 
                            (:place, :text)");
    $stmt->bindParam(':place' , $_POST['place']);
    $stmt->bindParam(':text' , $_POST['text']);
    $stmt->execute();
}

$sql = "SELECT * FROM form";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>" . print_r($row,1) . "</pre>";
echo $row

?>