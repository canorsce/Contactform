<?php
include_once 'Database.php';

if(isset($_POST['submit']));{

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO demo (Naam,Achternaam,Land,Bericht)
    VALUES  ('$fname','$lname','$country','$subject')";

    if(mysqli_query($conn, $sql)) {
        echo "Gelukt";
    }else{
        echo"Error:" . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}   