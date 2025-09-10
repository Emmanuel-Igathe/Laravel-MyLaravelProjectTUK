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

        .quantity-selector {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            background: #f8f9fa;
            border-radius: 4px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .update-btn {
            padding: 5px 10px;
            background: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        .update-btn:hover {
            background: #e0e0e0;
        }

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

        /* ===== Checkout Form ===== */
        .checkout-section {
            margin-top: 30px;
        }

        .checkout-section h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
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
            border-radius: 4px;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            font-size: 1.1rem;
            margin-top: 20px;
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

        /* Success/Error Messages */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>SIMPLE WEAR DESIGNERS</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('men') }}">MEN</a></li>
                <li><a href="{{ url('women') }}">WOMEN</a></li>
                <li><a href="{{ url('about') }}">ABOUT</a></li>
                <li><a href="{{ url('cart') }}">
                    <i class="fas fa-shopping-cart"></i> 
                    ({{ count(session('cart', [])) }})
                </a></li>
            </ul>
        </nav>
    </header>

    <!-- Cart Contents -->
    <section class="cart-container">
        <h1>Your Shopping Cart</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif
        
        @if(empty($cart))
            <div class="empty-cart">
                <p>Your cart is empty. <a href="{{ url('men') }}">Continue shopping</a></p>
            </div>
        @else
            <div class="cart-items">
                @foreach($cart as $productName => $product)
                    @php
                        // Extract numeric price
                        $raw_price = $product['price'] ?? '0';
                        if (!is_numeric($raw_price)) {
                            $price = floatval(preg_replace('/[^0-9.]/', '', explode('-', $raw_price)[0]));
                        } else {
                            $price = floatval($raw_price);
                        }
                        $quantity = $product['quantity'] ?? 1;
                        $item_total = $price * $quantity;
                    @endphp
                    
                    <div class="cart-item">
                        <div class="product-image">
                            <img src="{{ $product['image_url'] }}" alt="{{ $productName }}">
                        </div>
                        
                        <div class="product-details">
                            <h2>{{ $productName }}</h2>
                            <div class="price-info">
                                <span class="new-price">Ksh {{ number_format($price, 2) }}</span>
                            </div>
                            
                            <div class="product-options">
                                <div class="quantity-selector">
                                    <label>Quantity:</label>
                                    <div class="quantity-controls">
                                        <form action="{{ route('cart.update', $productName) }}" method="POST" style="display: flex; align-items: center; gap: 10px;">
                                            @csrf
                                            <button type="button" class="quantity-btn" onclick="this.nextElementSibling.stepDown(); this.form.submit();">-</button>
                                            <input type="number" name="quantity" value="{{ $quantity }}" min="1" class="quantity-input" onchange="this.form.submit()">
                                            <button type="button" class="quantity-btn" onclick="this.previousElementSibling.stepUp(); this.form.submit();">+</button>
                                        </form>
                                    </div>
                                </div>
                                
                                <a href="{{ route('cart.remove', $productName) }}" class="remove-btn" onclick="return confirm('Are you sure you want to remove this item?')">
                                    <i class="fas fa-trash"></i> Remove
                                </a>
                            </div>
                            
                            <div class="item-total">
                                <p>Item Total: <span>Ksh {{ number_format($item_total, 2) }}</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <div class="cart-summary">
                <div class="summary-card">
                    <h2>Order Summary</h2>
                    
                    <div class="summary-row">
                        <span>Subtotal ({{ $itemCount }} items)</span>
                        <span>Ksh {{ number_format($subtotal, 2) }}</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>Ksh {{ number_format($shipping, 2) }}</span>
                    </div>
                    
                    <div class="summary-row">
                        <span>Tax</span>
                        <span>Ksh {{ number_format($tax, 2) }}</span>
                    </div>
                    
                    <div class="summary-row total">
                        <span>Total</span>
                        <span>Ksh {{ number_format($total, 2) }}</span>
                    </div>
                    
                    <div class="checkout-section">
                        <h2>Complete Your Order</h2>
                        <form method="POST" action="#">
                            @csrf
                            <input type="hidden" name="total_amount" value="{{ $total }}">
                            <input type="hidden" name="order_id" value="{{ 'ORD-' . uniqid() }}">
                            
                            <div class="form-group">
                                <label for="customer_name">Full Name</label>
                                <input type="text" id="customer_name" name="customer_name" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="phone_number">Phone Number (254...)</label>
                                <input type="tel" id="phone_number" name="phone_number" 
                                       pattern="254[0-9]{9}" title="Format: 2547XXXXXXXX" required>
                                <small>Enter your M-Pesa registered number (format: 2547XXXXXXXX)</small>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email">
                            </div>
                            
                            <button type="submit" name="checkout" class="checkout-btn">
                                <i class="fas fa-credit-card"></i> Pay Ksh {{ number_format($total, 2) }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
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
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('men') }}">Men</a></li>
                    <li><a href="{{ url('women') }}">Women</a></li>
                    <li><a href="{{ url('about') }}">About Us</a></li>
                    <li><a href="{{ url('cart') }}">Your Cart</a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} <strong>SIMPLE WEAR DESIGNERS</strong>. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Quantity adjustment functionality
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInputs = document.querySelectorAll('.quantity-input');
            
            quantityInputs.forEach(input => {
                input.addEventListener('change', function() {
                    this.closest('form').submit();
                });
            });
        });
    </script>
</body>
</html>
