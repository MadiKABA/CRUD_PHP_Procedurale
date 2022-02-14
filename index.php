<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>veille_base_php</title>
</head>
<body>
    <div class="container">
        <h2>Ajouter un nouvel etudaint</h2>
        <form action="detail.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">je suis un-e </label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="masculin" value="Masculin">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Homme
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="genre" id="Feminin" value="Feminin">
                    <label class="form-check-label" for="flexRadioDefault2">
                       Femme
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse">
            </div>
            <button type="submit" class="btn btn-primary" name="enregistrer">Enregistrer</button>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>