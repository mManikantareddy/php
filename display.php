<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <table class="table">
            <a href="user.php" class="btn btn-primary my-5">Add User</a>
            <thead>
                <tr>
                    <th scope="col">sl.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM crud_table";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $password = $row["password"];
                        $mobile = $row["mobile"];

                        echo '<tr>
                   <th scope="row">' . $id . ' </th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $password . '</td>
                    <td>' . $mobile . '</td>

                    <td>
                    <button class="btn btn-primary"><a href="update.php? 
                    updateid='.$id.'" class="text-light">update</a></button>
                    
                    <button class="btn btn-danger"><a href="dlete.phep?
                     deleteid='.$id.'"class="text-light">delete</a></button>
                </td>
                   </tr>';
                    }
                }
                ?>
                </tbody>
        </table>

    </div>
</body>

</html>
