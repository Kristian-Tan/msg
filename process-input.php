<?php 

function HTMLSanitize($x)
{
	//This function is used to prevent SQL injection attack
    //THESE CODES ARE USED TO REPLACE DANGEROUS SYMBOL INTO A SPACE
    $x = str_replace(';' ,' ', $x); //SEMICOLON
	$x = str_replace('<' ,' ', $x); //SEMICOLON
	$x = str_replace('>' ,' ', $x); //SEMICOLON
    $x = str_replace('%' ,' ', $x); //PERCENT
    $x = str_replace('_' ,' ', $x); //UNDERSCORE
    $x = str_replace('-' ,' ', $x); //DASH
    $x = str_replace('!' ,' ', $x); //ECLAMATION
	$x = str_replace('?' ,' ', $x); //QUESTION
    $x = str_replace('[' ,' ', $x); //OPEN SQUARE BRACKET
    $x = str_replace(']' ,' ', $x); //END SQUARE BRACKET
	$x = str_replace('{' ,' ', $x); //OPEN BLOCK BRACKET
	$x = str_replace('}' ,' ', $x); //CLOSE BLOCK BRACKET
    $x = str_replace('"' ,' ', $x); //DOUBLE QUOTE
    $x = str_replace("'" ,' ', $x); //SINGLE QUOTE
    $x = str_replace('(' ,' ', $x); //OPEN ROUND BRACKET
    $x = str_replace(')' ,' ', $x); //END ROUND BRACKET
	$x = str_replace('|' ,' ', $x); //ABSOLUTE
    $x = str_replace('*' ,' ', $x); //ASTERISK
	$x = str_replace('.' ,' ', $x); //DOT
	$x = str_replace('`' ,' ', $x); //BACKCOMMA
	$x = str_replace('/' ,' ', $x); //SLASH
	$x = str_replace('\\' ,' ', $x); //BACKSLASH
	$x = str_replace(':' ,' ', $x); //DOUBLEDOTS
	$x = str_replace('=' ,' ', $x); //EQUIVALENT SIGN
	$x = str_replace('$' ,' ', $x); //DOLLAR
	$x = str_replace('^' ,' ', $x); //EXPONENT
	
	
	$x = str_replace('&' ,' ', $x); //AND
	$x = str_replace('~' ,' ', $x); //WAVE	
	//THESE CODES ARE USED TO REPLACE DANGEROUS UNICODE INTO A SPACE
	$x = str_replace('\x00' ,' ', $x);
	$x = str_replace('\n' ,' ', $x);
	$x = str_replace('\r' ,' ', $x);
	$x = str_replace('\x1a' ,' ', $x);
    return $x;
}
?>

<html>
<head> <title>Input</title>
</head>
<body>

<?php 

$filename = 'msg-data.txt';
$file=fopen($filename,"r+") or exit("Unable to open file!");

if(HTMLSanitize($_POST['name'])==""){
	$name="no_name";
}else{
	$name=HTMLSanitize($_POST['name']);
}

$newmsg = HTMLSanitize($_POST['msg']);

while (!feof($file)) {
    $line=fgets($file);
       $newline = PHP_EOL . $_SERVER['REMOTE_ADDR'] . " (" . $name . ") : " . $newmsg;

}

fwrite($file, $newline);

fclose($file);

header('Location: input.php?name='.$name);

?>

</form>
</body>
</html>