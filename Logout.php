<?php

session_start();

?>

<h2>WELCOME! <?php echo $_SESSION['name'];   ?>, You Can Add Comments To This Page......

                             
                <form action="virtual.php" method="post">
<p align="right">
        <input style="background-color:rgb(236, 51, 51); align:right" type="submit" name="logout" value="LogOut">
</p></form>
</h2>

<?php
       
        if(isset($_POST['logout'])){

            session_destroy();
            header['location:virtual.php'];
        }
    
    ?>