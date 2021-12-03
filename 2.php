<?php

//include your connection to the database first
//I have a variable in the db config call conn. That is use to connect to the database
include "db_config.php";

//PDO fetch all data and display
//assuming the name of the database is soluotech_user


$stmt = $conn->prepare("SELECT * FROM tbl_customer");
//nothing to bind so proceed and execute
$stmt->execute();

//assigning variable rows to the statement
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

//assigning variable to $rows as $row. the first variable in the foreach parenthesis should match the $rows
foreach ($rows as $row) {
//calling or displaying result using the column name
echo $row->firstname.'<br>';

};



//using positional parameter to display






?>