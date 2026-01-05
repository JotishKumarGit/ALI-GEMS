  <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <h5>About ALI GEMS</h5>
                    <p>Your trusted partner in premium gemstone exports. We bring the finest quality gemstones from
                        Jaipur to the world.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5>Quick Links</h5>
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="products.php">Products</a>
                    <a href="services.php">Services</a>
                    <a href="gallery.php">Gallery</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Our Products</h5>
                    <a href="Tourmaline_Cabochon.php">Tourmaline Cabochon</a>
                    <a href="Tanzanite_Cabochon.php">Tanzanite Cabochon</a>
                    <a href="Tanzanite_Polki.php">Tanzanite Polki</a>
                    <a href="Malingano_Jasper.php">Malingano Jasper</a>
                    <a href="Aquamarine.php">Aquamarine</a>
                    <a href="Doublet_Opal.php">Doublet Opal</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Us</h5>
                    <p><i class="fas fa-map-marker-alt" style="color: var(--gold);"></i> 1738 Near Aadamsha Hospital
                        Ghat Gate, Jaipur, Rajasthan 302003
                        India</p>
                    <p><i class="fas fa-phone" style="color: var(--gold);"></i> +91 9057449855</p>
                    <p><i class="fas fa-envelope" style="color: var(--gold);"></i> FARMANANSARIII8877@GMAIL.COM</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023-2024 ALI GEMS - Gems & Jewellery. All Rights Reserved. | Designed By <span><a
                            href="https://trade4export.com" class="text-warning">Trade4Export</a></span>
                </p>
            </div>
        </div>
    </footer>

    <!-- script for contact us  -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;


            // Check if any of the fields are empty
            if (!name || !email || !phone || !message) {
                alert("Please fill all the fields");
                return; // Exit the function if any field is empty
            }


            const whatsappNum = "9057449855";

            const text = `Hello my name is ${name}. %0A%0A${message}%0A%0Ayou can contact me back on my email: ${email} or phone number: ${phone}`;

            const whatsappUrl = `https://wa.me/${whatsappNum}?text=${text}`;

            window.open(whatsappUrl, '_blank');

        })
    </script>

    <!-- enquiry modal -->
    <div class="modal" id="enquiryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Enquiry Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="enquiryForm">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" placeholder="Enter name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control" placeholder="Enter email"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="phone" id="phone" class="form-control" placeholder="Enter number"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" id="subject" class="form-control" placeholder="Enter subject"
                                            required>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="" id="message" class="form-control" placeholder="Enter message"
                                            required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="sendEmailButton" class="btn btn-primary">Send via Email</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script for sending enquiry email -->
    <script>
        document.getElementById('sendEmailButton').addEventListener('click', function(e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Check if any of the fields are empty
            if (!name || !email || !phone || !subject || !message) {
                alert("Please fill all the fields");
                return; // Exit the function if any field is empty
            }

            const mailtoLink = `mailto:FARMANANSARIII8877@GMAIL.COM?subject=${encodeURIComponent(subject)}&body=Name: ${encodeURIComponent(name)}%0AEmail: ${encodeURIComponent(email)}%0APhone: ${encodeURIComponent(phone)}%0AMessage: ${encodeURIComponent(message)}`;
            window.location.href = mailtoLink;
        })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.product-card, .service-card, .blog-card, .about-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>

</body>