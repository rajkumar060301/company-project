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
    if(isset($_POST['user'])){

//        $myConnection = mysqli_connect("localhost", "root", "", "doctor");

        $read_query = "SELECT fname,lname,email,phone FROM student";

        $data = mysqli_query($connection, $read_query);

        if(mysqli_num_rows($data)>0){

            echo "<table style= border: 1ps solid black>

            <tr>
            <th>Frist Name</th>
            <th>Lase Name</th>
            <th>Eamil</th>
            <th>Phone</th>";

            while($row = mysqli_fetch_array($data)){

                echo"<tr>";

                echo "<td>".$row['fname']."</td>";

                echo "<td>".$row['lname']."</td>";

                echo "<td>".$row['email']."</td>";

                echo "<td>".$row['phone']."</td>";


                echo "</tr>";
            }
        } else {
            echo "Record Not found";
        }
    }
}


