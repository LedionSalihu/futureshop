]<!DOCTYPE html>
<html>
<head>
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="shop.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu-container nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
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
        .product-list{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
            color: white;
        }
        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            width: 200px;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .product p {
            font-size: 14px;
            color: white;
        }
        .product button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .product button:hover {
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
        .cart {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }
        .cart h2 {
            margin-bottom: 20px;
            color: black;
        }
        .cart ul {
            list-style-type: none;
            padding: 0;
        }
        .cart ul li {
            margin-bottom: 10px;
        }
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

    <h2>Welcome to the Shop</h2>
    <div class="product-list">
        <div class="product">
            <img src="product1.png" alt="Product 1">
            <h2>Gaming computer Lenovo</h2>
            <p>$1200.00</p>
            <button onclick="addToCart('Gaming computer Lenovo', 1200)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h2>Kul keyboard</h2>
            <p>$20.00</p>
            <button onclick="addToCart('Kul keyboard', 20)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product3.png" alt="Product 3">
            <h2>Mouse logitech</h2>
            <p>$10.00</p>
            <button onclick="addToCart('Mouse logitech', 10)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product4.jpeg" alt="Product 4">
            <h2>Lenovo legion gaming laptop</h2>
            <p>$1000.00</p>
            <button onclick="addToCart('Lenovo legion gaming laptop', 1000)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product5.jpg" alt="Product 5">
            <h2>Reddragon Gaming keyboard</h2>
            <p>$60.00</p>
            <button onclick="addToCart('Reddragon Gaming keyboard', 60)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product6.png" alt="Product 6">
            <h2>Asus business monitor</h2>
            <p>$120.00</p>
            <button onclick="addToCart('Asus business monitor', 120)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product7.jpg" alt="Product 7">
            <h2>Normal computer</h2>
            <p>$300.00</p>
            <button onclick="addToCart('Normal computer', 300)">Add to Cart</button>
        </div>
        <div class="product">
            <img src="product8.jpg" alt="Product 8">
            <h2>Gaming chair</h2>
            <p>$600.00</p>
            <button onclick="addToCart('Gaming chair', 600)">Add to Cart</button>
        </div> 
        <div class="product">
            <img src="product9.jpg" alt="Product 9">
            <h2>Evba Gaming mouse</h2>
            <p>$150.00</p>
            <button onclick="addToCart('Evba Gaming mouse', 150)">Add to Cart</button>
        </div> 
        <div class="product">
            <img src="product10.jpg" alt="Product 10">
            <h2>Lenovo legion laptop</h2>
            <p>$800.00</p>
            <button onclick="addToCart('Lenovo legion laptop', 800)">Add to Cart</button>
        </div> 
    </div>

    <div class="cart">
        <h2>Shopping Cart</h2>
        <ul id="cart-items"></ul>
        <p>Total: $<span id="total-amount">0.00</span></p>
    </div>

    <div class="footer">
        &copy; 2024 Future technology. All rights reserved.
    </div>

    <script>
        const cart = [];
        let totalAmount = 0;

        function addToCart(productName, productPrice) {
            cart.push({ name: productName, price: productPrice });
            totalAmount += productPrice;
            updateCart();
        }

        function updateCart() {
            const cartItems = document.getElementById('cart-items');
            const totalAmountElement = document.getElementById('total-amount');
            
            cartItems.innerHTML = '';
            cart.forEach((item) => {
                const listItem = document.createElement('li');
                listItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
                cartItems.appendChild(listItem);
            });
            
            totalAmountElement.textContent = totalAmount.toFixed(2);
        }
    </script>
</body>
</html>
