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
  <!-- <link rel="stylesheet" href="baseStyle.css" /> -->
  <link rel="stylesheet" href="./project14.css" />
  <title>Animated Nav Bar</title>
</head>

<body>


  <div class="container mt-5 mb-5">

    <p class="intro">As Project 14 is a navbar, <br> observe the normal navbar has been retired.</p>
    <!-- Note that as the project expands, this will need updating. From header.php, copy select the entire ul tag, remove the classes, paste over the ul tags on this page -->
    <nav class="active" id="nav">

      <ul>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/50Projects/Base/baseIndex.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects 1 - 10
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/50Projects/Base/baseIndex1-10.php"> Overview of Projects 1 - 10</a></li>
            <li><a class="dropdown-item" href="../Project 1/project1.php">Project 1 - Expanding Cards</a></li>
            <li><a class="dropdown-item" href="../Project 2/project2.php">Project 2 - Progress Steps</a></li>
            <li><a class="dropdown-item" href="../Project 3/project3.php">Project 3 - Rotating Navigation</a></li>
            <li><a class="dropdown-item" href="../Project 4/project4.php">Project 4 - Hidden Search Widget</a></li>
            <li><a class="dropdown-item" href="../Project 5/project5.php">Project 5 - Blurry Loading</a></li>
            <li><a class="dropdown-item" href="../Project 6/project6.php">Project 6 - Scroll Animation </a></li>
            <li><a class="dropdown-item" href="../Project 7/project7.php">Project 7 - Split Landing Page</a></li>
            <li><a class="dropdown-item" href="../Project 8/project8.php">Project 8 - Form Wave</a></li>
            <li><a class="dropdown-item" href="../Project 9/project9.php">Project 9 - Sound Board</a></li>
            <li><a class="dropdown-item" href="../Project10/project10.php">Project 10 - Dad Jokes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects 11 - 20
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/50Projects/Base/baseIndex11-20.php"> Overview of Projects 11 - 20</a></li>
            <li><a class="dropdown-item" href="../Project11/project11.php">Project 11 - Key Codes</a></li>
            <li><a class="dropdown-item" href="../Project12/project12.php">Project 12 - FAQ with toggles</a></li>
            <li><a class="dropdown-item" href="../Project13/project13.php">Project 13 - Random Choice Picker</a></li>
            <li><a class="dropdown-item" href="../Project14/project14.php">Project 14 - Animated Nav Bar</a></li>
            <li><a class="dropdown-item" href="../Project15/project15.php">Project 15 - Increment Counter</a></li>
            <li><a class="dropdown-item" href="../Project16/project16.php">Project 16 - Drink Water</a></li>
            <li><a class="dropdown-item" href="../Project17/project17.php">Project 17 - Movie App</a></li>
            <li><a class="dropdown-item" href="../Project18/project18.php">Project 18 - Background Slider</a></li>
            <li><a class="dropdown-item" href="../Project19/project19.php">Project 19 - Theme Clock</a></li>
            <li><a class="dropdown-item" href="../Project20/project20.php">Project 20 - Ripple Button</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects 21 - 30
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/50Projects/Base/baseIndex21-30.php"> Overview of Projects 21 - 30</a></li>
            <li><a class="dropdown-item" href="./Project 1/project1.php">Project 21 </a></li>
            <li><a class="dropdown-item" href="#">Project 22</a></li>
            <li><a class="dropdown-item" href="#">Project 23</a></li>
            <li><a class="dropdown-item" href="#">Project 24</a></li>
            <li><a class="dropdown-item" href="#">Project 25</a></li>
            <li><a class="dropdown-item" href="#">Project 26</a></li>
            <li><a class="dropdown-item" href="#">Project 27</a></li>
            <li><a class="dropdown-item" href="#">Project 28</a></li>
            <li><a class="dropdown-item" href="#">Project 29</a></li>
            <li><a class="dropdown-item" href="#">Project 30</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects 31 - 40
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/50Projects/Base/baseIndex31-40.php"> Overview of Projects 31 - 40</a></li>
            <li><a class="dropdown-item" href="./Project 1/project1.php">Project 31 </a></li>
            <li><a class="dropdown-item" href="#">Project 32</a></li>
            <li><a class="dropdown-item" href="#">Project 33</a></li>
            <li><a class="dropdown-item" href="#">Project 34</a></li>
            <li><a class="dropdown-item" href="#">Project 35</a></li>
            <li><a class="dropdown-item" href="#">Project 36</a></li>
            <li><a class="dropdown-item" href="#">Project 37</a></li>
            <li><a class="dropdown-item" href="#">Project 38</a></li>
            <li><a class="dropdown-item" href="#">Project 39</a></li>
            <li><a class="dropdown-item" href="#">Project 40</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Projects 41 - 50
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/50Projects/Base/baseIndex41-50.php"> Overview of Projects 41 - 50</a></li>
            <li><a class="dropdown-item" href="./Project 1/project1.php">Project 41 -</a></li>
            <li><a class="dropdown-item" href="#">Project 42</a></li>
            <li><a class="dropdown-item" href="#">Project 43</a></li>
            <li><a class="dropdown-item" href="#">Project 44</a></li>
            <li><a class="dropdown-item" href="#">Project 45</a></li>
            <li><a class="dropdown-item" href="#">Project 46</a></li>
            <li><a class="dropdown-item" href="#">Project 47</a></li>
            <li><a class="dropdown-item" href="#">Project 48</a></li>
            <li><a class="dropdown-item" href="#">Project 49</a></li>
            <li><a class="dropdown-item" href="#">Project 50</a></li>
          </ul>
        </li>
      </ul>

      <button class="icon" id="toggle">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
      </button>



    </nav>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="baseScript.js"></script>
  <script src="./project14.js"></script>
</body>

</html>