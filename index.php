<html>
<head> <title>Enter Your Name</title>
<META HTTP-EQUIV="refresh" CONTENT="30">
</head>
<body>

<?php

echo "Your IP Address : " . $_SERVER['REMOTE_ADDR'];

?>

<form action="input.php" method="GET">
<input type='text' name='name' placeholder='Name' required>
<input type='submit' value='Start Chatting'>
</form>


</body>
</html>