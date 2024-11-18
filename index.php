<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

    <div class="hero-section">
    <div class="contact-form-container">
        <h2>Login</h2>
        <form id="contact-form">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" name="password"></textarea>
            

            <button type="submit">Login</button>
        </form>
    </div>
<div class="main-content">
    <h1> Welcome<br> to the best technology<br> store you've ever seen </h1> 
    <h2> Here you can buy<br> technology things in our website </h2>
    <h2> If you want to join <button id="button"><a href="signup.html">Click here</a></button></h2>
</div>
</div>
    <div class="footer">
        &copy; 2024 Future technology. All rights reserved.
    </div>

     <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Succsesfully loged in!');
            document.getElementById('contact-form').reset();
        });
    </script>


</body>
</html>