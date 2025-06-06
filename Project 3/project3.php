<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="./project3.css" />
    <title>Rotating Navigation</title>
</head>

<body>
    <div class="container">
        <div class="circle-container">
            <div class="circle">
                <button id="close">
                    <i class="fas fa-times"></i>
                </button>
                <button id="open">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <div class="content">
            <h1>Amazing Article</h1>
            <small>Andrew Ahn</small>
            <p>
                No navbar needed as this project is itself a navigation bar. Click top left to open/close the navigation, and get back to the homepage.</p>

            <h3>My Dog</h3>
            <img src="./media/Grace.jpg" class="mainImage" alt="doggy" />
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit libero deleniti rerum quo, incidunt vel
                consequatur culpa ullam. Magnam facere earum unde harum. Ea culpa veritatis magnam at aliquid.
                Perferendis totam placeat molestias illo laudantium? Minus id minima doloribus dolorum fugit deserunt
                qui vero voluptas, ut quia cum amet temporibus veniam ad ea ab perspiciatis, enim accusamus asperiores
                explicabo provident. Voluptates sint, neque fuga cum illum, tempore autem maxime similique laborum odio,
                magnam esse. Aperiam?</p>
        </div>
    </div>

    <nav>
        <ul>
            <li><i class="fas fa-home"></i><a href="../Base/baseIndex.php"> Home</a></li>
            <li><i class="fas fa-user-alt"></i><a href="#"> About</a></li>
            <li><i class="fas fa-envelope"></i><a href="#"> Contact</a></li>
        </ul>
    </nav>
    <script src="project3.js"></script>
</body>

</html>