<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="../Base/baseStyle.css">
    <link rel="stylesheet" href="./project37.css">
   

    <title>Pokodex</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

 <h1>Pokodex</h1>

 <div class="poke-container" id="poke-container">
    <div class="pokemon" style="background-color: rgb(222,253,224);">
        <div class="image-container">
            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" alt="">
        </div>
        <div class="info">
            <span class="number">001</span>
            <h3 class="name"></h3>
            <small class="type">Type: <span>grass</span></small>
        </div>
    </div>

    <div class="pokemon" style="background-color: rgb(222,253,224);">
        <div class="image-container">
            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" alt="">
        </div>
        <div class="info">
            <span class="number">002</span>
            <h3 class="name"></h3>
            <small class="type">Type: <span>grass</span></small>
        </div>
    </div>

    <div class="pokemon" style="background-color: rgb(222,253,224);">
        <div class="image-container">
            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" alt="">
        </div>
        <div class="info">
            <span class="number"></span>
            <h3 class="name"></h3>
            <small class="type">Type: <span>grass</span></small>
        </div>
    </div>
 </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
 <script src="./project37.js"></script>

</body>


</html>