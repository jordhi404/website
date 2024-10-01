<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/home-style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing') }}">myWebsite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Tambahkan link navigasi lain jika diperlukan -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    </li>
                    <!-- Tambahkan nav-link lain di sini -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Thing 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Thing 2</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Home -->
    <div class="container home-container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1>Welcome to my Home Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam.</p>
        </div>

        <!-- Feature Section -->
        <div class="feature-section">
            <!-- Feature Card 1 -->
            <div class="card feature-card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 1">
                <div class="card-body">
                    <h5 class="card-title">Feature One</h5>
                    <p class="card-text">Deskripsi singkat tentang fitur pertama.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Feature Card 2 -->
            <div class="card feature-card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 2">
                <div class="card-body">
                    <h5 class="card-title">Feature Two</h5>
                    <p class="card-text">Deskripsi singkat tentang fitur kedua.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>

            <!-- Feature Card 3 -->
            <div class="card feature-card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Feature 3">
                <div class="card-body">
                    <h5 class="card-title">Feature Three</h5>
                    <p class="card-text">Deskripsi singkat tentang fitur ketiga.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>