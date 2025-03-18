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
  <link rel="stylesheet" href="./project13.css" />
  <title>Random Choice Picker</title>
</head>

<body>
<?php include '../Base/header.php'; ?>

  <div class="container mt-5 mb-5">
    <p class="intro-space">
      <!-- This intro space is needed to push the below image down properly -->
    </p>

    <div class="col-lg-12"><img class="d-block mx-auto mb-4" src="./media/random.jpg" alt="" width="500" height="500" />
      <h1>Project 13 - Random Choice Picker</h1>

      <p>Potential applications for this could be to have the tags represent extant objects, such as restaurants, and
        invite the user to create a selection of restaurants, which are then randomly chosen. So a lucky dip basically.
      </p>
      <p>This project does some fancy stuff with creating and managing an array based on user input, then selects a
        random
        tag, using js, and also has ome other functions created in js, to highlight and unhighlight etc</p>
      <p>This was a step up in complexity.</p>

      <h3>Enter all of the choices, divided by a comma (" , " )
        <br>Press enter when you are done!
      </h3>
      <textarea placeholder="Enter choices here" id="textarea"></textarea>

      <div id="tags">

      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>  
  <script src="./project13.js"></script>
</body>

</html>