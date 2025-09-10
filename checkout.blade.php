<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Wear</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
.payment-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.form-header {
    margin-bottom: 30px;
    text-align: center;
}
.form-footer {
    margin-top: 20px;
    text-align: center;
}
.payment-status {
    display: none;
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
}
#loader {
    display: none;
    text-align: center;
    margin: 20px 0;
}
.spinner {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 4px solid transparent;
    border-radius: 50%;
    background: linear-gradient(white, white) padding-box,
                linear-gradient(45deg, #007bff, #00ff88) border-box;
    box-shadow: 0 0 15px rgba(0, 123, 255, 0.2),
                inset 0 0 10px rgba(0, 255, 136, 0.1);
    animation: spin 1.2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
    position: relative;
}
@keyframes spin {
    to { transform: rotate(360deg); }
}

    </style>
</head>
<body>
    <div class="container py-5">
        <div class="payment-form">
            <div class="form-header">
                <h2>Make a Payment</h2>
                <p class="text-muted">Provide details to process your payment</p>
            </div>
            
            <form id="paymentForm" class="needs-validation" novalidate>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="customerName" placeholder="Enter customer name" required>
                            <label for="customerName"><i class="bi bi-person-fill"></i> Customer Name</label>
                            <div class="invalid-feedback">Please provide your name</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" pattern="^07\d{8}$" required>
                            <label for="phoneNumber"><i class="bi bi-phone-fill"></i> Phone Number</label>
                            <div class="invalid-feedback">Please enter a valid M-Pesa phone number starting with 07</div>
                            <div class="form-text text-muted"><i class="bi bi-info-circle-fill"></i> Enter your M-Pesa registered phone number</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="amount" min="1" placeholder="Enter amount" required>
                            <label for="amount"><i class="bi bi-cash"></i> Amount (KES)</label>
                            <div class="invalid-feedback">Please enter a valid amount</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="reference" placeholder="Enter reference" required>
                            <label for="reference"><i class="bi bi-hash"></i> Reference</label>
                            <div class="invalid-feedback">Please provide a reference number</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg position-relative" id="submitBtn">
                                <i class="bi bi-credit-card-fill me-2"></i>
                                Process Payment
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            
            <div id="loader">
                <div class="spinner"></div>
                <p class="mt-3">Processing payment. Please check your phone for the M-Pesa prompt...</p>
            </div>
            
            <div class="payment-status" id="paymentStatus"></div>
            
            <div class="form-footer">
                <p class="text-muted small">Powered by <a href="https://payherokenya.com" target="_blank">Simple Wear</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</body>
</html>
