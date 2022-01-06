<html>
<body>
<?php

include( "connexion.php" );



       
      
	if($_POST["send"])
	{
	
	
		
		
          $query="INSERT INTO client (nom, email, message) 
          VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')  ";
         
		
    }
else
{
     echo $erreur;
} 


			
		
		//echo $query  ; 
		//exit() ; 
		if ( $resultat =$connexion->query($query )) 
		{
            $name=$_POST["name"];
            $email=$_POST["email"];
            $msg=$_POST["message"];
            $to   = "mahdilahmer544@gmail.com";
            $subject = 'nouveau client veut vous contacter';
            $message = "Nom: ".$name."<br> Email: ".$email."<br> Message: ".$msg;
            $headers= "From: mahdilahmer544@gmail.com";
            $headers .="MIME-Version: 1.0" . "\r\n";
            $headers .="Content-type:text/html;charset=UTF-8"."\r\n";
  
            mail($to,$subject,$message,$headers);
			header("Location: index.php?ajouter=oui");
		}
		
		else
			{
				header("Location: index.php?ajouter=non");
		}
			
		
	
		
		?>
  

</body>
</html>