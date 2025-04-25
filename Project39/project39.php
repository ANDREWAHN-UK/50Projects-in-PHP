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
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.11/tailwind.min.css"
        integrity="sha512-KO1h5ynYuqsFuEicc7DmOQc+S9m2xiCKYlC3zcZCSEw0RGDsxcMnppRaMZnb0DdzTDPaW22ID/gAGCZ9i+RT/w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../Base/baseStyle.css">
    <link rel="stylesheet" href="./project39.css">
    <title>Password Strength background</title>
</head>

<body>
    <?php include '../Base/header.php'; ?>
    <div class="background" id="background"></div>

    <div class="bg-white rounded p-10 text-center shadow-md">

        <h1 class="text-3xl">Image Password Strength</h1>
        <p class="text-sm text-grey-700">Change the password to see the effect on the background image</p>

        <div class="my-4 text-left">
            <label for="email" class="text-grey-900">Email:</label>
            <input type="text" class="border block w-full p-2 mt-2 rounded" id="email" placeholder="Enter email">
        </div>

        <div class="my-4 text-left">
            <label for="password" class="text-grey-900">Password:</label>
            <input type="password" class="border block w-full p-2 mt-2 rounded" id="password" placeholder="Enter password">
        </div>

        <button class="bg-black text-white py-2 mt-4 inline-block w-full rounded" type="submit">Submit</button>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project39.js"></script>

</body>


</html>