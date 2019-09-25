<?php
try
{

$bdd = new PDO('mysql:host=localhost;dbname=cuisine;charset=utf8', 'lessandra', 'Lessandra123@');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)

{

echo 'Erreur : '.$e->getMessage();
}

try {
    echo "sdal";
$req = $bdd->prepare ('INSERT INTO reservation (nom, prenom, email, messages)
                        VALUES (:nom, :prenom, :email, :messages)');

        $req->bindParam(':nom', $_POST["name"]);
        $req->bindParam(':prenom', $_POST["sname"]);
        $req->bindParam(':email', $_POST["email"]);
        $req->bindParam(':telephone', $_POST["telephone"]);
        $req->bindParam(':messages', $_POST["msge"]);


$req->execute();

echo "<less>
Votre réservation a été envoyée </div>";

} catch (PDOException $e) {

echo 'oups: '.$e->getMessage();
}