<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet the crew</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        header {
            background-color: #3b5998;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
        nav {
            background-color: #465e7c;
            padding: 15px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #ffcc00;
        }
        li{
            padding: 10px 20px;
            text-align: center;
        }
        section {
            padding: 30px;
            background-color: #fff;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        img{
            max-width: 100%;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <?php include("html/header.html");?>
    <header>
        <h1>MEET THE CREW</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#kinhnghiem">EXPERIENCE</a></li>
            <li><a href="#dieukhoan">Private POLICY</a></li>
            <li><a href="#hoidap">QUESTION & ANSWER</a></li>
        </ul>
    </nav>
    <section id="kinhnghiem">
        <h2 style="color: #3b5998; text-align: center; margin-bottom: 20px;">JOIN US</h2>
        <ul style="list-style-type: none; padding-left: 0; margin: 0;">
            <li style="margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
                <span style="font-weight: bold; color: #333;">Henrik Müller</span> Captain  - <span style="font-weight: bold;">18 years of experience</span><br>
                <img src="images/captain.jpg" height="600" width="400">
            </li>
            <li style="margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
                <span style="font-weight: bold; color: #333;">Marco Bianchi</span> Chief Officer - <span style="font-weight: bold;">10 years of experience</span><br>
                <img src="images/chief-officer.jpg" height="600" width="400">
            </li>
            <li style="margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
                <span style="font-weight: bold; color: #333;">Raj Patel </span> Nurse - <span style="font-weight: bold;">7 years of experience</span><br>
                <img src="images/nurse.jpg" height="600" width="400">
            </li>
            <li style="margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
                <span style="font-weight: bold; color: #333;">Jack Thompson</span> Safety Officer - <span style="font-weight: bold;">5 years of experience</span><br>
                <img src="images/safety-officer.jpg" height="600" width="400">
            </li>
            <li style="margin-bottom: 15px; padding: 10px; background-color: #f0f0f0; border-radius: 5px;">
                <span style="font-weight: bold; color: #333;">Mei Chen</span> Bartender - <span style="font-weight: bold;">5 years of experience</span><br>
                <img src="images/bartender.jpg" height="600" width="400">
            </li>
        </ul>
    </section>
    
    <section id="dieukhoan">
        <h2 style="color: #3b5998; text-align: center; margin-bottom: 20px;">Private Policy:</h2>
        <div style="background-color: #f5f5f5; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
            <p style="color: #000; line-height: 1.6;">
                1. <span style="font-weight: bold;">Private Policy:</span>
                Welcome customers to our website. When customers access our website, it means that the Buyer can refer to the following payment methods and choose to apply the appropriate method: that means you agree to these terms. The website reserves the right to change, modify, add or remove any portion of these Terms of Sale, at any time. Changes are effective immediately upon posting on the website without prior notice. And when you continue to use the website, after changes to these Terms are posted, it means you accept those changes. Please check back regularly to update our changes.
            </p>
            <p style="color: #000; line-height: 1.6;">
                2. <span style="font-weight: bold;">Payment:</span>
                Customers can refer to the following payment methods and choose to apply the appropriate method:
            
                <p> Option 1: Direct (Book and pay at our brands).</p>
                <p> Option 2: Pay after recieve your tickets (COD).</p>
                <p> Option 3: Pay with credit card. </p>

            </p>
        </div>
    </section>
    <?php include("html/footer.html");?>
</body>
</html>