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
    <link rel="stylesheet" href="./project49.css">


    <title>To Do List</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <div class="container mt-5 mb-5 container-1">
        <div class="row gy-5">
            <div class="col-lg-6 mx-auto  ">

                <p class="intro-para">This project introduces the use of local storage.
                    <br> <br>
                    As per other projects, the js is used to add and remove html elements and classes.
                    Some issues were encountered when the js registered certain elements as null.
                    To solve this, those elements were delted, and then recreated. It is a mystery that this worked.
                <br> <br>
                Local storage did not work, instead pulled in all the list item elements in the whole website, i.e. the entire navigation bar</p>

                <h1>To Do:</h1>

                <form id="form">
                    <input type="text" id="input" class="input" placeholder="Enter a to-do " autocomplete="off">

                    <ul class="todos" id="todos"></ul>
                </form>


                <small>Left click to toggle completed.
                </small> <br>
                <small>Right click to delete item.</small>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project49.js" defer></script>

</body>


</html>