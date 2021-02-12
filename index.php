<link rel="stylesheet" type="text/css" href="css/index.css">
<?php
    include 'index.html'; 
    $emailError = $_POST["email"];

    if(!$_POST["email"])
    {
?>
        <span><?php echo ""; ?></span>

<?php
    }
    #PHP filters is used to validate and filter data coming from insecure sources, like user input.
    else if (!filter_var($emailError, FILTER_VALIDATE_EMAIL)){
?>
        <span><?php echo "Email format is Invalid"; ?></span>

<?php
    }
    else {
?>
        <span><?php echo $_POST["email"]; ?></span>

<?php
    }
?>