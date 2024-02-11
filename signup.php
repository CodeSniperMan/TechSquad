<?php
$insert = false;
if(isset($_POST['name'])){
    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sggs";
    //create a database connection
    $con = mysqli_connect($server, $username, $password,$dbname);
    //check for connection success
    if(!$con){
        die("connection to this databsse failed due to" . mysqli_connect_error());
    }
    $fullname = $_POST['fullname'];
    $mail = $_POST['mail'];
    $dob = $_POST['dob'];
    $mobileno = $_POST['mobileno'];
    //$photo = $_POST['photo'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    echo $fullname;
    $sql = "INSERT INTO `signup` (`fullname`, `mail`, `dob`, `mobileno`, `password`, `cpassword`) VALUES ('$fullname', '$mail', '$dob', '$mobileno', '$password', '$cpassword')";
    //echo $sql;

    //execute the query
    if($con->query($sql) == true){
        //echo "Successfully inserted";
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new account</title>
    <link rel="stylesheet" href="/new account/cna.css">
</head>
<body>
    <main>
        <div class="cna">
            <form action="" id="register">
                <h3>Create your account!</h3>

                <div class="fn">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="fullname" id="fullname" required>
                </div>

                <div class="mail">
                    <label for="mail">College mail Id</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="dob">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob">
                </div>

                <div class="mobileno">
                    <label for="mobileno">Mobile Number</label>
                    <input type="phone" name="mobileno" id="mobileno" required>
                </div>

                <!-- <div class="upload">
                    <label for="photo">Upload photo of college Id card</label>
                    <input type="file" name="photo" id="photo" required>
                </div> -->
                <div class="password">
                    <label for="password">Password</label>
                    <input type="varchar" name="password" id="password" required>
                </div>

                <div class="cpassword">
                    <label for="cpassword">Confirm Password</label>
                    <input type="varchar" name="cpassword" id="cpassword" required>
                </div>

                <div class="verify">
                    <a href="/new account/otp.html"><button type="submit" id="verify" onclick="redirectToOtp()">submit!</button></a>
                </div>
            </form>
        </div>
    </main>
    <script src="/new account/cna.js"></script>
</body>
</html>