<?PHP
  if (isset($_POST['Submit1'])) {
	   $wish = $_POST['content'];

     $user_name = "root";
     $password = "woaihuan";
     $database = "make-a-wish";
     $server = "127.0.0.1";

     $db_handle = mysql_connect($server, $user_name, $password);

     $db_found = mysql_select_db($database, $db_handle);

     if ($db_found) {
       $SQL = "INSERT INTO wish (content) VALUES ('$wish')";
       $result = mysql_query($SQL);
       mysql_close($db_handle);
     }
     else {
       print "Error Found ";
       mysql_close($db_handle);
     }
   }
?>
