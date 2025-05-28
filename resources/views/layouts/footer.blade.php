<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p><a href="mailto:city.registrar@mandaluyong.gov.ph">Email: city.registrar@mandaluyong.gov.ph</a></p>
            <p>Phone: 8533-28-21</p>
            <p>Address: <a href="https://maps.app.goo.gl/BqivjAUx2r4DJitu5" target="_blank">Maysilo, Mandaluyong</a></p>
        </div>
        <div class="footer-content">
            <h3>Our Location</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.374156967718!2d121.0337266!3d14.5777433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84b4d7d8847%3A0x3cc947be6455c07a!2sMandaluyong%20City%20Hall!5e0!3m2!1sen!2sph!4v1745828287728!5m2!1sen!2sph" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/p/Mandaluyong-City-Civil-Registry-100064760288454/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="mailto:city.registrar@mandaluyong.gov.ph"><i class="fas fa-envelope"></i></a></li>
                <li><a href="https://mandaluyong.gov.ph/government/departments/city-civil-registry-department/"><i class="fas fa-paperclip"></i></a></li>
                <li><a href="https://x.com/MandaluyongPIO"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 Civil Registry Department. All Rights Reserved.</p>
    </div>
</footer>

<style>
    .main-footer {
        background: #fff;
        padding: 20px 0 5px;
        width: 100%;
        margin-top: auto;
    }

    .footer-container {
        margin: 0 auto;
        padding: 0 20px;
        max-width: 1140px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 20px;
    }

    .main-footer .footer-content {
        flex: 1;
        min-width: 250px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .main-footer .map-container {
        width: 100%;
        height: 200px;
        margin: 10px 0;
    }

    .main-footer iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    .main-footer .social-icons {
        display: flex;
        justify-content: center;
        gap: 15px;
        padding: 0;
        list-style: none;
    }

    .main-footer .social-icons li {
        display: inline-block;
    }

    .main-footer .social-icons i {
        color: rgb(3, 3, 3);
        font-size: 25px;
        transition: color 0.3s ease;
    }

    .main-footer .social-icons i:hover {
        color: #3247df;
    }

    .main-footer .footer-bottom {
        background: #3247df;
        text-align: center;
        padding: 8px 0;
        margin-top: 20px;
    }

    .main-footer .footer-bottom p {
        color: #f7f7f7;
        margin: 0;
        font-size: 14px;
        padding: 8px;
    }

    .main-footer h3 {
        color: #3247df;
        font-size: 16px;
        margin-bottom: 5px;
        font-weight: 500;
    }

    .main-footer a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .main-footer a:hover {
        color: #3247df;
    }

    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
            align-items: center;
        }

        .main-footer .footer-content {
            width: 100%;
            margin: 10px 0;
        }

        .main-footer .map-container {
            height: 150px;
        }
    }
</style> 