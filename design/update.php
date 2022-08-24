<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <!-- end font -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">

</head>
<body>
    <div class="h-10 d-flex align-items-center justify-content-center">
    <form action="updateuser.php"method="post"enctype="multipart/form-data"style="width:250px;margin: 10px;">
        <input type="text"placeholder="username" value="<?php echo $user_data['username'] ?>" name="username"class="form-control">
        <br>
        <input type="email"placeholder="email" value="<?php echo $user_data['email'] ?>" name="email"class="form-control">
        <br>
        <input type="password"placeholder="password"name="password"class="form-control">
        <br>
        <input type="password"placeholder="confirm password"name="rpassword"class="form-control">
        <br>
        <img src="userimg/<?php echo $user_data['img'] ?>" alt=""style="max-width:80px;border-radius:3px;">
        <input type="file"name="img">
        <input type="hidden"name="id"value="<?php echo $user_data['id'] ?>">
        <br><br>
        <input type="submit"value="Register"class="btn btn-primary">

    </form>
    </div>
    
</body>
</html>