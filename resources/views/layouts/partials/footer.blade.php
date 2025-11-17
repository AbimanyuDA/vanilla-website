<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Company Info -->
            <div class="footer-column">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Vanilla Export">
                </div>
                <p class="footer-description">
                    Premium Indonesian vanilla beans and derivatives exporter. 
                    Committed to quality, sustainability, and excellence in every bean.
                </p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Products -->
            <div class="footer-column">
                <h4>Our Products</h4>
                <ul class="footer-links">
                    <li><a href="#vanilla-beans">Vanilla Planifolia</a></li>
                    <li><a href="#vanilla-beans">Vanilla Tahitensis</a></li>
                    <li><a href="#derivatives">Vanilla Paste</a></li>
                    <li><a href="#derivatives">Vanilla Extract</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jl. Export Vanilla No. 123<br>Jakarta, Indonesia</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>export@vanillaindonesia.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+62 812 3456 7890</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Indonesian Vanilla Export. All rights reserved.</p>
        </div>
    </div>
</footer>
