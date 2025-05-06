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

    <!-- <link rel="stylesheet" href="../Base/baseStyle.css"> -->
    <link rel="stylesheet" href="./project50.css">


    <title>Get that insect</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <div class="screen">
        <h1>Catch me if you can</h1>
        <button class="button" id="startButton">Play Game</button>
    </div>

    <div class="screen">
        
        <h1>Choose your insect</h1>

        <ul class="insectsList">
            <li>
                <button class="chooseInsectButton">
                    <p>Fly</p>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/202101_Fruitfly.png" alt="House fly">
                </button>
            </li>
            <li>
                <button class="chooseInsectButton">
                    <p>Cockroach</p>
                    <img src="https://pngimg.com/d/roach_PNG12163.png" alt="Cockroach">
                </button>
            </li>
            <li>
                <button class="chooseInsectButton">
                    <p>Ant</p>
                    <img src="https://pngimg.com/d/ant_PNG19345.png" alt="Ant">
                </button>
            </li>
            <li>
                <button class="chooseInsectButton">
                    <p>Spider</p>
                    <img src="https://pics.clipartpng.com/Spider_PNG_Clip_Art-1596.png" alt="Spider">
                </button>
            </li>
        </ul>

    </div>

    <div class="screen game-container">
        <h3 id="time"class="time">Time: 00:00</h3>
        <h3 id="score" class="score">Score: 0</h3>
        <h5 id="message" class="message ">Are you having fun? <br>This is an unwinnable game.</h5>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project50.js"></script>

</body>


</html>