<!DOCTYPE html>
<html>
<body>

<form method="post" action="subscriberform.php">


<textarea name="message"></textarea>


<input type="submit">


</form>

<?php


if($_POST["message"]) {


mail("zayedimian@hotmail.com", "Here is the subject line",


$_POST["test"]. "From: Whatever@n.co");


}


?>

</body>
</html>
