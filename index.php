<?php
require"header.php";
?>
<main>

<?php
if(isset($_SESSION['userId'])){
    echo'<p>Logged in</p>';
}
else{
    echo'<p>Not Logged in</p>';

}
?>

</main>

    <?php
    require"footer.php";

    ?>