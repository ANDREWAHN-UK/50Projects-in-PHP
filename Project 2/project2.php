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
    <link rel="stylesheet" href="./project2.css">

    <title>Progress Steps</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="./Media/thumbnail.png" alt="" width="500" height="500">
        <h1 class="display-5 fw-bold text-body-emphasis">Progress Steps!</h1>

        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">This is Project 2 from <a
                    href="http://https://www.udemy.com/course/50-projects-50-days/learn/lecture/23595148#overview">this
                    course</a>.These Progress steps could be used to highlight movement through a website, or steps to
                complete a transaction.
           
            </p>
            <p>I had to adjust some of the js, specifically the circle length, to get things working properly</p>
        </div>

    </div>

    <div class="container">
        <div class="progress-container">
          <div class="progress" id="progress"></div>
          <div class="circle active">1</div>
          <div class="circle">2</div>
          <div class="circle">3</div>
          <div class="circle">4</div>
        </div>
  
        <button class="btn" id="prev" disabled>Prev</button>
        <button class="btn" id="next">Next</button>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../baseScript.js"></script>
    
</body>
<script src="./project2.js"></script>
</html>