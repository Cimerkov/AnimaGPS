<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anima GPS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="sticky top-0 flex bg-black">
        <div class="logo w-1/2 m-5">
            <img class="w-1/2" src="../AnimaGPS/images/animagps-logo-white.png" alt="logo">
        </div>
        <div class="w-1/2 flex items-center justify-end">
            <ul class="flex">
                <li> <a class="mr-2.5" href="home.php">Home</a></li>
                <li> <a class="mr-2.5" href="#">About US</a></li>
                <li> <a class="mr-2.5" href="#">Features</a></li>
                <li> <a class="mr-2.5" href="#">Clients</a></li>
                <li><a class="mr-2.5" href="#">Contact Us</a></li>
            </ul>
            <a href="https://gps.anima.com.mk/login"><button class="mr-5 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Log In
                </button></a>
        </div>

    </div>
    <section id="home" class="bg-blue-500">
        <div class="flex text-center ">
            <div class="w-1/2 flex flex-col justify-center">
                <h1 class="ml-5 mr-12 mb-5 text-4xl text-center uppercase font-bold text-white text-justify">Your vehicles available from everywhere</h1>
                <h3 class="ml-5 mr-12 text-1xl uppercase font-bold text-white text-justify">Anima GPS gives you 24 hours control of your fleet available on any computer,tablet or smartphone</h3>
                <div class="my-5">
                    <a href="../AnimaGPS/files/GPS-offer.pdf" download rel="noopener noreferrer" target="_blank">


                        <button class="bg-white rounded-lg  text-blue-500 py-2.5 px-5 mr-2 mb-2 text-sm font-medium uppercase bold" type="button">Get Offer</button>
                    </a>
                </div>
            </div>
            <div class="w-1/2 flex justify-center">
                <img class="w-1/2 m-5 rounded-2xl" src="../AnimaGPS/images/1.png" alt="app">
            </div>

        </div>

    </section>
</body>

</html>