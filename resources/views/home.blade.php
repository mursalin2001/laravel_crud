<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Landing Page</title>
</head>
<body class="flex justify-center items-center min-h-screen bg-gray-100 p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center mb-6">Welcome to Our App</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 bg-white p-6 shadow-lg rounded-lg">

            <a href="/" class="flex flex-col items-center">
                <i class="fa-solid fa-plus text-brown-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Add</p>
            </a>

            <a href="/welcome" class="flex flex-col items-center">
                <i class="fa-solid fa-land-mine-on text-red-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Needs rescue</p>
            </a>

            <a href="/users" class="flex flex-col items-center">
                <i class="fa-solid fa-paw text-brown-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Available Animal</p>
            </a>

            <a href="/welcome" class="flex flex-col items-center">
                <i class="fa-solid fa-stethoscope text-red-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Health Tips</p>
            </a>

            <a href="/welcome" class="flex flex-col items-center">
                <i class="fa-solid fa-syringe text-red-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Medicine Corner</p>
            </a>

            <a href="/welcome" class="flex flex-col items-center">
                <i class="fa-solid fa-shield-heart text-red-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Our Success</p>
            </a>

            <a href="/welcome" class="flex flex-col items-center">
                <i class="fa-solid fa-user-nurse text-red-600 text-5xl transition-all duration-300 hover:text-blue-600 hover:scale-110"></i>
                <p class="text-lg font-medium mt-2">Work for Humanity</p>
            </a>

        </div>
    </div>
</body>
</html>
