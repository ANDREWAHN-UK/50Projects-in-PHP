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
    <link rel="stylesheet" href="./project5.css">
    <title>Blurry Loading </title>
</head>

<body>

<?php include '../Base/header.php'; ?>
    <section class="bg">
    <div class="loading-text">0%</div>

    <div class="row px-4 py-5 my-5 text-center explanation">

        <h1 class="display-5 fw-bold text-body-emphasis">Blurry Loading</h1>

        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">This is Project 5 from <a
                    href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                    course</a>.This is a step up in complexity, requiring that css values get adjusted by the
                javascript, and that the opacity values get mapped to the 0 - 100% incrementer.
                As an extra wrinkle, this explanatory text also starts hidden, and fades in as the counter fades out.
            </p>
        </div>

    </div></section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project5.js"></script>
</body>

</html>