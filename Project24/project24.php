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
     <link rel="stylesheet" href="./project24.css">


     <title>Project 24 - Content Placeholder</title>
 </head>

 <body>
     <?php include '../Base/header.php'; ?>

     <div class="card">
         <div class="card-header animated-bg" id="header">
             <img src="https://images.unsplash.com/photo-1659480142923-0cd01191e0e9?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
         </div>
         <div class="card-content">
             <h3 class="card-title animated-bg animated-bg-text" id="title">
                 Lorem ipsum dolor sit amet consectetur.
             </h3>
             <p class="card-excerpt" id="excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, dolorum?
                 <span class="animated-bg animated-bg-text">&nbsp; </span>
                 <span class="animated-bg animated-bg-text">&nbsp; </span>
                 <span class="animated-bg animated-bg-text">&nbsp; </span>
             </p>
             <div class="author">
                 <div class="prifle-img animated-bg" id="profile_img">
                     <img src="./media/web-developer-portrait.jpg" alt="">
                 </div>
                 <div class="author-info">
                     <strong class="animated-bg animated-bg-text" id="name"></strong>
                     <small class="animated-bg animated-bg-text" id="date">April 2nd, 2025</small>

                 </div>
             </div>
         </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
         crossorigin="anonymous"></script>
     <script src="./project24.js"></script>

 </body>


 </html>