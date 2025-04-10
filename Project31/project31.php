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
    <link rel="stylesheet" href="./project31.css">


    <title>Password generator</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <div class="container1">

    <!-- Because of Bootstrap, if this container is just named "container", it will do some other stuff -->
        <h2>Password Generator</h2>

        <div class="result-container">
            <span id="result"></span>
            <button class="btn-clipboard" id="clipboard">
                <i class="far fa-clipboard"></i>
            </button>
        </div>

        <div class="settings">
            <div class="setting">
                <label>Password Length</label>
                <input type="number" id="length" min="1" max="20" value="20">
            </div>

            <div class="setting">
                <label>Include uppercase letters</label>
                <input type="checkbox" id="uppercase" checked>
            </div>

            <div class="setting">
                <label>Include lowercase letters</label>
                <input type="checkbox" id="lowercase" checked>
            </div>

            <div class="setting">
                <label>Include numbers</label>
                <input type="checkbox" id="numbers" checked>
            </div>

            <div class="setting">
                <label>Include symbols</label>
                <input type="checkbox" id="symbols" checked>
            </div>
        </div>

        <button class="btn-generate btn-large" id="generate">Generate Password</button>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project31.js"></script>

</body>


</html>