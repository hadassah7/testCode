<html>
        <head>
            <meta http-equiv="refresh" content="240" />
            <title> Assignment </title>                                
         
        </head>
        
        <body>
        <div class ="main">
        <table style = "width:1300px;" cell spacing = "0" cell padding = "0">
        <tr><td colspan ="5" style="background-color:#CEF6D8;">        
        <h1><center> 8K Miles </center></h1>
        </td></tr>      
         
        <tr>
        <td colspan = "5">
         <center>                      	    	
        <?php
		
		  include "credentials.php";
		  $fname = $_POST["fname"];
          $lname = $_POST["lname"];
          $email = $_POST["email"];
		  $user = $_POST["user"];
		  $passwd = $_POST["passwd"];
		  $passwd2 = $_POST["passwd2"];
		  $num = $_POST["num"];
		  
		$conn = mysql_connect($dsn,$usr,$pwd) or die (mysql_error());
        $d = mysql_select_db("testWebApp_hp",$conn) or die (mysql_error());
        $query = mysql_query("SELECT *FROM login") or die (mysql_error());
		
		while($row = mysql_fetch_array($query)):
          {
            if( $user==$row['user'] ){
              echo "<br><br>Username already in use. Choose another one<br>";
              $i=1;           
            }
          }
		  endwhile;
          mysql_close($conn);
		  
		  if ($passwd!=$passwd2)
		  {
			  echo "Passwords do not match";
		  }
		  
		  if ($i!=1)
		  {
			  $conn = mysql_connect($dsn,$usr,$pwd) or die (mysql_error());
              $d = mysql_select_db("testWebApp_hp",$conn) or die (mysql_error());
              $query2 = mysql_query("INSERT INTO login (fname,lname,email,user,passwd,num) VALUES ('$fname','$lname','$email','$user','$passwd','$num')");
			  echo "<br><br> Created Account";
			  mysql_close($conn);
		  }
		
		?>
		    
		</center>
        
        </table>
        </div>
        </body>
</html>        
