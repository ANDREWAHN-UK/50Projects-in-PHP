<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Removed Bootstrap because something in it was clashing with the html.dark class, specifically the bootstrap background was overriding the .dark background set in the css -->

    <link rel="stylesheet" href="/Base/baseStyle.css">
    <link rel="stylesheet" href="project19.css">

    <title>Theme Clock</title>
</head>

<body>
   <!-- Removed the default nav bar because of Bootstrap issues, see comment in head -->
        
    <div id="myNavbar">
        <div class="container">
            <ul>
                <li style="float:left"><a href="../Base/baseindex.php"><img class="navlogo" src="../Base/baseMedia/no-brain-loading.gif" alt=""></a></li>
                <li class="right-nav"><a href="../Base/baseIndex1-10.php"><span class="medium">Projects 1 - 10</span></a></li>
                <li class="right-nav"><a href="../Base/baseIndex11-20.php"><span class="medium">Projects 11 - 20</span></a></li>
                <li class="right-nav"><a href="../Base/baseIndex21-30.php"><span class="medium">Projects 21 - 30</span></a></li>
                <li class="right-nav"><a href="../Base/baseIndex31-40.php"><span class="medium">Projects 31 - 40</span></a></li>
                <li class="right-nav"><a href="../Base/baseIndex41-50.php"><span class="medium">Projects 41 - 50</span></a></li>
            </ul>
        </div>
    </div>

    <button class="toggle">Dark Mode</button>

    <div class="clock-container">

        <div class="clock">
            <div class="needle hour"></div>
            <div class="needle minute"></div>
            <div class="needle second"></div>
            <div class="centre-point"></div>
        </div>

        <div class="time">12:00</div>
        <div class="date">Tuesday March
            <span class="circle">11</span>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
  
    <script src="./project19.js"></script>
</body>

</html>