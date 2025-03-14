<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Base/baseStyle.css">
  <link rel="stylesheet" href="project16.css" />
  <title>Drink Water</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

  <div class="container m-5 ">

    <div class="row gy-5">
      <div class="col-lg-6 mx-auto">

        <p class="intro-space"></p>


        <h1> Project 16 - Drink Water</h1>

        <p>Javascript DOM manipulation and calculations. <br>This could be used to track anything, e.g. food macros</p>

        <h3>Goal: 2 litres</h3>

        <div class="cup-container">

          <div class="cup">
            <div class="remained" id="remained">
              <span id="litres"></span>
             

              <div class="percentage" id="percentage">

              </div>
            </div>
          </div>

          <p class="text">Select how many glasses of water you have drunk</p>

          <div class="cups">
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>
            <div class="cup cup-small">250 ml</div>

          </div>
        </div>


      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="project16.js"></script>
</body>

</html>