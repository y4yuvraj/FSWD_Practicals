<?php

$dbname = "bookstore";
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";


//Connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    echo "Error";
    exit();
}
else
{
    echo"connected";
}

if(isset($_POST['add_books'])){
    // echo"hey";
    $publication_year = mysqli_real_escape_string($conn,$_POST['publication_year']);
    $book_type = mysqli_real_escape_string($conn,$_POST['book_type']);
    $bookName = mysqli_real_escape_string($conn,$_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn,$_POST['authorName']);
    $isbnNumber = mysqli_real_escape_string($conn,$_POST['isbnNumber']);
    $publisherName = mysqli_real_escape_string($conn,$_POST['publisherName']);
    $noOfPages = mysqli_real_escape_string($conn,$_POST['noOfPages']);
    $id="";
    $sql = "INSERT INTO `bookstore`(`id`, `publication_year`, `book_type`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `noOfPages`) VALUES ('$id','$publication_year','$book_type','$bookName','$authorName','$isbnNumber','$publisherName','$noOfPages')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:./one.php?task=successfull");
    }
    
}