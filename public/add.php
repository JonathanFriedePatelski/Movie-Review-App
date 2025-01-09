<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movie Review</title>
    <link rel="stylesheet" href="style.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-800 font-body text-white">
    <nav class="border-b border-gray-700 font-bold">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center text-teal-700">
                <li>
                    <a href="index.php" class="text-white"><i class="fa-solid fa-film"></i> Movie Review</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="index.php" class="hover:text-teal-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-teal-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="feed.php" class="hover:text-teal-300">Reviews</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-700 rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:outline-teal-600 text-sm" placeholder="Search">
                    <div class="absolute top-0">
                        <i class="fa-solid fa-magnifying-glass fill-current text-gray-500 mt-1 ml-2"></i>
                    </div>
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <i class="fa-solid fa-user-plus hover:text-teal-700"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</body>