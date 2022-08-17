<?php
   include"receive.php";
   //$serveur = "localhost";
   // $dbname = "cours";
   // $user = "root";
    //$pass = "root";
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["age"]) && isset($_POST["genre"]) && isset($_POST["relation"]) && isset($_POST["pays"]) );
    {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $age = $_POST["age"];
    $genre = $_POST["genre"];
    $relation = $_POST["relation"];
    $pays = $_POST["pays"];
     
    $req= mysqli_query($link,"insert into  projet (nom,prenom,mail,age,genre,relation,pays) values('$nom','$prenom','$mail' ,'$age','$genre','$relation','$pays' )");
   
   
    if($req)
    {

     echo"inserti on effectuee";}
    else{

    echo"erreur d'insertion";
    
    }
    }
    // try{
        //On se connecte à la BDD
     //   $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
      //  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
       // $sth = $dbco->prepare("
         //   INSERT INTO receive(nom,prenom, mail, age, genre,relation, pays)
           // VALUES($nom,$prenom,$mail,$age,$genre,$relation,$pays)");
        //$sth->bindParam(':prenom',$prenom);
        //$sth->bindParam(':mail',$mail);
        //$sth->bindParam(':age',$age);
        //$sth->bindParam(':sexe',$sexe);
        //$sth->bindParam(':pays',$pays);
        //$sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
       // header("Location:confirmation.html");
   // }
    //catch(PDOException $e){
      //  echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    //}

?>
