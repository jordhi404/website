<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/landing-style.css">
</head>
<body>
    <div class="landing-container">
        <div class="half-page">
            <img class="img-fluid" src="img/milky_way.jpg" alt="background">
        </div>
        <div class="content">
            <div class="welcome-text">
                <h1>Welcome to myWebsite</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel mauris quam.</p>
            </div>
            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Start your Journey</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>