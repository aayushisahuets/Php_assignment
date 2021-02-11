<link rel="stylesheet" type="text/css" href="css/index.css">
<?php
    $emailError = $_POST["email"];

    if(empty($emailError))
    {
?>
        <span><?php echo "Email is required" ?></span>

<?php
    }
    #PHP filters is used to validate and filter data coming from insecure sources, like user input.
    else if (!filter_var($emailError, FILTER_VALIDATE_EMAIL)){
?>
        <span><?php echo "Email format is Invalid"?></span>

<?php
    }
    else {
?>
        <span><?php echo "Email is correct"?></span>
        
<?php
    }
?>