<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/service.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("html/header.html");?>

    <section id="sec-1">
        <nav id="sec-1-image">
            <h1 style="margin-top: -250px;"><b>See Our Cruise Services</b></h1>
        </nav>
        <nav id="sec-1-text">
            <div id="sec-1-option">
                <div class="text-option active" onclick="serviceOption(0, this)" style="border-top-left-radius: 10px;">
                    <h3><b>Restaurant</b></h3>
                </div>
                <div class="text-option" onclick="serviceOption(1, this)">
                    <h3><b>Golf</b></h3>
                </div>
                <div class="text-option" onclick="serviceOption(2, this)">
                    <h3><b>Gym</b></h3>
                </div>
                <div class="text-option" onclick="serviceOption(3, this)">
                    <h3><b>Swimming</b></h3>
                </div>
                <div class="text-option" onclick="serviceOption(4, this)">
                    <h3><b>Spa</b></h3>
                </div>
                <div class="text-option" onclick="serviceOption(5, this)" style="border-top-right-radius: 10px;">
                    <h3><b>Pick up</b></h3>
                </div>
            </div>
            <div id="sec-1-box">
                <div class="box-option active">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/restaurant-1.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>RESTAURANT</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Eat Foods And Drinks</h1>
                            <p>With the capacity of occupying  up to 55 passengers, our Mon Chéri Restaurant  is the combination of 
                                elegance, cozy and modern atmosphere with surround views of the incredible scenery. The Restaurant 
                                offers normal menu, vegetarian and Halal eaters in Vietnamese, Asian and European styles you will 
                                have chance to tasted a variety of great cuisines.  With the talent of our chef, you special request 
                                of food will be well taken care of.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-option">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/golf-1.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>GOLF</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Golf course 360 degree view</b></h1>
                            <p>In particular, this is also a yacht with a golf course in Ha Long that can make golfers feel satisfied. 
                                The golf course on the yacht is designed quite eye-catching with a 360-degree view so that visitors 
                                can both play golf and admire the beautiful scenery on the bay from every angle. The ground is designed 
                                with a modern design with interesting obstacles ready to give visitors a great shot.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-option">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/gym-1.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>GYM CENTER</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Health & Fitness Control</b></h1>
                            <p>A fitness center is available on our cruise for 24/24 hours and free to use. Why not treat yourself to 
                                some of our fitness classes — you might even have a little fun while you do something great for 
                                yourself!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-option">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/swimming-1.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>SWIMMING POOL</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Swimming pool on top of yacht</b></h1>
                            <p>Flanked by a wooden villa-style rim, the pool is surrounded by sun loungers and sofas. Nearby is the 
                                large al fresco dining table, so guests can easily cool off after over-indulging at supper.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-option">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/spa-2.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>SPA</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Relaxing Moment at Our Spa Center</b></h1>
                            <p>A spa treatment on Mon Chéri Cruises will be a perfect way to relax after a long adventure or hard 
                                workout. Pamper yourself in the ultimate spa service and enjoy the majestic views of Halong bay.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box-option">
                    <div class="box-option-display">
                        <div class="box-option-image">
                            <img src="images/dcar-1.jpg" width="100%"/>
                        </div>
                        <div class="box-option-text">
                            <h3 style="color: goldenrod;"><b>DCAR</b></h3>
                            <div class="box-option-border"></div>
                            <h1><b>Dcar Limosine</b></h1>
                            <p>Catching upstream waves - raising the level. The name speaks for the product: a classy vip chill space 
                                located right on a car. Lounge is true with the appearance of relaxing puffy sofas that first appeared 
                                in cars, eliminating the inherent thought of uncomfortable ordinary seats.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <section id="sec-2">
        <div id="sec-2-box">
            <div class="row sec-2-service">
                <div class="col-6" style="color: white;">
                    <h2><b>ACTIVITIES</b></h2>
                    <h1>Bamboo boat trip</h1>
                    <p>Besides roaming around on luxury cruises, tourists are also finding much fun in taking a bamboo rafting 
                        adventure down scenic rivers in remote destinations, where they can experience the thrill of cascading rapids, 
                        marvel at the untouched natural landscapes, and create cherished memories amidst the tranquility of the great 
                        outdoors.
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/service-box-1.jpg" width="100%"/>
                </div>
            </div>
            <div class="row sec-2-service">
                <div class="col-6">
                    <img src="images/service-box-2.jpg" width="100%"/>
                </div>
                <div class="col-6">
                    <h2><b>ACTIVITIES</b></h2>
                    <h1>Cooking Mon Chéri Cruises</h1>
                    <p>Cruising with us, you can join cooking class guided directly by Chef of Mon Chéri Cruises. Embark on our 
                        culinary journey aboard Mon Chéri Cruises, where you can participate in intimate cooking classes led by our 
                        talented Chef, immersing yourself in the art of gastronomy while sailing through stunning waterscapes.
                    </p>
                </div>
            </div>
            <div class="row sec-2-service">
                <div class="col-6">
                    <h2><b>ACTIVITIES</b></h2>
                    <h1>Kayaking Mon Chéri Cruises</h1>
                    <p>Kayaking with Mon Chéri Cruises offers a thrilling adventure, allowing you to paddle through serene waters, 
                        explore hidden coves, and get up close to nature's wonders under the expert guidance of our experienced 
                        instructors
                    </p>
                </div>
                <div class="col-6">
                    <img src="images/service-box-3.jpg" width="100%"/>
                </div>
            </div>
            <div class="row sec-2-service">
                <div class="col-6">
                    <img src="images/service-box-4.jpg" width="100%"/>
                </div>
                <div class="col-6" style="color: white;">
                    <h2><b>ACTIVITIES</b></h2>
                    <h1>Dining Mon Cheri Cruises</h1>
                    <p>Dining with Mon Chéri Cruises is an exquisite experience, where every meal is a culinary masterpiece crafted by 
                        our skilled chefs using the freshest ingredients sourced from local markets, enjoyed in elegant settings with 
                        breathtaking views of the sea and coastline, ensuring an unforgettable gastronomic journey for our guests.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="js/service.js"></script>

    <?php include("html/footer.html");?>
</body>
</html>