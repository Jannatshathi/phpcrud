<?php
include 'database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5" > <a href="create.php" class="text-light" >Add User</a>
            </button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    
                    <?php
                    
                    // variable for loop 
                    $i = 1;
                    $sql = "select * from `users`"; // query for select all data
                    $result = mysqli_query($con,$sql); // check query and conection
                    if($result){
                        // loop for single data
                        while($row = mysqli_fetch_assoc($result)){
                            // $id = $row['id'];
                            $name = $row['Name'];
                            $email = $row['Email'];
                            $mobile = $row['Mobile'];
                            $password = $row['Password'];
                            echo ' <tr>
                                <td>'.$i.'</td>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>'.$password.'</td>
                                <td>
                                    <button class="btn btn-success"><a href="update.php?updateid='.$i.'" class="text-light">Update</a></button>
                                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$i.'" class="text-light">Delete</a></button>
                                </td>
                                </tr>';
                            $i++;
                        }
                    }

                    ?>

                </tbody>
              </table>
    </div>
</body>
</html>
