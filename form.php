<?php
    $con = mysqli_connect('localhost', 'u601791871_mca_msc_infoM', ';>xBvw9+;3jK');

    if($con) {
        echo "Connection Successful";
    }
    else {
        echo "Connection Failed";
    }

    mysqli_select_db($con, 'u601791871_MCA_MSc');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO mca_msc_lp (name, email, phone) VALUES ('$name', '$email', '$phone')";

    mysqli_query($con, $query);
    header('location:thank-you.php');

    ?>