<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .menu-container {
            padding: 10px 0;
        }
        .menu-container nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .menu-container nav ul li {
            display: inline;
            margin-right: 20px;
        }
        .menu-container nav ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        .menu-container nav ul li a:hover {
            background-color: #555;
        }
        .contact-form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
        }
        .contact-form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .contact-form-container label {
            display: block;
            margin-bottom: 8px;
            color: white;
        }
        .contact-form-container input,
        .contact-form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .contact-form-container button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .contact-form-container button:hover {
            background-color: #218838;
        }
        .footer {
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        h1{
            text-align: center;
            color: white;
        }
</style>
</head>
<body>
    <div class="menu-container">
        <img src="logo.png" alt="logo">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="signup.php">Sign up</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>

    <h1> Contact us </h1>

    <div class="contact-form-container">
        <h2>Get in Touch</h2>
        <form id="contact-form">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <div class="footer">
        &copy; 2024 Future technology. All rights reserved.
    </div>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Thank you for your message!');
            document.getElementById('contact-form').reset();
        });
    </script>
</body>
</html>
