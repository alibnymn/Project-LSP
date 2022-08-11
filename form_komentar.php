<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 <input type="text" name="comment" value="">
 <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['submit'])){
    echo htmlspecialchars($_POST['comment']);
}
?>