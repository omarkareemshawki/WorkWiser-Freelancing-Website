<?php



// PHP code for database connection
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "FreelancePlatform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Writing Services</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom Styles */
    /* Adjust styles as needed */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .jumbotron {
      background-color: #343a40;
      color: #ffffff;
    }
    .service-card {
      border: none;
    }
    .service-card:hover {
      transform: translateY(-5px);
    }
    .service-card .card-body {
      background-color: #ffffff;
      border-radius: 10px;
    }
    .service-card .card-title {
      color: #343a40;
    }
    .service-card .card-text {
      color: #6c757d;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <?php include 'C:\xampp\htdocs\freelancing\header.php';?>

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <h1 class="display-4">Professional Writing Services</h1>
    <p class="lead">Let us help you create compelling content for your business needs.</p>
    <a href="#services" class="btn btn-primary btn-lg">Learn More</a>
  </section>

  

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Our Services</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card service-card mb-4">
            <div class="card-body">
              <h5 class="card-title">Content Writing</h5>
              <p class="card-text">Engage your audience with high-quality, SEO-friendly content tailored to your brand.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card mb-4">
            <div class="card-body">
              <h5 class="card-title">Copywriting</h5>
              <p class="card-text">Craft persuasive copy that drives conversions and boosts sales for your products or services.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card mb-4">
            <div class="card-body">
              <h5 class="card-title">Blog Writing</h5>
              <p class="card-text">Maintain a consistent presence online with engaging and informative blog posts that attract readers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Article Writing</h5>
                    <p class="card-text">Produce informative and engaging articles tailored to your audience and niche.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Product Descriptions</h5>
                    <p class="card-text">Craft compelling and persuasive product descriptions that drive sales and conversions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Press Releases</h5>
                    <p class="card-text">Create professional press releases to announce new products, events, or milestones in your business.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Editing and Proofreading</h5>
                    <p class="card-text">Polish your written content with thorough editing and proofreading services for accuracy and clarity.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Ghostwriting</h5>
                    <p class="card-text">Have professional writers create content on your behalf, tailored to your voice and style.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card service-card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Resume Writing</h5>
                    <p class="card-text">Craft compelling resumes that highlight your skills, experiences, and achievements to land your dream job.</p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
<section id="why-choose-us" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Why Choose Us</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Professional Writers</h5>
                        <p class="card-text">Our team consists of skilled and experienced writers who deliver top-quality content tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Customized Solutions</h5>
                        <p class="card-text">We understand that every project is unique, and we offer customized writing solutions to meet your specific requirements.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Fast Turnaround</h5>
                        <p class="card-text">With our efficient workflow and dedicated team, we ensure quick turnaround times without compromising quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <!-- Contact Section -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Contact Us</h2>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <form id="contactForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Freelance Writing Services</p>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function() {
      $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        var target = $(this).attr('href');
        $('html, body').animate({
          scrollTop: $(target).offset().top
        }, 1000);
      });

      // Form Validation
      $('#contactForm').submit(function(event) {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        if (!name || !email || !message) {
          event.preventDefault();
          alert('Please fill in all fields.');
          return false;
        }

        // Email Validation (Basic)
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          event.preventDefault();
          alert('Please enter a valid email address.');
          return false;
        }

        return true;
      });

      // Animation
      $('.service-card').hover(function() {
        $(this).css('transform', 'translateY(-10px)');
      }, function() {
        $(this).css('transform', 'translateY(0)');
      });

       $('#contactForm').submit(function(event) {
        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();

        // Check if name field is empty
        if (!name) {
          event.preventDefault();
          alert('Please enter your name.');
          return false;
        }

        // Check if email field is empty
        if (!email) {
          event.preventDefault();
          alert('Please enter your email address.');
          return false;
        }

        // Email Validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
          event.preventDefault();
          alert('Please enter a valid email address.');
          return false;
        }

        // Check if message field is empty
        if (!message) {
          event.preventDefault();
          alert('Please enter your message.');
          return false;
        }

        // Check message length
        if (message.length < 10 || message.length > 500) {
          event.preventDefault();
          alert('Message should be between 10 and 500 characters.');
          return false;
        }

        // If all validations pass, form submission is allowed
        return true;
      });
    });
  </script> 
   <?php include 'C:\xampp\htdocs\freelancing\footer.php';?>
</body>
</html>
