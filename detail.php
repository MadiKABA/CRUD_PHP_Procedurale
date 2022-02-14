<?php

    if(isset($_POST['enregistrer']))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $email=$_POST['email'];
        $adresse=$_POST['adresse'];
        $genre=$_POST['genre'];

        if($genre="Masculin")
        {
            echo "<h3>Bonjour Monsieur $nom $prenom vos information sont: </h3><br/>";
            echo "
                    <p>Age: $age </p>
                    <p>Adresse: $adresse </p>
                    <p>Email: $email </p>
                ";
        }else
        {
            echo "<h3>Bonjour Madame $nom $prenom vos information sont: </h3><br/>";
            echo "
                    <p>Age: $age </p>
                    <p>Adresse: $adresse </p>
                    <p>Email: $email </p>
                ";
        }
      

    }