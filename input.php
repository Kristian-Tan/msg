<html>
<head> <title>Input</title>
<META HTTP-EQUIV="refresh" CONTENT="30">
</head>
<body>

<?php

echo "Your IP Address : " . $_SERVER['REMOTE_ADDR'] . "<br>Your Name: " . $_GET['name'] . "<br><br>";

?>

<form action="process-input.php" method="POST">
<input type='text' name='name' placeholder='My name is ... (optional)' value='<?php echo $_GET['name']; ?>'><br>
<input type='text' name='msg' placeholder='Message (required)' required style="height:10%;width:40%;">
<input type='submit' value='Send'>
</form>

<?php

//echo nl2br(fread(fopen("msg-data.txt", "r"),filesize("msg-data.txt")));
//fclose(fopen("msg-data.txt", "r"));

?>
<iframe width=50% height=50% src="display.php"></iframe>

</body>
</html>