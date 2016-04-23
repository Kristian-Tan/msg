<html>
<head><META HTTP-EQUIV="refresh" CONTENT="5">
</head>
<body>
<h4>Message History:</h4>
<?php
echo nl2br(fread(fopen("msg-data.txt", "r"),filesize("msg-data.txt")));
fclose(fopen("msg-data.txt", "r"));
?>
</body>
</html>