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
  <link rel="stylesheet" href="./project11.css" />

  <title>Project 11 -</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

  <div class="container mt-5 mb-5 container-1">
    <div class="row gy-5">
      <div class="col-lg-6 mx-auto">
        <img class="d-block mx-auto mb-4" src="../Base/baseMedia/ladyOnRocket.gif" alt="" width="500" height="500" />

        <h1>Key codes</h1>

        <p>
          This project uses the DOM model to get the relevant information,
          which is then parsed out into the boxes below
        </p>
        <div id="insert">
          <div class="key">
            <p>
              Press any key on the keyboard to get <i style="color:gold;">event key code</i> and <i style="color:gold;">event code</i>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="../baseScript.js"></script>
</body>
<script src="./project11.js"></script>

</html>