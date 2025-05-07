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
    <link rel="stylesheet" href="baseStyle.css">
    <title>50 Projects in 50 Days!</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="px-4 py-5 my-5 text-center container-fluid">
        <p class="intro-space">
            <!-- This intro space is needed to push the below image down properly -->
        </p>
        <img class="d-block mx-auto mb-4" src="../Base/baseMedia/ladyOnRocket.gif" alt="" width="500" height="500">
        <h1 class="display-5 fw-bold text-body-emphasis">50 Projects in 50 Days!</h1>

        <div class="container-fluid col-lg-12 ">
            <p class="lead mb-4 text-center intro-text">This is a learning course from <a
                    href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">Udemy</a>,
                wrapped in a functional website using Bootstrap,
                to allow people to navigate to the individual projects.
                Challenges faced were in creating a website to wrap/contain all the projects, because
                the course format is for 50 individual projects, 50 github entries.
                Additionally, this project does not use any sort of content management system, so
                there is duplicate code on each page, e.g. header and footer.

                This is precisely the sort of thing that would be taken card of with something like
                Wordpress or Django, i.e. the use of templates.

                I deliberately chose this approach to allow for easier deployment, and to practice the
                use of html and css, to get as "hands on" as possible.</p>

        </div>

    </div>

    </div>

    <div class="container px-4 py-1 my-1 text-center">
        <!-- Use the rows below to display cards the link to the pages with the links to the projects -->

        <!-- This is the 1st row -->
        <div class="row form-group gx-2 gy-2 mt-5 ">
            <h5>Click below to go to the relevant sections</h5>
            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project 1/Media/gs7.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 1 - 10</h5>
                    <p class="card-text">the first ten projects </p>
                    <a href="../Base/baseIndex1-10.php" class="btn btn-primary">Let's go</a>
                </div>
            </div>

            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project 2/Media/thumbnail.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 11 - 20</h5>
                    <p class="card-text"> The next ten, things are starting to get challenging </p>
                    <a href="../Base/baseIndex11-20.php" class="btn btn-primary">Baby steps</a>
                </div>
            </div>

            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project 3/media/rotatingNavThumbnail.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 21 - 30</h5>
                    <p class="card-text"> What even is this?</p>
                    <a href="../Base/baseIndex21-30.php" class="btn btn-primary">Throw in the towel?</a>
                </div>
            </div>

            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project 4/media/projectFourThumbnail.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 31-40</h5>
                    <p class="card-text"> Are we there yet? Can we make it? </p>
                    <a href="../Base/baseIndex31-40.php" class="btn btn-primary">Nearly there</a>
                </div>
            </div>

            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project 5/media/RE4wwte (1).jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 41 - 51</h5>
                    <p class="card-text"> The last ten projects, and a bonus. Woohooo! </p>
                    <a href="../Base/baseIndex41-51.php" class="btn btn-primary"> The end is near</a>
                </div>
            </div>

            <div class="card mx-2" style="width: 15rem;" style="height: 10rem;">
                <img src="../Project51/images/51thumb.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Project 51</h5>
                    <p class="card-text">A simple timer. In future, allow users to set their own timer.</p>
                    <a href="../Project51/project51.php" class="btn btn-primary">Tick tock tick</a>
                </div>

            </div>

        </div>

    </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>