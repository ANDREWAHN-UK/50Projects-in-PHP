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
    <link rel="stylesheet" href="./project46.css">


    <title>Quiz App</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question Text</h2>
            <ul>
                <li><input type="radio" name="answer" id="a" class="answer">
                    <label for="a" id="a_text">Question</label>
                </li>
                <li><input type="radio" name="answer" id="b" class="answer">
                    <label for="b" id="b_text">Question</label>
                </li>
                <li><input type="radio" name="answer" id="c" class="answer">
                    <label for="c" id="c_text">Question</label>
                </li>
                <li><input type="radio" name="answer" id="d" class="answer">
                    <label for="c" id="d_text">Question</label>
                </li>

            </ul>
        </div>

        <button id="submit">Submit</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project46.js"></script>

</body>


</html>