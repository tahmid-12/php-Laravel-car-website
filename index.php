<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Site</title>
    <?php include('./client/commonFiles.php'); ?>
</head>
<body>

    <?php 
        include('./client/header.php');

        if(isset($_GET['signup'])){
            include('./client/signUp.php');
        }else if(isset($_GET['login'])){
            include('./client/login.php');
        }else{
            
        }
    ?>
    <!-- 28:20 Seconds -->
    
    
    <?php include('./client/footer.php'); ?>
</body>
</html>