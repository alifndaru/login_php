<?php

include("config.php");

if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    $date = $_POST['date'];

    $query = "INSERT INTO demo (name,date) VALUES ('$name','$date')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date Time Inserted Successfully";
        header("Location: view_jadwal.php");
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        header("Location: jadwal.php");
    }
}
?>
