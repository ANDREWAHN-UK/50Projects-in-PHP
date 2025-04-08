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
    <link rel="stylesheet" href="./Project28.css">


    <title>GitHub Profiles</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <form class="user-form" id="form">
        <input type="text" id="search" placeholder="Search a GitHub user">
    </form>
    <main id="main">
        <div class="card">
            <div>
                <img src="https://randomuser.me/api/portraits/men/30.jpg" alt="" class="avatar">
            </div>

            <div class="user-info">
                <h2>John</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, eaque.</p>
                <ul>
                    <li>300 <strong>followers</strong></li>
                    <li>30 <strong>following</strong></li>
                    <li>3 <strong>repos</strong></li>
                </ul>

                <div id="repos">
                    <a href="#" class="repo">1</a>
                    <a href="#" class="repo">2</a>
                    <a href="#" class="repo">3</a>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.8.4/axios.min.js"
     integrity="sha512-2A1+/TAny5loNGk3RBbk11FwoKXYOMfAK6R7r4CpQH7Luz4pezqEGcfphoNzB7SM4dixUoJsKkBsB6kg+dNE2g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./Project28.js"></script>

</body>


</html>