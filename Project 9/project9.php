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
    <link rel="stylesheet" href="./project9.css">

    <title>Sound Wave</title>
</head>

<body>
<?php include '../Base/header.php'; ?>
    <div class="container mt-5 mb-5 container-1">
        <div class="row gy-5">
            <div class="col-lg-6 mx-auto  ">
                <img class="d-block mx-auto mb-4" src="../Project 9/media/drumGif.gif" alt="" width="500" height="500">

                <h1>Sound Board</h1>
                <p>Click the buttons below to play a sound</p>
                <br>
                <p>When you do so, any sound currently playing is stopped, and the new one plays</p>
                <br>
                <p>The buttons are created by javascript and styled in the css</p>

                <audio id="applause" src="../Project 9/media/applause.mp3"></audio>
                <audio id="boo" src="../Project 9/media/boo.mp3"></audio>
                <audio id="failure" src="../Project 9/media/failure.mp3"></audio>
                <audio id="tada" src="../Project 9/media/tada.mp3"></audio>
                <audio id="victory" src="../Project 9/media/victory.mp3"></audio>
                <audio id="gasp" src="../Project 9/media/womanSoftGasp.mp3"></audio>

                <div id="buttons"></div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project9.js"></script>

</body>


</html>