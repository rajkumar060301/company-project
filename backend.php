<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['phone'];
$connection = mysqli_connect('localhost','root','','companywork');
if (!$connection){
    echo "database not connected";
}
else{
if (isset($_POST['sub'])) {

    $inset_query = "INSERT INTO student(fname,lname,email,phone) values('$fname','$lname','$email','$number')";

    if (mysqli_query($connection, $inset_query)) {
        echo "Data inserted Successfully";
    } else {
        echo "Data not inserted";
    }


}
//echo "data not refelect in database";
}


