<?php include("conn.php");  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="" method="post">

    <h2>Registration Form</h2>

    <div>
    <label>First Name</label>
    <input type="text" placeholder="First Name" name="fname" required><br><br>
    </div>

    <div>
    <label>Last Name</label>
    <input type="text" placeholder="Last Name" name="lname" required><br><br>
    </div>

    <div>
    <label>Password</label>
    <input type="password" placeholder="Password" name="password" required><br><br>
    </div>

    <div>
    <label>Confirm Password</label>
    <input type="password" placeholder="Confirm Password" name="cpassword" required><br><br>
    </div>

    <div>
    <label>Gender</label>
    <select name="gender" required>
        <option value="">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>
    </div>

    <div>
    <label>Email</label>
    <input type="email" placeholder="EMAIL" name="email" required><br><br>
    </div>

    <div>
    <label>Phone</label>
    <input type="number" placeholder="PHONE" name="phone" required><br><br>
    </div>

    <div>
    <label>Address</label>
    <textarea name="address" id="" required></textarea><br><br>
    </div>

    <input type="submit" name="save" class="submit">

    </form>
</body>
</html>

<?php
if($_POST['save'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    

   $query =  "INSERT INTO `employee`(`id`, `fname`, `lname`, `password`, `cpassword`, `gender`, `email`, `phone`, `address`) VALUES (',',' $fname' , '$lname','$pass','$cpass','$gender','$email','$phone','$address')";

  

   $result = mysqli_query($conn, $query);

   if($result)
   {
    echo "Insert Data Into Database";
   }else
   {
    echo "Failed";
   }
}

?>