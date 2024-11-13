<?php
include 'database.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $modal = $_POST['modal'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';

    $sql = "INSERT INTO detail (name, modal, mobile, email)
            VALUES ('$name', '$modal', '$mobile', '$email')";
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('New record inserted')</script>";
        echo "<script>window.open('insert.php','_self')</script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
    mysqli_close($con);
}
?>
