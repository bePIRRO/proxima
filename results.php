<?php
    require_once __DIR__ . "/data/data.php";
    $result = "Il tuo comune non è presente nel database.";
    $city = $_POST["city"];
    $city = explode(",", $_POST["city"]);
    $city = $city[0];
    for ($i = 0; $i < count($location); $i++) {
        if ($city == $location[$i]["city"]) {
            $result = $location[$i]["zip_code"];
            break;
        }
    }
?> 
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.css' integrity='sha512-H+HWO9L7oLHex/9VCN9kyGaYp96jiJUwadh87k24XzAe+7eLmCdsdaEOfeZTaFmdZ0y4SDdq0eLh8+1OMJQ50g==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="./style/style.css">
    <title>Proxima</title>
</head>
<body>
    <section class="container mt-5">
        <h6><a href="index.php">TEST PAGE</a></h6>
        <div class="form-section">
            <h2>Inserisci il nome del tuo comune</h2>
            <form method="POST" action="results.php">
                <input type="text" class="city-input" name="city" id="city" placeholder="Comune...">
                <input type="submit" class="btn" value="CERCA"></input>
        </form>
            
        </div>
        <h5>Il codice del tuo comune è</h5>
        <div class="result"><h1 id="result"><?php echo $result?></h1></div>
    </section>

    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDodkn-vsUZHVehZSItR1Ri0qWFwhsnFAw&libraries=places&callback=initAutocomplete" type="text/javascript"></script>
    <script src="./script/maps.js"></script>
</body>
</html>