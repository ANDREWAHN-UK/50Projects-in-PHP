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
    <link rel="stylesheet" href="./project35.css">


    <title>Image Carousel</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>

    <h1>Image Carousel</h1>
    <p>Use the buttons below to control the images, or let the carousel automatically scroll</p>

    <div class="carousel">
        <div class="image-container" id="images">
            <img class="carImage" src="https://images.unsplash.com/photo-1744616451172-5f540c944b9b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="first-image">
            <img class="carImage" src="https://images.unsplash.com/photo-1744638628542-12578d73179b?q=80&w=1936&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="second-image">
            <img class="carImage" src="https://plus.unsplash.com/premium_photo-1679492942912-a7dc8d5be711?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="third-image">
            <img class="carImage" src="https://images.unsplash.com/photo-1741664256890-a41addb4d7ec?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="fourth-image">
            <img class="carImage" src="https://images.unsplash.com/photo-1743078344181-6eeea5796e8d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-five">
            <img class="carImage" src="https://images.unsplash.com/photo-1741462166411-b94730c55171?q=80&w=1885&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-six">
            <img class="carImage" src="https://images.unsplash.com/photo-1741850820849-1b63a5911606?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-seven">
            <img class="carImage" src="https://images.unsplash.com/photo-1743021192899-5e78625bf0c7?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-eight">
            <img class="carImage" src="https://images.unsplash.com/photo-1743126642334-ab003ce665da?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-nine">
            <img class="carImage" src="https://images.unsplash.com/photo-1742728772904-725bd1221ba4?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image-ten">

        </div>
        <div class="buttons-container">
            <button class="c-button" id="left">Previous</button>
            <button class="c-button" id="right">Next</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project35.js"></script>

</body>


</html>