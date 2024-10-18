
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="src/input.css">
</head>
<body>
    <header>
        <!--hero header-->
        <section style="background-color:#EBE9E1; color:#000;">
            <!-- NAVBAR -->
            <section class="font-oswald flex items-center justify-between w-full py-4">
                <div class="flex pl-[53px]">
                    <p class="text-xl font-bold">LOGO</p>
                </div>

                <!-- Centered Links -->
                <div class="font-oswald space-x-[155px] text-[24px]">
                    <a href="#about-us" class="hover:text-gray-700">ABOUT US</a>
                    <a href="#reviews" class="hover:text-gray-700">OUR PRODUCTS</a>
                    <a href="#shop" class="hover:text-gray-700">REVIEWS</a>
                </div>

                <!-- Right-side Icons -->
                <a href="php/login.php" class="flex items-center pr-[53px]">
                    <button class="w-[150px] h-[50px] text-[23px] bg-[#FFA2B6] rounded-[25px]" >Login</button>
                </a>
            </section>

            <!--HERO HEADER CONTENTS-->
            <section class="min-h-screen w-full" style="background-color: #FFA2B6; color:#E43D12; border-top-right-radius: 75px; border-top-left-radius: 75px;">
                <div class="absolute left-[15%] top-[200px]">  
                    <p class="font-oswald font-black text-[100px]  w-[603px] h-[265px]">Chic Elegance Boutique</p>
                    <div class="font-oswald font-normal pt-14 w-[433px] h-[259px]">
                        <p class="text-[48px]">Don't miss out.</p>
                        <p class="text-[48px]">Get our products now.</p>
                        <div class="flex items-center">
                            <p class="text-[36px]">Don't have an account?</p>
                            <a href="php/signup.php" class="text-[32px] pl-2 underline">Sign Up</a>
                        </div>
                    </div>
                </div>
                <div>
                    <img class="w-[1123px] h-[670px] absolute top-[150px] right-[100px]" src="images\clothes.svg">
                </div>
                <div>
                    
                </div>
            </section>

        </section>
    </header>
    <!--MAIN CONTENT-->
    <main>
        <section class="h-[1080px]" style="background-color: #EBE9E1;">
            <section class="h-[1020px]" style="background-color: #FCC88C;  border-bottom-right-radius: 75px; border-bottom-left-radius: 75px;">
                <div class=" absolute -bottom-[600px] w-full h-[300px] flex items-center" style="background-color: #FEAE6F"> <!--page header-->
                    <div class="flex items-center w-[470px] h-[190px] pl-[125px] border-2 border-transparent">
                        <h2 class="font-oswald font-black text-[90px]" style="color:#028391">About Us</h2>
                    </div>
                    <div class="pl-[50px] w-[212px] h-[262px] flex items-center">
                        <img src="images\about_us.svg">
                    </div>
                </div>
                <div>
                    <div class="absolute -bottom-[700px]"> <!--Our mission part-->
                        <h4 class="text-black">Our mission?</h4>
                    </div>
                </div>
            </section>
        </section>
    </main>
</body>
</html>
