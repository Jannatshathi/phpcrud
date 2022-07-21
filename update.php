<?php
include 'databse.php';
$id=$_GET['updateid'];
$sql="select * from users where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="update users set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";

    $result=mysqli_query($con,$sql);
    if($result){
        echo "updated successful";
        //header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>Crud</title>
  </head>
  <body>
    
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off" 
              value="<?php echo $name;?>">
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" autocomplete="off"
                value="<?php echo $email;?>">
              </div>

              <div class="form-group">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your mobile Number" name="mobile" autocomplete="off" value="<?php echo $mobile;?>">
              </div>
              <div class="form-group">
                <label class="form-label">Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password" 
                value="<?php echo $password;?>" autocomplete="off">
              </div>
              <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
   
  </body>
</html>
