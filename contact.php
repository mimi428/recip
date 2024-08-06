
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasteversity</title>
    <style>
        footer {
            background-color: #fb944c;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .footer-nav {
            text-decoration: none;
            margin-bottom: 20px;
        }
        .footer-nav ul {
            text-decoration: none;
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .footer-nav li {
            text-decoration: none;
            display: inline;
            margin-right: 20px;
        }
        .footer-nav li:last-child {
            text-decoration: none;
            margin-right: 0;
        }
        .social-icons {
            margin-bottom: 20px;
        }
        .social-icons a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .contact-form {
            max-width: 400px;
            margin: 0 auto;
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .contact-form textarea {
            height: 100px;
        }
        .contact-form input[type="submit"] {
            background-color: #A61713;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <footer>
        <div class="social-icons">
            <a href="`https://www.facebook.com`/"><img src="img/fb.png" alt="Facebook" height="30px"></a>
            <a href="https://twitter.com/miminotok"><img src="img/x.jpg"  height="30px" alt="Twitter"></a>
            <a href="https://www.instagram.com/mihikaranjit/"><img src="img/insta.png"  height="30px" alt="Instagram"></a>
            <a href="https://www.linkedin.com/in/mihika-ranjit-0894b9237/"><img src="img/link.jpg"  height="30px" alt="LinkedIn"></a>
        </div>
        <div class="contact-form">
            <h2>Contact Us</h2>
            <form>
                <input type="text" name="name" placeholder="Your Name">
                <input type="email" name="email" placeholder="Your Email">
                <textarea name="message" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message">
            </form>
        </div>
    </footer>
</body>
</html>