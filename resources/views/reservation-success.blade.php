<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Success - Spice Magic Karachi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🌶️ Spice Magic Karachi</a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card border-0 shadow">
                    <div class="card-body py-5">
                        <div class="text-success mb-4" style="font-size: 4rem;">✅</div>
                        <h2 class="text-success mb-3">Reservation Successful!</h2>
                        <p class="lead mb-4">{{ session('success') }}</p>
                        <p>We have received your reservation request and will contact you shortly for confirmation.</p>
                        
                        <div class="mt-4">
                            <a href="/" class="btn btn-danger me-3">Back to Home</a>
                            <a href="/menu" class="btn btn-outline-danger">View Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>