<?php
include_once("config.php");
$id=$_GET['updateid'];
$sql= "SELECT * FROM crud_table WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$id=$row["id"];
$name=$row["name"];
$email=$row["email"];
$password=$row["password"];
$mobile=$row["mobile"];
if(isset($_POST["submit"])){
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $mobile   = trim($_POST["mobile"]);
  

   $sql = "UPDATE crud_table SET id='$id',name='$name',email='$email',password='$password',mobile='$mobile' WHERE id=$id";
   $result = mysqli_query($conn,$sql);
   if($result){
    
   }

   if($result){
        //  echo "Data updated successfully";
      header('location:display.php');
    } else {
        die("Error: " . $stmt->error);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control" value="<?php echo $name;?>" required >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control"  value="<?php echo $email;?>" required >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" value="<?php echo $password;?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" placeholder="Enter your mobile number" class="form-control"  value="<?php echo $mobile;?>" required>
            </div>

            <button type="update" class="btn btn-primary" name="submit">update</button>
        </form>
    </div>
</body>
</html>
