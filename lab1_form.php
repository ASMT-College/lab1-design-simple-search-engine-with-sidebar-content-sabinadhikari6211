<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1 style='color:red'> Fill up the form</h1>";
    if(isset($_POST['submit'])) {
        echo'Password is:'.$_POST['pwd'];
    }
    ?>
    <form action="" method="post">
        <div>
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pwd">
        </div>
        <input type="color" name="choose color" id="">
        <input type="date" name="date" id="">
        <input type="Submit" value="Login" name="submit">
    </form>
</body>

</html>