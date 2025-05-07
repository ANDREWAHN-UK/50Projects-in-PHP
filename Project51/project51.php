<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="stylesheet" href="./project51.css">


    <title>Bonus Project: Timer</title>
</head>

<body class="bg-gray-700 flex justify-center items-center min-h-screen">
    <div class="bg-gray-900 p-16 rounded-2xl shadow w-full max-w-sm">
        <h1 class="text-white text-center text-4xl">Timer</h1>

        <!-- now make a circle -->
        <div id="conic" class="bg-conic flex justify-center items-center w-60 h-60 mx-auto my-10 rounded-full relative">
            <p id="timer" class="text-blue-200 relative text-5xl z-10">00:00</p>
            <!-- and this is the inner circle -->
            <div class="w-[calc(100% - 4px)] bg-gray-800 aspect-square rounded-full absolute inset-[2px]">

            </div>

            <!-- Create the dot that counts down -->

            <div class="hand h-1/2 absolute top-0">
                <span class="hand w-2 h-2 bg-white rounded-full absolute -top-1 -left-1"></span>
            </div>

        </div><!-- buttons -->
        <div class="flex justify-center gap-6">
            <button id="reset" class="flex justify-center items-center w-10 h-10 bg-blue-300 rounded-full text-black"><i class="fas fa-refresh"></i></button>
            <button id="play" class="flex justify-center items-center w-10 h-10 bg-blue-300 rounded-full text-black"><i class="fas fa-play"></i></button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./project51.js"></script>

</body>


</html>