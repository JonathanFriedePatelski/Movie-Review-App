<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movie Review</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <main class="flex justify-center">
        <div class="container mx-auto px-4 py-16">
            <section class="movie-feed text-center">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-bold mb-8">Movie Reviews</h2>
                <!-- Add Review -->
                <div class="font-bold mb-8">
                    <div class="mt-3 md:mt-0">
                        <a href="" class="text-orange-600 hover:text-orange-400"><i class="fa-solid fa-plus"></i> Add Review</a>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                    <!-- Card -->
                    <div class="w-full mx-auto mt-2">
                        <article class="card bg-gray-700 rounded-lg overflow-hidden">
                            <h2 class="text-white text-lg font-semibold mb-2 mt-2">The Hobbit</h2>
                            <div class="flex items-center text-gray-400 text-sm mb-4 ml-8">
                                <span>Review by</span>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-orange-500"><i class="fa-solid fa-user"></i></a>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, excepturi laboriosam dolores
                                reprehenderit saepe temporibus, illum est ex vero iusto cum error voluptates reiciendis
                                expedita et natus, vel repellendus deleniti.
                            </p>
                            <a href="detail.php" class="text-orange-500 hover:text-white block">Read More</a>
                        </article>
                    </div>
                    <div class="w-full mx-auto mt-2">
                        <article class="card bg-gray-700 rounded-lg overflow-hidden">
                            <h2 class="text-white text-lg font-semibold mb-2 mt-2">The Hobbit</h2>
                            <div class="flex items-center text-gray-400 text-sm mb-4 ml-8">
                                <span>Review by</span>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-orange-500"><i class="fa-solid fa-user"></i></a>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, excepturi laboriosam dolores
                                reprehenderit saepe temporibus, illum est ex vero iusto cum error voluptates reiciendis
                                expedita et natus, vel repellendus deleniti.
                            </p>
                            <a href="detail.php" class="text-orange-500 hover:text-white block">Read More</a>
                        </article>
                    </div>
                    <div class="w-full mx-auto mt-2">
                        <article class="card bg-gray-700 rounded-lg overflow-hidden">
                            <h2 class="text-white text-lg font-semibold mb-2 mt-2">The Hobbit</h2>
                            <div class="flex items-center text-gray-400 text-sm mb-4 ml-8">
                                <span>Review by</span>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-orange-500"><i class="fa-solid fa-user"></i></a>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, excepturi laboriosam dolores
                                reprehenderit saepe temporibus, illum est ex vero iusto cum error voluptates reiciendis
                                expedita et natus, vel repellendus deleniti.
                            </p>
                            <a href="detail.php" class="text-orange-500 hover:text-white block">Read More</a>
                        </article>
                    </div>

                </div>
            </section>
        </div>
    </main>
</body>

</html>