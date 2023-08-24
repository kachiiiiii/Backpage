<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <section>
        <div class="text-center bg-slate-200 text-4xl italic font-serif p-3 text-violet-900/75 shadow-xl transition-shadow">
            <h1>Contact Form</h1>
        </div>
        <div class="md:flex justify-center">
            <div class="bg-gray-300 mt-5 md:w-2/6 mx-6">
                <div class="">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13260.209152940186!2d18.4955601581747!3d-33.81096369316665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc5f4406950a6b%3A0x643064a4266bdd0c!2sParklands%2C%20Cape%20Town%2C%20South%20Africa!5e0!3m2!1sen!2sng!4v1692716739301!5m2!1sen!2sng"
                        height="450" style="border:0; width:100%" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="relative -mt-32  text-center ">
                    <p class="bg-violet-500 p-4 text-amber-200">13 Southwark Drive Parklands Cape Town 7441</p>
                </div>
            </div>
            <div class="w-2/6 mx-6 pt-4">
                <label for="firstname" class="block p-2 text-violet-600 italic font-semibold">FirstName</label>
                <input type="text" name="firstname" id="firstname" placeholder="First name" class="w-96 italic"><br>
                <label for="surname" class="block p-2 text-violet-600 italic font-semibold">SurName</label>
                <input type="text" name="surname" id="surtname" placeholder="Surname" class="w-96 italic "><br>
                <label for="email" class="block p-2 text-violet-600 italic font-semibold">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Email Address"
                    class="w-96 italic "><br>
                <label for="phone number" class="block p-2 text-violet-600 italic font-semibold">Phone Number</label>
                <input type="number" name="number" id="number" placeholder="Phone Number"
                    class="w-96 italic "><br><br>
                <button class="text-yellow-100 px-16 text-xl rounded italic py-3 bg-violet-600 hover:bg-green-500">Submit</button><br><br>
                <span class="">
                    <a href=""><i class="fa-brands fa-twitter fa-xl text-sky-500 px-2"></i></a>
                    <a href=""><i class="fa-brands fa-facebook fa-xl text-blue-500 px-2"></i></a>
                    <a href=""><i class="fa-brands fa-square-instagram fa-xl text-orange-500 px-2"></i></a>
                    <a href=""><i class="fa-brands fa-youtube fa-xl text-red-500"></i></a>
                </span>
            </div>
        </div>
    </section>
</body>

</html>
