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
		  $user = $_POST["user"];
		  $passwd = $_POST["passwd"];
		 	
		$conn = mysql_connect($dsn,$usr,$pwd) or die (mysql_error());
        $d = mysql_select_db("testWebApp_hp",$conn) or die (mysql_error());
        $query = mysql_query("SELECT *FROM login") or die (mysql_error());
		
		while($row = mysql_fetch_array($query)):
          {
            if( $user==$row['user'] && $passwd==$row['passwd']){
              echo "<br><br>Logged into your account<br>";
              $i=1;           
            }
          }
		  endwhile;
          mysql_close($conn);
		  
		  if ($i!=1)
		  {
			  echo "Incorrect Username or Password";
		      mysql_close($conn);
		  }
		
		?>
		    
		</center>
        
        </table>
        </div>
        </body>
</html>        
