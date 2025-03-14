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
  <link rel="stylesheet" href="./project17.css" />
  <title>Movie App</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

  <p class="intro-space"></p>

  <p class="intro-para"> This design could work on the main pages of this website, or for anything where a database is
    queried/searched. <br>For example a recipes website or an e-commerce store. <br> Challenges faced: <br>
    Apart from lots of SPI sorcery, there was an issue getting the poster for each movie. This could be resolved by writing an if function to put in a placeholder. <br>Also, add in pagination in order to access more movies</p>

  <header>
    <form action="" id="form">
      <input type="text" id="search" class="search" placeholder="search">
    </form>
  </header>

  <main id="main">

   

    
  </main>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="/Base/baseScript.js"></script>
  <script src="project17.js"></script>
</body>

</html>