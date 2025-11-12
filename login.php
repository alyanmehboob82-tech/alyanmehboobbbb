<?php
include "connection.php";

if(isset($_POST['signup'])){

$username= mysqli_real_escape_string($_POST['username']);
$password= mysqli_real_escape_string($_POST['password']);


if(empty($username)){
$error= "username is required";
 }elseif (empty($password)){
$error="password is required";


$sql ="INSERT INTO `login`(`username`, `email`) VALUES ('$username','$password')";
$result =mysqli_query($conn, $sql);

if($result){
$error ="data submit ";
}
$error=  "data not submit";

}

}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    form {
        max-width: 500px;
        margin: 50px auto;
    }
    </style>
</head>

<body>
    <form method="POST" class="mx-auto border p-4 rounded" style="max-width:500px;" id="login">
        <h1>Login </h1>


<p><?php
if($username == ""){
echo "username is required";
}elseif($password == ""){
    echo "password is required";
}
?></p>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="username" type="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
        </div>



        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>

    </form>



</body>

</html>