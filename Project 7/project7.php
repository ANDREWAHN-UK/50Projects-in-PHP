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
    <link rel="stylesheet" href="./project7.css">

    <title>Split Landing Page</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

    <div class="container-fluid containerJS">

        <div class="split left">
            <h1>This is the left side</h1>
            <p class="lead mb-4">This is Project 7 from <a
                    href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                    course</a>.This is a split landing page.
                <br>Challenges faced here were that the js could not hook onto container-fluid, so I had to invent a class. Also, using just container shrunk the visible area. Last challenge, unresolved, was getting the overlay to work
            </p>

            <div class="btn">Click me</div>
        </div>

        <div class="split right">
            <h1>This is the right side</h1>
            <p class="lead mb-4">The possibilities are interesting. For example, I used a similar layout when I made my
                <a href="https://andrewahn-uk.github.io/MS-one-more-turn/">prototype game review website.</a> <br>
                Challenges faced here were that the js could not hook onto container-fluid, so I had to invent a class. Also, using just container shrunk the visible area. Last challenge, unresolved, was getting the overlay to work
            </p>


            <div class="btn">Click me</div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    

</body>
<script src="./project7.js"></script>

</html>