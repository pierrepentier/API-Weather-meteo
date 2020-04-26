<!DOCTYPE html>
<html>
    <head>
        <title>meteo</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../javascript/jquery-ui.min.css">
        <link rel="stylesheet" href="../javascript/jquery-ui.structure.min.css">
        <link rel="stylesheet" href="../javascript/jquery-ui.theme.min.css">
    </head>

    <body>

   

    <div class="container-fluid bg-info vh-100 mb-5">
        <div class="container justify-content-center text-center">
            <h1 class="">What's the weather in your city?</h1>

            <form class="mt-5">
            <div class="form-group row">
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="ville" placeholder="Enter you city">
                </div>
                <div class="col-lg-2">
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>    
            </form>
                <div class="row mt-5">
                <p id="displayCityName"></p>
                </div>
                <div class="row mt-3">
                <span id="displayTemp"></span><div class="span ml-1" id="degres" style="display:none">degrés</div>
                </div>
                <div class="row mt-3">
                <span id="displayWeather"></span>
                <img id="skyImage" src="" style="display:none; height:30px; width:30px">
                </div>


        </div>

    </div>
    
    </body>
    <script src="../javascript/jquery-3.4.1.min.js"></script>
    <script src="../javascript/external/jquery/jquery.js"></script>
    <script src="../javascript/jquery-ui.min.js"></script>
    <script src="../javascript/scriptMeteo.js"></script>
</html>