<?php 


   $name="nini";
   $pass="aigle";

   $db = new PDO ('mysql:host=localhost;dbname=produit', $name, $pass);
   

   $req1 = "SELECT * FROM produit";
   
   $execute = $db->query($req1);

   $resultat = $execute->fetchall(PDO::FETCH_OBJ);








?>