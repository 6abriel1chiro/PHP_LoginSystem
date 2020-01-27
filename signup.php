<?php

require"header.php";
?>

<h1>Signup</h1>
         <form action="includes/signup.inc.php" method ="post">
            <input type="text" name="uid" placeholder="UserName">
            <input type="text" name="mail" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
             <input type="password" name="pwd-repeat" placeholder="Repeat-Password">
            <button type="submit" name="signup-submit">signup</button>
        </form> 

<?php
    require"footer.php";

?>