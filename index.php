<?php 
    $url = "https://api.hgbrasil.com/weather?key=4805e8ed";
    $response = json_decode(file_get_contents($url));

    function condition($response){
        if ($response->results->condition_code == 29 || 26) { 
            //Parcialmente nublado
            echo '<img src="images/HeavyCloud.png">';
        }
        if ($response->results->condition_code == 27) {
            //Tempo Limpo
            echo '<img src="images/LightCloud.png">';
        }   
        if ($response->results->condition_code == 32) {
            //Ensolarado
            echo '<img src="images/Clear.png">';
        }
        if ($response->results->condition_code == 45) {
            //Chuva
            echo '<img src="images/HeavyRain.png">';
        }
        if ($response->results->condition_code == 4) {
            //Tempestades
            echo '<img src="images/Thunderstorm.png">';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>WeatherAPP</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-content">
                <?= condition($response); ?>
                
                <h1><?= $response->results->temp ?>°C</h1>
                <h1><?= $response->results->description ?></h1>

                <p><?= $response->results->city ?></p>
                <p><?= $response->results->date ?></p>  
            </div>
            
        </div>

        <div class="wrapper-main">
        <div class="main">
            <div class="info">
                <h1>
                    Velocidade<br>do vento:<br>
                    <?= $response->results->wind_speedy ?>
                </h1>

                <h1>
                    Umidade<br>do ar:<br>
                    <?= $response->results->humidity ?>%
                </h1>

                <h1>
                    Sensação<br>Térmica:<br>
                    <?= $response->results->temp ?>°C
                </h1>
            </div>
            <div class="nextdays">
                <div class="day1 day">
                    <?php 
                        if($response->results->forecast[0]->description == 'Night Mostly cloudy'){
                            echo '<img class="img" src="images/Clear.png">';
                        }
                        if($response->results->forecast[0]->description == 'Night partly cloudy'){
                            echo '<img class="img" src="images/HeavyCloud.png">';
                        }
                        if($response->results->forecast[0]->description == 'Scattered showers'){
                            echo '<img class="img" src="images/LightRain.png">';
                        }
                    ?>
                    <h1><?= $response->results->forecast[0]->date ?></h1>
                    <h1><?= $response->results->forecast[0]->description ?></h1>
                    <div class="max-and-min">
                        <h1>Máxima <br> <?= $response->results->forecast[0]->max ?>°C</h1>
                        <h1>Mínima <br> <?= $response->results->forecast[0]->min ?>°C</h1>
                    </div>
                </div>

                <div class="day2 day">
                    <?php 
                        if($response->results->forecast[1]->description == 'Night Mostly cloudy'){
                            echo '<img class="img" src="images/Clear.png">';
                        }
                        if($response->results->forecast[1]->description == 'Night partly cloudy'){
                            echo '<img class="img" src="images/HeavyCloud.png">';
                        }
                        if($response->results->forecast[1]->description == 'Scattered showers'){
                            echo '<img class="img" src="images/LightRain.png">';
                        }
                    ?>
                    <h1><?= $response->results->forecast[1]->date ?></h1>
                    <h1><?= $response->results->forecast[1]->description ?></h1>
                    <div class="max-and-min">
                        <h1>Máxima <br> <?= $response->results->forecast[1]->max ?>°C</h1>
                        <h1>Mínima <br> <?= $response->results->forecast[1]->min ?>°C</h1>
                    </div>
                </div>

                <div class="day3 day">
                    <?php 
                        if($response->results->forecast[2]->description == 'Night Mostly cloudy'){
                            echo '<img class="img" src="images/Clear.png">';
                        }
                        if($response->results->forecast[2]->description == 'Night partly cloudy'){
                            echo '<img class="img" src="images/HeavyCloud.png">';
                        }
                        if($response->results->forecast[2]->description == 'Scattered showers'){
                            echo '<img class="img" src="images/LightRain.png">';
                        }
                    ?>
                    <h1><?= $response->results->forecast[2]->date ?></h1>
                    <h1><?= $response->results->forecast[2]->description ?></h1>
                    <div class="max-and-min">
                        <h1>Máxima <br> <?= $response->results->forecast[2]->max ?>°C</h1>
                        <h1>Mínima <br> <?= $response->results->forecast[2]->min ?>°C</h1>
                    </div>
                </div>

                <div class="day4 day">
                    <?php 
                        if($response->results->forecast[3]->description == 'Night Mostly cloudy'){
                            echo '<img class="img" src="images/Clear.png">';
                        }
                        if($response->results->forecast[3]->description == 'Night partly cloudy'){
                            echo '<img class="img" src="images/HeavyCloud.png">';
                        }
                        if($response->results->forecast[3]->description == 'Scattered showers'){
                            echo '<img class="img" src="images/LightRain.png">';
                        }
                    ?>
                    <h1><?= $response->results->forecast[3]->date ?></h1>
                    <h1><?= $response->results->forecast[3]->description ?></h1>
                    <div class="max-and-min">
                        <h1>Máxima <br> <?= $response->results->forecast[3]->max ?>°C</h1>
                        <h1>Mínima <br> <?= $response->results->forecast[3]->min ?>°C</h1>
                    </div>
                </div>

                <div class="day5 day">
                    <?php 
                        if($response->results->forecast[4]->description == 'Night Mostly cloudy'){
                            echo '<img class="img" src="images/Clear.png">';
                        }
                        if($response->results->forecast[4]->description == 'Night partly cloudy'){
                            echo '<img class="img" src="images/HeavyCloud.png">';
                        }
                        if($response->results->forecast[4]->description == 'Scattered showers'){
                            echo '<img class="img" src="images/LightRain.png">';
                        }
                    ?>
                    <h1><?= $response->results->forecast[4]->date ?></h1>
                    <h1><?= $response->results->forecast[4]->description ?></h1>
                    <div class="max-and-min">
                        <h1>Máxima <br> <?= $response->results->forecast[4]->max ?>°C</h1>
                        <h1>Mínima <br> <?= $response->results->forecast[4]->min ?>°C</h1>
                    </div>
                </div>
            </div>
        </div>

        </div>
        
    </div>
</body>
</html>