<?php
include_once("config.php");

if(isset($_POST["submit"])){
    $name     = trim($_POST["name"]);
    $email    = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $mobile   = trim($_POST["mobile"]);
  

    $sql = "INSERT INTO crud_table (name,email,password,mobile) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $mobile,);

    if($stmt->execute()){
        // echo "Data inserted successfully";
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
                <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" name="mobile" placeholder="Enter your mobile number" class="form-control" required>
            </div>

            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
