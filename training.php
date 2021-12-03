<?php
//so first of all we are going to include the db configuaration file so that it will get connected to the database
// and it is located right in the same folder of the project so let's see

//so we have to include the db file so that it will get connected to the database
 include 'db_config.php';

/*
//preparing our statement using PDO method
//let me make it very simple though we're programming as OOP (Object oriented programming)
$stmt = $conn->prepare("SELECT * FROM tbl_customer");
//the above is a table in the database

//executing
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

//using foreach method to display ALL the information from the database
foreach ($rows as $row){
echo $row->firstname."<br>";


} //make sure the first variable matches the fetch all method or function




//Inserting into the database using positional parameters
 $account_Number = "MFN3200045";
$firstname = "Isaac";
$lastname = "Boakye";
$gender = "M";
$contact = "0555102365";
$address = "Adenta";
$occupation = "Teacher";

//preparing statement
$stmt1 = $conn->prepare("INSERT INTO tbl_customer (acc_no, firstname, lastname, gender, contact, address, occupation) VALUES (?,?,?,?,?,?,?)");


if($stmt1 == true )
{

        $stmt1->execute([
                $account_Number,
                $firstname,
                $lastname,
                $gender,
                $contact,
                $address,
                $occupation
                
                ]);
        
                echo "finished";

     

}

else {

        echo "insertion failed";
    
  
}



//fetchall data from the database using the prepare statement

$sql = "SELECT
tbl_customer.*, 
tbl_deposit.*, 
tbl_customer.cust_id, 
tbl_deposit.dep_id, 
tbl_customer.acc_no, 
tbl_customer.firstname, 
tbl_customer.lastname, 
tbl_deposit.amount, 
tbl_deposit.date, 
tbl_deposit.receipt_no
FROM
tbl_customer
INNER JOIN
tbl_deposit
ON 
        tbl_customer.cust_id = tbl_deposit.dep_id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($rows as $row )
{
 echo $row->id."<br>";
 echo $row->firstname. " " .$row->lastname."<br>";
 echo $row->address."<br>";
 echo $row->occupation."<br>";
 echo $row->contact."<br>";
 echo $row->date_created."<br>";

}

/*
//Fetching/read single data from the database 

$sql = "SELECT firstname FROM tbl_customer";
$stmt = $conn->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($rows as $row )
{
 echo $row->firstname."<br>";
}


//updating data in the database using particular ID under PDO positional parameters

$id = 190;
$acc_no = "MFN3200343";
$firstname = "Nathan";
$lastname = "Nsiah";
$gender = "M";
$contact = "0243567890";
$address = "Adenta";
$occupation = "Software Engineer";

$sql = "UPDATE `tbl_customer` SET `acc_no` = ?, `firstname` = ?, `lastname` = ?, `gender` = ?, `contact` = ?, `address` = ?, `occupation` = ? WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->execute ([
$acc_no,
$firstname,
$lastname,
$gender,
$contact,
$address,
$occupation,
$id

]);

if ($stmt = true) {
	echo "update Successful";
}

else {
	echo "Update Failed";
}



//DELETING from database using PDO positional paramenters
$id = 190;

$sql = "DELETE FROM tbl_customer where id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([
	$id
]);

if ($stmt == true)
{

	echo "Delete from database successful";
}

else {
	echo "Delete failed";
}

*/



$sql = "SELECT * FROM tbl_customer";
$stmt= $conn->prepare ($sql);
$stmt->execute();



?>