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
  <link rel="stylesheet" href="./project15.css" />
  <title>Increment Counter</title>
</head>

<body>
  <?php include '../Base/header.php'; ?>

  <div class="container m-5 ">

    <div class="row">
      <div class="col-lg-12"><img class="d-block mx-auto mb-4" src="./media/increment counter.jpg" alt="" width="500" height="500" />

        <h1> Project 15 - Increment Counter</h1>

        <p>The complexity here comes from setting an increment timer using Math ceiling etc. <br>
          This could be useful for tracking visitors to a website.</p>


        <div class="container-for-icons">
          <!-- One counter countainer for each thing you want to increment -->
          <div class="counter-container">
            <i class="fab fa-twitter fa-3x"></i>
            <div class="counter" data-target="1200"></div>
            <span>Twitter Followers</span>
          </div>

          <div class="counter-container">
            <i class="fab fa-facebook fa-3x"></i>
            <div class="counter" data-target="5000"></div>
            <span>Facebook Fans </span>
          </div>

          <div class="counter-container">
            <i class="fab fa-youtube fa-3x"></i>
            <div class="counter" data-target="2400"></div>
            <span>Youtube Subscribers </span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="./project15.js"></script>
</body>

</html>