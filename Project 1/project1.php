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
    <link rel="stylesheet" href="./project1.css">

    <title>Expanding Cards</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

    <div class="row"><!-- There are 2 identical rows here but only 1 shows. Removing one messes up the formatting. Do NOT remove the duplicate row! -->
        <div class="px-4 py-5 my-5 mt-auto text-center">
            <img class="d-block mx-auto mb-4" src="./Media/bikiniTwo.jpg" alt="" width="500" height="500">
            <h1 class="display-5 fw-bold text-body-emphasis">Expanding Cards!</h1>

            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">This is Project 1 from <a
                        href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                        course</a>.These
                    could be used for testimonials etc.
                </p>
                <p>Click on a card to make it larger</p>
                <p>The javascript here is used to add and remove a class when the cards are clicked. The class is set in
                    the css</p>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="px-4 py-5 my-5 mt-auto text-center">
            <img class="d-block mx-auto mb-4" src="./Media/gs7.jpg" alt="" width="500" height="500">
            <h1 class="display-5 fw-bold text-body-emphasis">Expanding Cards!</h1>


            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">This is Project 1 from <a
                        href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                        course</a>.These
                    could be used for testimonials etc.
                </p>
                <p>Click on a card to make it larger</p>
                <p>The javascript here is used to add and remove a class when the cards are clicked. The class is set in
                    the css</p>

            </div>

        </div>
    </div>



    <div class="container">



        <div class="panel active" style="background-image: url(./Media/gs1.jpg);">
            <h3>German Shepherd One</h3>
        </div>

        <div class="panel " style="background-image: url(./Media/gs2.jpg);">
            <h3>German Shepherd Two</h3>
        </div>

        <div class="panel " style="background-image: url(./Media/gs3.jpg);">
            <h3>German Shepherd Three</h3>
        </div>

        <div class="panel " style="background-image: url(./Media/gs4.jpg);">
            <h3>German Shepherd Four</h3>
        </div>

        <div class="panel " style="background-image: url(./Media/gs5.jpg);">
            <h3>German Shepherd Five</h3>
        </div>

        <div class="panel " style="background-image: url(./Media/gs6.jpg);">
            <h3>German Shepherd Six</h3>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
   
    <script src="./project1.js"></script>
</body>

</html>