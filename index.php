<html>
<head>
<title>A BASIC HTML FORM</title>
</head>
<html>
<head>
<title>A BASIC HTML FORM</title>
</head>
<body>
<?PHP
  $user_name = "root";
  $password = "woaihuan";
  $database = "make-a-wish";
  $server = "127.0.0.1";

  $db_handle = mysql_connect($server, $user_name, $password);

  $db_found = mysql_select_db($database, $db_handle);

  if ($db_found) {

    $SQL = "SELECT * FROM wish";
    $result = mysql_query($SQL);

    while ( $db_field = mysql_fetch_assoc($result) ) {
      print $db_field['id'] .":";
      print $db_field['content'] . "<BR>";
    }
    mysql_close($db_handle);
  }
  else {
    print "Database NOT Found ";
    mysql_close($db_handle);
  }
?>

<FORM NAME ="form1" METHOD ="POST" ACTION ="create.php">



wish <INPUT TYPE = 'TEXT' Name ='content'  value="<?PHP print $content ; ?>">



<INPUT TYPE = "Submit" Name = "Submit1"  VALUE = "save">
</FORM>

</body>
</html>
