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
    <link rel="stylesheet" href="./project8.css">

    <title>Form Input Wave</title>
</head>

<body>
<?php include '../Base/header.php'; ?>
    <div
        class="container">
        <div class="row gy-5">
            <div class="col-lg-6 mx-auto  ">
                <img class="d-block mx-auto mb-4 mt-10" src="../Base/baseMedia/ladyOnRocket.gif" alt="" width="500" height="500">

                <h1 class="display-5 fw-bold text-body-emphasis">Scroll Animation!</h1>
                <p class="lead mb-4">This is Project 8 from <a
                        href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                        course</a>.
                    <br>This is a fancy form, with a form wave animation on the labels.
                    <br>The challenge here was some fairly abstract javascript, involving arrays and strings.
                </p>
            </div>
        </div>
    </div>

    <div class="container container2">

        <h1>Please Log In</h1>
        <form action="">
            <div class="form-control">
                <input type="text" required>
                <label>Email</label>
            </div>
            <div class="form-control">
                <input type="password" required>
                <label>Password</label>
            </div>

            <button class="btn">Log in</button>

            <p>Don't have an account? <a href="#">Register</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../baseScript.js"></script>

</body>
<script src="./project8.js"></script>

</html>