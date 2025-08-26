<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Collection | Simple Wear</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
/* ====== Navigation Bar ====== */
header {
    background: white;
    padding: 15px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 100;
}

.nav-links {
    display: flex;
    gap: 25px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 600;
    font-size: 1rem;
    transition: color 0.3s ease;
    padding: 5px 0;
    position: relative;
}

.nav-links a:hover {
    color: #ff6b6b;
}

/* Active link indicator */
.nav-links a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #ff6b6b;
    transition: width 0.3s ease;
}

.nav-links a:hover::after {
    width: 100%;
}

/* Cart icon styling */
.nav-links .fa-shopping-cart {
    font-size: 1.2rem;
    vertical-align: middle;
}

/* ====== Men's Page Content ====== */
.page-title {
    text-align: center;
    padding: 40px 0;
    background: linear-gradient(135deg, #6e8efb, #a777e3);
    color: white;
}

.page-title h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
}

/* Product Grid (Same as Holiday Offers) */
.product-showcase {
    padding: 30px 20px;
    background: #f9f9f9;
}

.product-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    max-width: 1200px;
    margin: 0 auto;
}

.product-card {
    background: white;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    width: 250px;
    transition: transform 0.3s ease;
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
}

/* Pricing Styles */
.old-price {
    text-decoration: line-through;
    color: #999;
    font-size: 1rem;
    margin: 5px 0;
}

.new-price {
    font-weight: bold;
    color: #000;
    font-size: 1.2rem;
    margin: 5px 0;
}

.discount-tag {
    color: red;
    font-weight: bold;
    background: #ffeeee;
    display: inline-block;
    padding: 3px 8px;
    border-radius: 4px;
    margin: 5px 0;
}

/* Add to Cart Button */
.cart-btn {
    display: inline-block;
    background-color: #333;
    color: white;
    padding: 8px 15px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    margin-top: 10px;
    transition: background 0.3s ease;
}

.cart-btn:hover {
    background-color: #ff6b6b;
}
.footer {
    background-color: #222;
    color: #fff;
    padding: 40px 0 0;
    font-family: Arial, sans-serif;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;/*prevent the overflowing of a container*/
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    gap: 30px;
}

.footer-section {
    flex: 1;
    min-width: 200px;
    margin-bottom: 30px;
}

.footer-section h3 {
    color: #ff6b6b;
    margin-bottom: 20px;
    font-size: 1.2rem;
    position: relative;/*position it relative to its normal position*/
    padding-bottom: 10px;
}
.social-links {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    gap: 15px;
    padding: 0;
}

.social-logo {
    height: 10px;
    width: 10px;
    border-radius: 50%;
    transition: transform 0.3s ease;    
}

.social-logo:hover {
    transform:scale(1.1);
}

.quick-links {
    list-style: none;
    padding: 0;    
}

.quick-links li {
    margin-bottom: 10px;
}

.quick-links a {
    color: #ddd;
    text-decoration: none;
    transition: color 0.3s;
}

.quick-links a:hover {
    color: #ff6b6b;
}
/*Footer Bottom*/
.footer-bottom {
    text-align: center;
    padding: 20px;
    background-color: #111;
    margin-top: 30px;
}

.footer-bottom p {
    margin: 0;
    color: #aaa;
    font-size: 0.9rem;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        padding: 15px;
    }
    
    .nav-links {
        margin-top: 15px;
        gap: 15px;
    }
    
    .product-card {
        width: 45%;
    }
}

@media (max-width: 480px) {
    .nav-links {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .product-card {
        width: 100%;
    }
}

    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>SIMPLE WEAR DESIGNERS</h1>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-links" href="{{ url('home') }}">HOME</a></li>
                <li><a class="nav-links" href="{{ url('about') }}">ABOUT US</a></li>
                <li><a href="{{ url('men') }}">MEN</a></li>
                <li><a href="{{ url('women') }}">WOMEN</a></li>
                <li><a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
    </header>

    <!-- Page Title -->
    <section class="page-title">
        <h1>Men's T-Shirts</h1>
        <p>Premium quality for every style</p>
    </section>
    <!-- Product Grid (Same as Holiday Offers layout) -->
   <!-- Replace the static product cards with this PHP code -->
<section class="product-showcase">
    <div class="product-container">
        <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'MyLaravelProject');
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Fetch men's products
        $sql = "SELECT * FROM men WHERE category='men'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    echo '<div class="product-card">';
    echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['name']) . '">';
    echo '<p>' . htmlspecialchars($row['name']) . '</p>';
    echo '<p>Reviews (' . $row['reviews'] . ')</p>';
    echo '<h3 class="old-price">was ksh ' . $row['old_price'] . '</h3>';
    echo '<h3 class="new-price">Now Ksh ' . htmlspecialchars($row['new_price']) . '</h3>';
    echo '<h4 class="discount-tag">' . htmlspecialchars($row['discount']) . '</h4>';
    echo '<form action="men_add_to_cart.php" method="post">';
    echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row['name']) . '">';
    echo '<input type="hidden" name="product_price" value="' . $row['new_price'] . '">';
    echo '<input type="hidden" name="product_image" value="' . htmlspecialchars($row['image_url']) . '">';
    echo '<button type="submit" class="cart-btn">Add to Cart</button>';
    echo '</form>';
    echo '</div>';
}
        } else {
            echo '<p>No products found</p>';
        }
        
        $conn->close();
        ?>
    </div>
</section>
    </section>

    <footer class="footer">
            <div class="footer-container">
                <div class="footer-section">
                    <h3>Follow us</h3>
                    <ul class="social-links">
                        <li><a href="https://web.whatsapp.com/" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ75KzcZJMW7mC6vsA8vNOzkAc5AwfOWzN6U6UzC5MhSgeSpAaEvZIddWj6CS3lkgKAQc&usqp=CAU"></a></li>
                        <li><a href="https://www.facebook.com/login.php/" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdoxHpvBb2ovxPTGhqtTBdOwGWvZGeJKi7FnJNTdqHSOoxkqfDctqzX29jCKb8Nep7S0o&usqp=CAU"></a></li>
                        <li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl09hYX3OxCeDnNWkJ00uNvI60MXuvsUuiB2yJ12RBCKA5cXNIn9YP7AlhmUvAnPsOLh0&usqp=CAU"></a></li>
                        <li><a href="https://twitter.com/login" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg43G1RrHVBJF3GtS_K8HpFs3k4Hc1_q0LN0rQnMJuDg5_-P2B0sj2vFKqF6UnNr9gluo&usqp=CAU"></a></li>
                        <li><a href="https://www.tiktok.com/en/" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTohyGdQMRpi0_pVjKb9HPxZz8OcucFNPJOXEPJ8WxFzq7V6y9ev__Br1xfVsQcR4-ZMIs&usqp=CAU"></a></li>
                        <li><a href="https://www.linkedin.com/login" target="_blank"><img id="social-logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReariTqhVj4v-OJb_8Q_hKb54qsZ1NOGc5b3LneT43VXUW_1bG6Ajk3NPRRfR0VW8JQEQ&usqp=CAU"></a></li>
                    </ul>
                </div>
            </div>
                <div class="footer-section">
                    <h4>Contact Us</h4>
                    <ul class="Contact-info">
                        <li><i class="fas fa-envelope"></i><a href="mailto:emmanueligathe4@gmail.com">simplewear@gmail.com</a></li>
                        <li><i class="fas fa-phone"></i><a href="tel: +254713078800">+25413078800</a></li>
                        <li><i class="fas fa-map-marker-alt"></i>River Road , Nairobi, Kenya</li>
                    </ul>            
                </div>
                <!--Quick links-->
                <div class="footer-section">
                    <h3>QuickLinks</h3>
                    <ul class="quick-links">
                        <li><a class="quick-links" href="{{ url('home')}} ">HOME</a></li>
                        <li><a class="quick-links" href="{{ url('men') }}">MEN</a></li>
                        <li><a class="quick-links" href="{{ url('women') }}">WOMEN</a></li>
                        <li><a class="quick-links" href="{{ url('about') }}">ABOUT US</a></li>

                    </ul>

                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy;2025 <strong>SIMPLE WEAR</strong>.All Rights Reserved.</p>
            </div>
        </footer>
</body>
</html>