<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Shopping Cart | Simple Wear</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
       /* ===== Base Styles ===== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* ===== Header Styles ===== */
header {
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 15px 30px;
    position: sticky;
    top: 0;
    z-index: 1000;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-title {
    font-size: 1.8rem;
    font-weight: 700;
    color: #333;
    text-decoration: none;
}

.nav-links {
    display: flex;
    gap: 25px;
    list-style: none;
}

.nav-links a {
    color: #333;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    padding: 8px 0;
    transition: color 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.nav-links a:hover {
    color: #ff6b6b;
}

.nav-links a i {
    margin-right: 5px;
}

/* ===== Cart Container ===== */
.cart-container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
}

.cart-container h1 {
    font-size: 2.2rem;
    margin-bottom: 30px;
    color: #333;
    text-align: center;
}

.empty-cart {
    text-align: center;
    padding: 40px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.empty-cart a {
    color: #ff6b6b;
    text-decoration: none;
    font-weight: 600;
}

.empty-cart a:hover {
    text-decoration: underline;
}

/* ===== Cart Items ===== */
.cart-items {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-bottom: 30px;
}

.cart-item {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 20px;
    display: grid;
    grid-template-columns: 150px 1fr;
    gap: 20px;
}

.product-image {
    width: 150px;
    height: 150px;
    border-radius: 5px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-details h2 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    color: #333;
}

.price-info {
    margin-bottom: 15px;
}

.new-price {
    font-weight: bold;
    font-size: 1.1rem;
    color: #ff6b6b;
}

.old-price {
    text-decoration: line-through;
    color: #999;
    font-size: 0.9rem;
    margin-left: 10px;
}

/* ===== Product Options ===== */
.product-options {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin: 20px 0;
}

.quantity-selector,
.size-selector,
.color-selector {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.quantity-selector input {
    width: 70px;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.size-selector select {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    min-width: 100px;
}

.color-options {
    display: flex;
    gap: 8px;
}

.color-dot {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    cursor: pointer;
    border: 2px solid transparent;
    transition: transform 0.2s;
}

.color-dot:hover {
    transform: scale(1.1);
}

.color-dot.active {
    border-color: #333;
}

.color-dot.red { background-color: #ff0000; }
.color-dot.blue { background-color: #0066ff; }
.color-dot.black { background-color: #000; }
.color-dot.white { background-color: #fff; border: 1px solid #ddd; }

.item-total {
    font-weight: 600;
    margin: 15px 0;
}

.item-total span {
    color: #ff6b6b;
}

.remove-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    color: #dc3545;
    background: none;
    border: none;
    cursor: pointer;
    font-size: 0.9rem;
    padding: 5px 0;
}

.remove-btn:hover {
    text-decoration: underline;
}

/* ===== Cart Summary ===== */
.cart-summary {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 25px;
    margin-top: 30px;
}

.summary-card h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #333;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #eee;
}

.summary-row.total {
    font-weight: bold;
    font-size: 1.1rem;
    border-bottom: none;
    margin-top: 15px;
}

/* ===== Payment Methods ===== */
.payment-methods {
    margin: 25px 0;
}

.payment-methods h3 {
    font-size: 1.1rem;
    margin-bottom: 15px;
}

.payment-options {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.payment-option {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s;
}

.payment-option:hover {
    border-color: #ff6b6b;
}

.payment-option input {
    margin-right: 5px;
}

.payment-option img {
    height: 20px;
    width: auto;
}

/* ===== Action Buttons ===== */
.action-buttons {
    display: flex;
    gap: 15px;
    margin-top: 25px;
}
/* M-Pesa Payment Styles */
.payment-verification {
    max-width: 600px;
    margin: 50px auto;
    padding: 30px;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    text-align: center;
}

.verification-steps {
    display: flex;
    justify-content: space-between;
    margin: 30px 0;
    position: relative;
}

.verification-steps:before {
    content: '';
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
    height: 2px;
    background: #eee;
    z-index: 1;
}

.step {
    position: relative;
    z-index: 2;
    text-align: center;
    width: 30%;
}

.step span {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    background: #eee;
    color: #999;
    margin-bottom: 10px;
}

.step.active span {
    background: #ff6b6b;
    color: white;
}

#paymentStatus {
    margin: 30px 0;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 5px;
}

.fa-spinner {
    color: #ff6b6b;
    font-size: 1.5rem;
}

.success {
    color: #28a745;
}

.error {
    color: #dc3545;
}

.actions {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block;
}

.btn-primary {
    background: #ff6b6b;
    color: white;
}

/* M-Pesa form styles */
#mpesaPaymentForm {
    max-width: 500px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.payment-instructions {
    background: #f0f8ff;
    padding: 15px;
    border-radius: 5px;
    margin: 20px 0;
    text-align: center;
}

.update-btn,
.checkout-btn {
    flex: 1;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    transition: all 0.3s;
}

.update-btn {
    background: #f0f0f0;
    color: #333;
}

.update-btn:hover {
    background: #e0e0e0;
}

.checkout-btn {
    background: #ff6b6b;
    color: white;
}

.checkout-btn:hover {
    background: #ff5252;
}

/* ===== Footer Styles ===== */
.footer {
    background: #333;
    color: white;
    padding: 40px 0 20px;
    margin-top: 50px;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.footer-section h3 {
    font-size: 1.2rem;
    margin-bottom: 20px;
    color: #fff;
}

.social-links {
    display: flex;
    gap: 15px;
    list-style: none;
}

.social-links a {
    color: white;
    font-size: 1.5rem;
    transition: color 0.3s;
}

.social-links a:hover {
    color: #ff6b6b;
}

.contact-info {
    list-style: none;
}

.contact-info li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-info a {
    color: white;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info a:hover {
    color: #ff6b6b;
}

.quick-links {
    list-style: none;
}

.quick-links li {
    margin-bottom: 10px;
}

.quick-links a {
    color: white;
    text-decoration: none;
    transition: color 0.3s;
}

.quick-links a:hover {
    color: #ff6b6b;
}

.footer-bottom {
    text-align: center;
    padding-top: 20px;
    margin-top: 30px;
    border-top: 1px solid #444;
}

/* ===== Responsive Design ===== */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        padding: 15px;
    }
    
    .nav-links {
        margin-top: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .cart-item {
        grid-template-columns: 1fr;
    }
    
    .product-image {
        width: 100%;
        height: auto;
        aspect-ratio: 1/1;
    }
    
    .action-buttons {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .product-options {
        flex-direction: column;
        gap: 15px;
    }
    
    .footer-container {
        grid-template-columns: 1fr;
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
                <li><a class="nav-links" href="{{ url('men') }}">MEN</a></li>
                <li><a class="nav-links" href="{{ url('women') }}">WOMEN</a></li>
                <li><a class="nav-links" href="{{ url('about') }}">ABOUT</a></li>
                <li><a href="{{ url('cart') }}"><i class="fas fa-shopping-cart"></i> 
                    (<?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?>)
                </a></li>
            </ul>
        </nav>
    </header>

    <!-- Cart Contents -->
    <section class="cart-container">
        <h1>Your Shopping Cart</h1>
        
        <?php if (empty($_SESSION['cart'])): ?>
            <p class="empty-cart">Your cart is empty. <a href="{{ url('men') }}">Continue shopping</a></p>
        <?php else: ?>
            <div class="cart-items">
                <?php 
                $subtotal = 0;
                foreach ($_SESSION['cart'] as $id => $product): 
                    // Extract numeric price
                    $raw_price = $product['price'] ?? '0';
                    if (!is_numeric($raw_price)) {
                        $price = floatval(preg_replace('/[^0-9.]/', '', explode('-', $raw_price)[0]));
                    } else {
                        $price = floatval($raw_price);
                    }
                    $quantity = $product['quantity'] ?? 1;
                    $item_total = $price * $quantity;
                    $subtotal += $item_total;
                ?>
                <div class="cart-item">
                    <div class="product-image">
                        <img src="<?= htmlspecialchars($product['image_url'] ?? '') ?>" 
                             alt="<?= htmlspecialchars($product['name'] ?? '') ?>">
                    </div>
                    
                    <div class="product-details">
                        <h2><?= htmlspecialchars($product['name'] ?? '') ?></h2>
                        <div class="price-info">
                            <span class="price">Ksh <?= number_format($price, 2) ?></span>
                            <?php if (isset($product['old_price']) && floatval($product['old_price']) > $price): ?>
                                <span class="old-price">was Ksh <?= number_format(floatval($product['old_price']), 2) ?></span>
                            <?php endif; ?>
                        </div>
                        
                        <div class="product-options">
                            <div class="quantity-selector">
                                <label>Quantity: <?= $quantity ?></label>
                            </div>
                            
                            <a href="cart.php?remove_from_cart=<?= $id ?>" class="remove-btn">
                                <i class="fas fa-trash"></i> Remove
                            </a>
                        </div>
                        
                        <div class="item-total">
                            <p>Item Total: <span>Ksh <?= number_format($item_total, 2) ?></span></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <div class="cart-summary">
                <div class="summary-card">
                    <h2>Order Summary</h2>
                    
                    <div class="summary-row">
                        <span>Subtotal (<?= array_sum(array_column($_SESSION['cart'], 'quantity')) ?> items)</span>
                        <span>Ksh <?= number_format($subtotal, 2) ?></span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>Ksh 150.00</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Tax</span>
                        <span>Ksh <?= number_format($subtotal * 0.16, 2) ?></span>
                    </div>
                    
                    <div class="summary-row total">
                        <span>Total</span>
                        <span>Ksh <?= number_format($subtotal + 200 + ($subtotal * 0.16), 2) ?></span>
                    </div>
                    
                   <!-- Simple Payment Button -->
<div class="checkout-section">
    <h2>Complete Your Order</h2>
    <form method="POST" action="checkout.php">
        <input type="hidden" name="total_amount" value="<?= $total ?>">
        <input type="hidden" name="order_id" value="<?= 'ORD-' . uniqid() ?>">
        
        <div class="form-group">
            <label for="customer_name">Full Name</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name" required>
        </div>
        
        <div class="form-group">
            <label for="phone_number">Phone Number (254...)</label>
            <input type="tel" class="form-control" id="phone_number" name="phone_number" 
                   pattern="254[0-9]{9}" title="Format: 2547XXXXXXXX" required>
            <small class="text-muted">Enter your M-Pesa registered number (format: 2547XXXXXXXX)</small>
        </div>
        
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        
        <button type="submit" name="checkout" class="checkout-btn">
            <i class="fas fa-credit-card"></i> Pay Ksh <?= number_format($total, 2) ?>
        </button>
    </form>
</div>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Follow Us</h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Contact Us</h3>
                <ul class="contact-info">
                    <li><i class="fas fa-envelope"></i> <a href="mailto:emmanueligathe4@gmail.com">simplewear@gmail.com</a></li>
                    <li><i class="fas fa-phone"></i> <a href="tel:+254713078800">0713 078800</a></li>
                    <li><i class="fas fa-map-marker-alt"></i> River Road, Nairobi, Kenya</li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="quick-links">
                    <li><a class="quick-links" href="{{ url('home') }}">Home</a></li>
                    <li><a class="quick-links" href="{{ url('men') }}">Men</a></li>
                    <li><a class="quicklinks" href="{{ url('women') }}">Women</a></li>
                    <li><a class="quick-links" href="{{ url('about') }}">About Us</a></li>
                    <li><a class="quick-links" href="{{ url('cart') }}">Your Cart</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <strong>SIMPLE WEAR DESIGNERS</strong>.
        </div>
    </footer>
    <script>
        // Function to change product image based on color selection
function changeImage(color) {
    const mainImage = document.getElementById('mainImage');
    mainImage.src = `images/tshirt-${color}.jpg`;
    
    // Update active color dot
    document.querySelectorAll('.color-dot').forEach(dot => {
        dot.style.borderColor = 'transparent';
    });
    event.target.style.borderColor = '#333';
}

// Quantity adjustment
function adjustQuantity(change) {
    const quantityElement = event.target.closest('.quantity-selector').querySelector('.quantity');
    let quantity = parseInt(quantityElement.textContent);
    quantity += change;
    
    if (quantity < 1) quantity = 1;
    if (quantity > 10) quantity = 10;
    
    quantityElement.textContent = quantity;
    updateCartTotals();
}

// Remove item from cart
function removeItem() {
    if (confirm('Remove this item from your cart?')) {
        event.target.closest('.cart-item').remove();
        updateCartTotals();
    }
}

// Update cart totals (simplified example)
function updateCartTotals() {
    // In a real app, you would recalculate all prices here
    console.log('Cart updated');
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialize cart functionality
});
    </script>
</body>
</html>