<?php include './header.php';?>

<?php 
    foreach($thing in $_COOKIE){
        echo $thing;
    }
?>

<div style="grid-row:3/4;
            grid-column:2/3;
            font-size: 3rem;
            ">
    Thanks for buying!
</div>