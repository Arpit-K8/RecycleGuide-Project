<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - RecycleMate</title>
    <link rel="stylesheet" href="c_style.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <a href="homepage.php" class="logo">
            <i class="fas fa-recycle"></i>
            <h1>RecycleMate</h1>
        </a>
        <div class="nav-links">
            <a href="homepage.php">Home</a>
            <a href="Aboutus.php">About</a>
            <a href="resources.php">Resources</a>
            <a href="contact.php" class="active">Contact</a>
        </div>
    </nav>

    <div class="main-container">
        <main class="content-area">
            <section class="contact-us-section">
                <h2>Contact RecycleMate</h2>
                <p>We'd love to hear from you! If you have any questions, suggestions, or feedback, please don't hesitate to reach out to us.</p>

                <div class="contact-info">
                    <h3>Our Information</h3>
                    <p><i class="fas fa-envelope"></i> Email: support@recyclemate.com</p>
                    <p><i class="fas fa-phone"></i> Phone: (555) 123-4567</p>
                    <p><i class="fas fa-map-marker-alt"></i> Address: 123 Green Avenue, Amritsar, Punjab, India</p>
                </div>

                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form action="contact_back.php" method="POST" onsubmit="return submitForm()">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="cta-button">Send Message</button>
                    </form>
                </div>
            </section>
        </main>
    </div>

    <div id="custom-alert" style="display: none;">
  <div class="alert-content">
    <span id="alert-message"></span>
    <button id="alert-close">OK</button>
  </div>
</div>

    <script>
        function submitForm() {
            alert("Thank you for submitting the form! We will get back to you soon.");
            return true;
        }
    </script>

</body>
</html>
