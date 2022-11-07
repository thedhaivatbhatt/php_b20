<?php 
    //variable declaration 
    //$variablename = value;
    $color = 'cyan'; 
    $date = date("d-m-Y"); 
    $code = 91;  
    $gender = true; 
    $pi = 3.14; 
?>
<html>
    <head>
        <title>
            <?php 
                echo $date;  
            ?>
        </title>
    </head>
        <body bgcolor="<?php echo $color; ?>">
            <h1>Country code = <?php echo $code; ?></h1>
            <h2>Pi =<?php echo $pi; ?></h2>
            <p>
                gender = <?php echo $gender; ?>
            </p>
        </body>
</html>