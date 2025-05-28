<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <div class="contact-info">
                <p><i class="fas fa-envelope"></i> <a href="mailto:city.registrar@mandaluyong.gov.ph">city.registrar@mandaluyong.gov.ph</a></p>
                <p><i class="fas fa-phone"></i> <a href="tel:8533-28-21">8533-28-21</a></p>
                <p><i class="fas fa-map-marker-alt"></i> <a href="https://maps.app.goo.gl/BqivjAUx2r4DJitu5" target="_blank">Maysilo, Mandaluyong</a></p>
            </div>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/p/Mandaluyong-City-Civil-Registry-100064760288454/" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                <li><a href="mailto:city.registrar@mandaluyong.gov.ph" aria-label="Email"><i class="fas fa-envelope"></i></a></li>
                <li><a href="https://mandaluyong.gov.ph/government/departments/city-civil-registry-department/" aria-label="Website"><i class="fas fa-paperclip"></i></a></li>
                <li><a href="https://x.com/MandaluyongPIO" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
            </ul>
            <div class="office-hours">
                <h4>Office Hours</h4>
                <p>Monday - Friday: 8:00 AM - 5:00 PM</p>
                <p>Saturday: 8:00 AM - 12:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </div>
        <div class="footer-content map-section">
            <h3>Our Location</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.374156967718!2d121.0337266!3d14.5777433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84b4d7d8847%3A0x3cc947be6455c07a!2sMandaluyong%20City%20Hall!5e0!3m2!1sen!2sph!4v1745828287728!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Civil Registry Department. All Rights Reserved.</p>
    </div>
</footer>

<style>
    .main-footer {
        background: #f8f9fa;
        padding: 40px 0 0;
        width: 100%;
        margin-top: auto;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
    }

    .footer-container {
        margin: 0 auto;
        padding: 0 40px;
        max-width: 1200px;
        display: grid;
        grid-template-columns: 1fr 1fr 1.5fr;
        gap: 40px;
    }

    .main-footer .footer-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }

    .main-footer .map-section {
        grid-column: 3;
    }

    .main-footer .contact-info {
        margin-top: 15px;
    }

    .main-footer .contact-info p {
        margin: 10px 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .main-footer .contact-info i {
        color: #3247df;
        width: 20px;
    }

    .main-footer .map-container {
        width: 100%;
        height: 300px;
        margin: 15px 0;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .main-footer iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .main-footer .social-icons {
        display: flex;
        gap: 20px;
        padding: 0;
        list-style: none;
        margin: 15px 0;
    }

    .main-footer .social-icons li {
        display: inline-block;
    }

    .main-footer .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .main-footer .social-icons i {
        color: #3247df;
        font-size: 20px;
        transition: all 0.3s ease;
    }

    .main-footer .social-icons a:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .main-footer .social-icons a:hover i {
        color: #1a2bb3;
    }

    .main-footer .office-hours {
        margin-top: 20px;
        padding: 15px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .main-footer .office-hours h4 {
        color: #3247df;
        margin: 0 0 10px;
        font-size: 16px;
    }

    .main-footer .office-hours p {
        margin: 5px 0;
        font-size: 14px;
        color: #666;
    }

    .main-footer .footer-bottom {
        background: #3247df;
        text-align: center;
        padding: 15px 0;
        margin-top: 40px;
    }

    .main-footer .footer-bottom p {
        color: #fff;
        margin: 0;
        font-size: 14px;
    }

    .main-footer h3 {
        color: #3247df;
        font-size: 18px;
        margin-bottom: 15px;
        font-weight: 600;
        position: relative;
        padding-bottom: 10px;
    }

    .main-footer h3::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: #3247df;
    }

    .main-footer a {
        color: #555;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .main-footer a:hover {
        color: #3247df;
    }

    /* Tablet View */
    @media (max-width: 992px) {
        .footer-container {
            grid-template-columns: 1fr 1fr;
            padding: 0 30px;
            gap: 30px;
        }

        .main-footer .map-section {
            grid-column: 1 / -1;
        }

        .main-footer .map-container {
            height: 250px;
        }
    }

    /* Mobile View */
    @media (max-width: 768px) {
        .main-footer {
            padding: 30px 0 0;
        }

        .footer-container {
            grid-template-columns: 1fr;
            padding: 0 20px;
            gap: 25px;
        }

        .main-footer .footer-content {
            align-items: center;
            text-align: center;
            padding: 0 10px;
        }

        .main-footer .contact-info {
            width: 100%;
            max-width: 300px;
            margin: 15px auto;
        }

        .main-footer .contact-info p {
            justify-content: center;
            font-size: 15px;
            padding: 8px 0;
        }

        .main-footer .contact-info i {
            font-size: 18px;
        }

        .main-footer h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .main-footer h3::after {
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
        }

        .main-footer .map-container {
            height: 220px;
            margin: 10px 0;
        }

        .main-footer .social-icons {
            gap: 25px;
            margin: 20px 0;
        }

        .main-footer .social-icons a {
            width: 45px;
            height: 45px;
        }

        .main-footer .social-icons i {
            font-size: 22px;
        }

        .main-footer .office-hours {
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            padding: 20px;
        }

        .main-footer .office-hours h4 {
            font-size: 18px;
            margin-bottom: 15px;
        }

        .main-footer .office-hours p {
            font-size: 15px;
            margin: 8px 0;
        }

        .main-footer .footer-bottom {
            margin-top: 30px;
            padding: 12px 0;
        }

        .main-footer .footer-bottom p {
            font-size: 13px;
            padding: 0 15px;
        }
    }

    /* Small Mobile View */
    @media (max-width: 480px) {
        .main-footer {
            padding: 25px 0 0;
        }

        .footer-container {
            padding: 0 15px;
            gap: 20px;
        }

        .main-footer .map-container {
            height: 200px;
        }

        .main-footer .social-icons {
            gap: 20px;
        }

        .main-footer .social-icons a {
            width: 40px;
            height: 40px;
        }

        .main-footer .social-icons i {
            font-size: 20px;
        }

        .main-footer .office-hours {
            padding: 15px;
        }
    }
</style> 