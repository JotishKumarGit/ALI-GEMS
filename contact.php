<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALI GEMS - Premium Gems & Jewellery</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb">
        <div class="breadcrumb-content">
            <h1>Contact Us</h1>
            <nav>
                <a href="#">Pages</a> <span>/</span> <span>Contact Us</span>
            </nav>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Get In Touch</h2>
                <p class="lead" style="color: var(--light-gold);">We'd Love to Hear From You</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h4 style="color: var(--primary-maroon); margin-bottom: 30px;">Send Us a Message</h4>
                        <form id="contactForm">
                            <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                            <input type="email" id="email" class="form-control" placeholder="Your Email" required>
                            <input type="tel" id="phone" class="form-control" placeholder="Phone Number" required>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message"
                                required></textarea>
                            <button type="submit" class="btn btn-gold w-100">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h4 style="color: var(--gold); margin-bottom: 30px;">Contact Information</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5 style="color: var(--gold);">Address</h5>
                                <p>1738 Near Aadamsha Hospital<br>Ghat Gate, Jaipur, Rajasthan 302003<br>India</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h5 style="color: var(--gold);">Phone</h5>
                                <p>+91 9057449855</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5 style="color: var(--gold);">Email</h5>
                                <p>FARMANANSARIII8877<br>@GMAIL.COM</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-certificate"></i>
                            <div>
                                <h5 style="color: var(--gold);">GST Number</h5>
                                <p>08BMSPH9984D1ZB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mt-4" style="border-radius: 20px; overflow: hidden; height: 300px;">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1778.8135699586687!2d75.83304808867571!3d26.915326035825963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1738%20Near%20Aadamsha%20Hospital%20Ghat%20Gate%2C%20Jaipur%2C%20Rajasthan%20302003%20India!5e0!3m2!1sen!2sin!4v1766226337977!5m2!1sen!2sin"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php') ?>