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
      referrerpolicy="no-referrer"
    />
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
    <main>
        <div class="container mx-auto px-4 pt-16">
            <div class="review">
                <h2 class="uppercase tracking-wider text-orange-500 text-lg font-bold">Movie Review</h2>
    
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 mt-8 bg-gray-700 rounded-md p-6">
                    <!-- Movie image and details -->
                    <div class="relative">
                        <a class="block">
                            <img src="./img/the-hobbit.jpg" alt="The Hobbit" class="w-full rounded-md shadow-md" />
                        </a>
                        <div class="mt-4">
                            <a href="#" class="text-lg hover:text-gray-300">The Hobbit</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span><i class="fa-solid fa-star text-orange-400"></i></span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Feb 20, 2020</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Fantasy, Adventure, Action
                            </div>
                        </div>
                    </div>
    
                    <!-- Review content -->
                    <div class="text-white">
                            <p class="mt-4">J.R.R. Tolkien's "The Hobbit" is a timeless masterpiece that takes readers on an enchanting journey through the magical realms of Middle-earth. Published in 1937, this classic fantasy novel has captivated generations with its vivid storytelling, memorable characters, and rich world-building.</p>

                                <p class="mt-4">The protagonist, Bilbo Baggins, is a reluctant hero who embarks on an epic quest to reclaim the Lonely Mountain and its treasure from the fearsome dragon, Smaug. What begins as a simple adventure quickly evolves into a sweeping odyssey, introducing readers to a host of fantastical creatures, ancient races, and perilous landscapes.</p>
                                
                                <p class="mt-4">Tolkien's masterful prose paints a vivid picture of Middle-earth, bringing it to life with meticulous detail. His descriptive language weaves a tapestry of landscapes, from the idyllic Shire to the foreboding Mirkwood Forest and the majestic Lonely Mountain. The author's love for linguistics is evident in the creation of languages such as Elvish and Dwarvish, adding depth and authenticity to the various cultures encountered on the journey.</p>
                                
                                <p class="mt-4">The characters in "The Hobbit" are a diverse and memorable cast. Bilbo Baggins undergoes a remarkable transformation from a timid hobbit to a courageous adventurer. The dwarves, led by the charismatic Thorin Oakenshield, each have distinct personalities that contribute to the dynamic of the group. Gandalf the wizard serves as a wise and enigmatic guide, steering the company through challenges with his magical prowess.</p>
                                
                                <p class="mt-4">One of the novel's strengths lies in its ability to appeal to a wide audience. While it is often classified as a children's book, "The Hobbit" possesses layers of complexity that engage readers of all ages. Themes of friendship, courage, and the triumph of the underdog resonate universally, making it a timeless and enduring tale.</p>
                                
                                <p class="mt-4">"The Hobbit" also lays the foundation for Tolkien's larger legendarium, providing a glimpse into the rich history and mythology that would later be explored in "The Lord of the Rings." The presence of the One Ring and the emergence of Gollum add intriguing connections to the broader narrative.</p>
                                
                                <p>In conclusion, "The Hobbit" is a literary gem that continues to enchant readers with its magical storytelling, memorable characters, and the timeless allure of Middle-earth. Whether you're a fan of fantasy or simply seeking an immersive and captivating tale, Tolkien's masterpiece is a must-read that transcends generations.</p>
                        <div class="mt-4">
                            <a href="feed.php" class="text-orange-500 hover:text-gray-300">Back to All Reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>