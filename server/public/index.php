<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plumber/Electrician Services</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="indexstyles.css" rel="stylesheet">
</head>
<body>
    <!-- Header with Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Plumbing & Electrical Services</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <div id="heroCarousel" class="hero carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRriuwbwxIH5HU_DebEhMSEj55g5JFhffiqpg&s" alt="Plumbing Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/home-improvement/wp-content/uploads/2022/07/featured-image-hire-plumber.jpg" alt="Plumbing Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://t4.ftcdn.net/jpg/01/99/81/09/360_F_199810981_ASJTsuwwKNLwArWdzLbHUe4YDUCJRKFS.jpg" alt="Plumbing Image 3">
            </div>
        </div>
        <div class="overlay"></div>
        <div class="content container">
            <h1>Reliable Plumbing & Electrical Services</h1>
            <p>Your satisfaction is our priority.</p>
            <a href="#contact" class="btn btn-primary">Get a Quote</a>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="services section container text-center">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTU5HQHW7Ly_YWZoK4678rdLwWf7nrCw0z3cw&s" class="card-img-top" alt="Plumbing Repairs">
                    <div class="card-body">
                        <h5 class="card-title">Plumbing Repairs</h5>
                        <p class="card-text">We handle all types of plumbing repairs efficiently and affordably.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://www.warmzilla.co.uk/wp-content/uploads/2022/07/Combi-boiler.jpg" class="card-img-top" alt="Electrical Installations">
                    <div class="card-body">
                        <h5 class="card-title">Electrical Installations</h5>
                        <p class="card-text">Professional electrical installations for homes and businesses.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://cdn.bigbathroomshop.co.uk/media/catalog/product/cache/7c8497d2e81dc76ebd2efcf116c144ac/b/d/bdl1434_ls_1000_a.jpg" class="card-img-top" alt="Emergency Services">
                    <div class="card-body">
                        <h5 class="card-title">Emergency Services</h5>
                        <p class="card-text">Available 24/7 for all your plumbing and electrical emergencies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="about section bg-light text-center">
        <div class="container">
            <h2>About Us</h2>
            <p>We are a team of professional plumbers and electricians with years of experience. Our mission is to provide top-notch services to our clients with a focus on quality and customer satisfaction.</p>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div id="testimonials" class="testimonials section container text-center">
        <h2>What Our Clients Say</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-block w-100">
                        <p>"Great service! They fixed my plumbing issues in no time."</p>
                        <h5>- John Doe</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p>"Professional and reliable. Highly recommended."</p>
                        <h5>- Jane Smith</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-block w-100">
                        <p>"Quick response and excellent work. Will use again."</p>
                        <h5>- Mark Johnson</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="contact section bg-light text-center py-5">
        <div class="container">
            <h2 class="mb-4">Contact Us</h2>
            <?php
            if (isset($_GET['message'])) {
                echo '<div class="alert alert-info">' . htmlspecialchars($_GET['message']) . '</div>';
            }
            ?>
            <form action="contact.php" method="POST" class="mx-auto" style="max-width: 600px;">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
        </div>
    </div>

    <!-- Chat Bubble and Window -->
    <div id="chat-bubble" onclick="toggleChat()">Chat</div>
    <div id="chat-window">
        <iframe src="http://localhost/plumber%20websites/Website-folder/server/public/chat_client.html"></iframe>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Plumbing & Electrical Services. All rights reserved.</p>
            <p>Follow us on:
                <a href="#" class="text-white">Facebook</a> |
                <a href="#" class="text-white">Twitter</a> |
                <a href="#" class="text-white">Instagram</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function toggleChat() {
            var chatWindow = document.getElementById('chat-window');
            if (chatWindow.style.display === 'none' || chatWindow.style.display === '') {
                chatWindow.style.display = 'block';
            } else {
                chatWindow.style.display = 'none';
            }
        }
    </script>
</body>
</html>
