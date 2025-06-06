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
    <link rel="stylesheet" href="./project43.css">

    <title>Feedback UI Design</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <div id="panel" class="panel-container">
        <strong>How satisfied are you with our performance?</strong>

        <div class="ratings-container">

            <div class="rating"><img src="https://cdn-icons-png.flaticon.com/128/166/166527.png" alt="unhappy face"><small>Unhappy</small></div>
            <div class="rating"><img src="https://cdn-icons-png.flaticon.com/128/1791/1791385.png" alt="neutral face"><small>Neutral</small></div>
            <div class="rating"><img src="https://cdn-icons-png.flaticon.com/128/10477/10477524.png" alt="happy face"><small>Happy</small></div>

        </div>
        <button class="button" id="send">Send Review</button>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project43.js"></script>

</body>

</html>