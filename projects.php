<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>Projects - Gyles Perez</title>
</head>
<body>
    <!-- Header Section -->
    <header class="container-fluid py-3 bg-dark text-white">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">
                <img src="gp.png" alt="Gyles Perez Logo" class="img-fluid">
            </div>
            <h1 class="name"><b>Gyles Perez</b></h1>
            <nav>
                <ul class="d-flex list-unstyled">
                    <li class="mx-3"><a href="index.php" class="text-white">Home</a></li>
                    <li class="mx-3"><a href="about.php" class="text-white">About</a></li>
                    <li class="mx-3"><a href="projects.php" class="text-white">Projects</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Projects Section -->
    <section class="container my-5">
        <h2 class="text-center mb-4">My Projects</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Project 1 -->
            <div class="col">
                <div class="card shadow-sm">
                <img src="c3.jpg" class="card-img-top" alt="My Project Image">
                    <div class="card-body">
                        <h5 class="card-title">Ordering Sytem</h5>
                        <p class="card-text">Final Project using windows form application in Advanced Programming.</p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="cyber.png" class="card-img-top" alt="Project 2 Image">
                <div class="card-body">
                    <h5 class="card-title">Digital Defend</h5>
                    <p class="card-text">Bootstrap activity based project. Check it out <a href="https://codenavie.github.io/cybersecurityinformativewebsite/" class="text-dark">here</a>.</p>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer class="text-center py-4 bg-dark text-white">
        <p>&copy; 2024 Gyles Perez. All Rights Reserved.</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
