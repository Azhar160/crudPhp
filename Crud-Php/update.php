<?php include("conn.php"); 

$id = $_GET['id'];

$query = "SELECT * FROM employee WHERE id = '$id' ";

$result = mysqli_query($conn, $query);

$another = mysqli_fetch_assoc($result);

?>


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

    <h2>Update Form</h2>

    <div>
    <label>First Name</label>
    <input type="text" placeholder="First Name" value="<?php echo $another['fname']?>" name="fname" required><br><br>
    </div>

    <div>
    <label>Last Name</label>
    
    <input type="text" value="<?php echo $another['lname']?>" placeholder="Last Name" name="lname" required><br><br>
    </div>

    <div>
    <label>Password</label>
    <input type="password" value="<?php echo $another['password']?>" placeholder="Password" name="password" required><br><br>
    </div>

    <div>
    <label>Confirm Password</label>
    <input type="password" value="<?php echo $another['cpassword']?>" placeholder="Confirm Password" name="cpassword" required><br><br>
    </div>

    <div>
    <label>Gender</label>
    <select name="gender" required value="<?php echo $another['gender']?>">
        <option value="">Select</option>
        <option value="Male"
        <?php if($another['gender'] == 'Male')
        {
              echo "Selected";
        } 
        ?>
        >
            
        Male</option>
        <option value="Female"
        <?php if($another['gender'] == 'Female')
        {
              echo "Selected";
        } 
        ?>
        
        >Female</option>
    </select><br><br>
    </div>

    <div>
    <label>Email</label>
    <input type="email" value="<?php echo $another['email']?>" placeholder="EMAIL" name="email" required><br><br>
    </div>

    <div>
    <label>Phone</label>
    <input type="number" value="<?php echo $another['phone']?>" placeholder="PHONE" name="phone" required><br><br>
    </div>

    <div>
    <label>Address</label>
    <textarea name="address" required>

    <?php  echo $another['address'];    ?>

    </textarea><br><br>
    </div>

    <input type="submit" name="update" class="submit">

    </form>
</body>
</html>

<?php
if($_POST['update'])
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    if($fname != "" && $lname != "" && $pass != "" && $cpass != "" && $gender != "" && $email != "" && $phone != "" && $address != ""){

        $query = "UPDATE `employee` SET `fname`='$fname',`lname`='$lname',`password`='$pass',`cpassword`='$cpass',`gender`='$gender',`email`='$email',`phone`='$phone',`address`='$address' WHERE id = '$id'";

   $result = mysqli_query($conn, $query);

   if($result)
   {
    echo "<script>alert('Record Updated')</script>";
    ?>

 <meta http-equiv="refresh" content="0; url = http://localhost/cyber-warriors-crud/display.php">


    <?php
   

   }else
   {
    echo "Failed Updated";
   }
}else
{
    echo "<script>alert('Please Fill The Form')</script>";
}
}

?>