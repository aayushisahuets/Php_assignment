<!Doctype html>
<html>
    <head>
        <title>Php assignment</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <form method="post">
            <input type="text" name="email" placeholder="Enter email">
            <input type="submit" name="submit" value="Submit">
        </form>
       
    </body>
</html>


<?php
    if($_POST["submit"] && (!$_POST["email"])) {
?>
        <span class="error"><?php echo "Email is required"; ?></span>
<?php
    }
    else { 
?>
        <span class="error"><?php echo $_POST["email"]; ?></span>
<?php  } 
?>