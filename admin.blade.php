<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
    <style>
       <style>
    /* Base Styles */
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    /* Header Styles */
    header {
        background: linear-gradient(135deg, #2c3e50, #3498db);
        color: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .logo-title {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 2rem;
    }

    .logo {
        height: 60px;
        margin-right: 15px;
        border-radius: 50%;
    }

    h1 {
        margin: 0;
        font-size: 1.8rem;
    }

    /* Navigation */
    nav {
        background-color: #2c3e50;
        padding: 0.5rem 0;
    }

    .nav-links {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 0;
        flex-wrap: wrap;
    }

    .nav-link {
        color: white;
        text-decoration: none;
        padding: 0.5rem 1rem;
        margin: 0 5px;
        border-radius: 4px;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .nav-link:hover {
        background-color: #3498db;
        transform: translateY(-2px);
    }

    /* Main Content */
    .container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 20px;
    }

    h1, h2 {
        color: #2c3e50;
        margin-bottom: 1.5rem;
    }

    /* Form Styles */
    form {
        background: white;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
        display: block;
    }

    input, select, button {
        padding: 10px;
        margin: 8px 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 1rem;
    }

    input[type="text"],
    input[type="number"],
    select {
        width: calc(100% - 22px);
        max-width: 300px;
        display: inline-block;
    }

    button {
        background-color: #3498db;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #2980b9;
    }

    /* Table Styles */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1rem;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #3498db;
        color: white;
        font-weight: 500;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .nav-links {
            flex-direction: column;
            align-items: center;
        }
        
        .nav-link {
            margin: 5px 0;
            display: block;
            width: 100%;
            text-align: center;
        }
        
        input, select {
            width: 100%;
            max-width: none;
            margin: 8px 0;
        }
    }

    /* Action Buttons */
    .action-btn {
        padding: 5px 10px;
        margin: 0 3px;
        border-radius: 3px;
        font-size: 0.8rem;
    }

    .edit-btn {
        background-color: #f39c12;
    }

    .delete-btn {
        background-color: #e74c3c;
    }
</style>
    </style>
</head>
<body>
    <header>
        <header>
        <div class="logo-title">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFsgfUjcl2hqmWVpsW1xG8KbxRn40XU2IY-5aInmZTexf1ztNBIZPcRpj8HV7tkPKVdBs&usqp=CAU" alt="simplewear logo" class="logo">
            <h1>SIMPLE WEAR DESIGNERS</h1>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a class="nav-link" href="{{ url('home') }}">HOME</a></li>
                <li><a class="nav-link" href="{{ url('admin') }}">ADMIN</a></li>
                <li><a class="nav-link" href="{{ url('about') }}">ABOUT US</a></li> 
                <li><a class="nav-link" href="{{ url('men') }}">MEN</a></li>
                <li><a class="nav-link" href="{{ url('women') }}">WOMEN</a></li>
                <li><a class="nav-link" href="{{ url('login') }}">LOGIN</a></li>
                <li><a  class="nav-link" href="{{ url('registration') }}">REGISTRATION</a></li>
                <li><a  class="nav-link" href="{{ url('cart') }}">CART</a></li>
                <li><a class="nav-link" href="{{ url('checkout') }}>CHECKOUT</a></li>
            </ul>
        </nav>
    </header>
    </header>
    <h1>Manage Products</h1>
    
    <!-- Add Product Form -->
    <h2>Add New Product</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="text" name="image_url" placeholder="Image URL" required>
        <input type="number" step="0.01" name="old_price" placeholder="Old Price" required>
        <input type="text" name="new_price" placeholder="New Price" required>
        <input type="text" name="discount" placeholder="Discount" required>
        <input type="number" name="reviews" placeholder="Reviews" required>
        <select name="category" required>
            <option value="men">Men</option>
            <option value="women">Women</option>
        </select>
        <button type="submit" name="add_product">Add Product</button>
    </form>
    
    <!-- Products Table -->
    <h2>Existing Products</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Actions</th>
        </tr>
    </table>
</body>
</html>
