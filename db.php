<?php
		  include "credentials.php";
		  		 	
		$conn = mysql_connect($dsn,$usr,$pwd) or die (mysql_error());
        mysql_query("USE testWebApp_hp");
		
		$sql = "CREATE TABLE IF NOT EXISTS `login`(
                 `id` int(11) NOT NULL AUTO_INCREMENT,
                 `fname` varchar(30) NOT NULL,
                 `lname` varchar(30) NOT NULL,
                 `email` varchar(30) NOT NULL,
				 `user` varchar(30) NOT NULL,
				 `passwd` varchar(30) NOT NULL,
				 `num` varchar(30) NOT NULL,
                  PRIMARY KEY (id)) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
				  
	    if(!mysql_query($sql)){
        echo "Error creating table";
      }

?>	  