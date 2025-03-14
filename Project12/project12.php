<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/Base/baseStyle.css" />
    <link rel="stylesheet" href="./project12.css" />
    <title>FAQ -Collapsing boxes</title>
  </head>

  <body>
  <?php include '../Base/header.php'; ?>
    <div class="container mt-5 mb-5 container-1">
      <p class="intro-space">
        <!-- This intro space is needed to push the below image down properly -->
    </p>
      <div class="row gy-5">
        <div class="col-lg-6 mx-auto">
          <img
            class="d-block mx-auto mb-4"
            src="./media/faqStockImage.jfif"
            alt=""
            width="500"
            height="500"
          />

          <h1>Project 12 - FAQ</h1>
          <p>
            Javascript enables toggle button to unfurl a box with the answer to
            a question. This project also introduces using css to bring in icons, instead of html.
          </p>
          <p>This would make for a useful FAQ section on any website, and with further css styling, could be quite distinctive</p>

          <div class="faq-container">

            <div class="faq active">
              <h3 class="faq-title">Why shouldn't we trust atoms?</h3>
              <p class="faq-text">They make up everything</p>
              <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
              </button>
            </div>

            <div class="faq">
              <h3 class="faq-title">What do you call somebody with no body and no nose?</h3>
              <p class="faq-text">Nobody knows</p>
              <button class="faq-toggle">
                <i class="fas fa-chevron-down"></i>
                <i class="fas fa-times"></i>
              </button>
            </div>

            <div class="faq">
                <h3 class="faq-title">What is the object orientated way to become wealthy?</h3>
                <p class="faq-text">Inheritance</p>
                <button class="faq-toggle">
                  <i class="fas fa-chevron-down"></i>
                  <i class="fas fa-times"></i>
                </button>
              </div>

              <div class="faq">
                <h3 class="faq-title">How many tickles does it take to tickle an octopus?</h3>
                <p class="faq-text">Ten tickles</p>
                <button class="faq-toggle">
                  <i class="fas fa-chevron-down"></i>
                  <i class="fas fa-times"></i>
                </button>
              </div>

              <div class="faq active">
                <h3 class="faq-title">What did the fish say when he swam into a wall??</h3>
                <p class="faq-text">Dam</p>
                <button class="faq-toggle">
                  <i class="fas fa-chevron-down"></i>
                  <i class="fas fa-times"></i>
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="baseScript.js"></script>
    <script src="./project12.js"></script>
  </body>
</html>
