<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Chivo+Mono:ital@0;1&family=Edu+NSW+ACT+Foundation:wght@500&family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    if(!empty($_POST["send"])){
        $username = $_POST["username"];
        $secondname = $_POST["secondname"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $country = $_POST["country"];
        $formation = $_POST["formation"];
        $threemois = $_POST["threemois"];
        $sixmois = $_POST["sixmois"];
        $flstudio = $_POST["flstudio"];
        $photoshop = $_POST["photoshop"];
        $adobepremier = $_POST["adobepremier"];
        $toEmail = $_POST["vivanmoon9@gmail.com"];

        $mailHeaders ="Name: " . $username .
        "\r\n secondname: " . $secondname .
        "\r\n email: " . $email .
        "\r\n number: " . $number .
        "\r\n country: " . $country .
        "\r\n formation: " . $formation .
        "\r\n threemois: " . $threemois .
        "\r\n sixmois: " . $sixmois .
        "\r\n flstudio: " . $flstudio .
        "\r\n photoshop: " . $photoshop .
        "\r\n adobepremier: " . $adobepremier ."\r\n";

        if(mail($toEmail, $username, $mailHeaders)){
            $message = "Your Information is Received Successfully.";  
        }

    }


    ?>
    <header>
        <h1>2i<span>Information</span></h1>
        <h3>inscription etidient</h3>
    </header>
    <main>
        <div>
        <form method="post" name="emailContact">
            <label for="Name">Nom & Prénom</label><br>
            <input class="name" type="text" name="username" id="name" placeholder="Name" required>
            <input class="name" type="text" name="secondname" id="name" placeholder="Prénom" required><br>
            <label for="Adress">Email</label><br>
            <input class="same" type="email" name="email" id="email" placeholder="example@gmail.com"  required><br>
            <label for="number">Numéro de téléphone</label><br>
            <input class="same" type="text" name="number" id="number" placeholder="+21699999999" required><br>
            <label for="country">Ville</label><br>
            <input class="same" type="text" name="country" id="country" placeholder="tunis" required><br>
            <label for="Formation">Formation</label><br>
            <select name="formation" id="formation" required>
                <option value="">Veuillez sélectionner</option>
                <option name="threemois" value="">Full Stack ( DEV Web ) 3 mois</option>
                <option name="sixmois" value="">Full Stack ( DEV Web ) 6 mois</option>
                <option name="flstudio" value="">Fl Studio</option>
                <option name="photoshop" value="">Photoshop</option>
                <option name="adobepremier" value="">Adobe Premier</option>
            </select><br>
            <input class="butt" type="submit" name="send" value="Envoyer">
            <?php if(!empty($message)){?>
            <div class="succer">
                <strong><?php echo $message; ?></strong>
            </div>
            <?php}?>
        </form>
    </div>
    </main>
    </div>
</body>
</html>

