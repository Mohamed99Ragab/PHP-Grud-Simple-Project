<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grud Project</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    
    
    <br><br><br>
    <table class="table table-bordered" style="width:50%">
        <tr scope="row">
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">User Name</th>
            <th scope="col">Email</th>
            
            <?php if($userRole == 'admin'): ?>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
            <?php endif ?>

        </tr>
        <?php foreach ($data as $user): ?>
        <tr>
            <td> <?php echo $user['id']  ?> </td>
            <?php if(!empty($user['img'])):?>
            <td> <img style="max-width:50px;border-radius:25px" src="userimg/<?php echo $user['img'] ?>" alt=""></td>
            <?php else: ?>
                <td><img src="userimg/avatar.png"style="max-width:50px;border-radius:25px" alt=""></td>
            <?php endif ?>
            <td> <?php echo $user['username']  ?> </td>
            <td> <?php echo $user['email']  ?> </td>

            <?php if($userRole == 'admin'): ?>
            <td><a href="updateuser.php?id=<?php echo $user['id'] ?>"class="btn btn-primary">Update</a></td>
            <td><a href="deleteuser.php?id=<?php echo $user['id'] ?>"class="btn btn-danger">Delete</a></td>
            <?php endif ?>

        </tr>
        <?php endforeach ?>
    </table>
    


    <script src="js/popper.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>