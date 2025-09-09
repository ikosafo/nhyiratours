  <!-- Footer -->
  <footer class="footer p-top-90 p-bottom-90">

<!-- Footer top -->
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-4 col-md-6">
                <!-- Brand -->
                <div class="footer-widget">
                    <a href="/" class="brand-img">
                        <img class="me-4" src="<?php echo URLROOT ?>assets/img/logos/ntts.png" alt="" style="width: 95px;">
                    </a>
                    <p>
                    <span>
                        GW-0928-6697 <br>
                        Off Ofankor-Sowutuom Road <br>
                        Opposite the Usman Bin Affaan Mosque
                    </span>
                    </p>
                </div>
                <!-- /Brand -->
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <!-- Contact Info -->
                <div class="footer-widget">
                    <h2 class="h4 pb-3">Contact Info</h2>
                    <div class="contact-info">
                        <p>
                            <span>030-3955227</span> <br>
                            <span>030-2981752</span> <br>
                            <span>030-3963290</span> 
                        </p>
                        <p>
                            <a href="mailto:info@nhyirabatours.com">info@nhyirabatours.com</a>
                        </p>
                    </div>
                </div>
                <!-- /Contact Info -->
            </div>
            <div class="col-12 col-xl-4 col-md-6">
                <!-- Quick Links -->
                <div class="footer-widget">
                    <h2 class="h4 pb-3">Nhyiraba Travel and Tour</h2>
                    <div class="row">
                        <div class="col-6">
                            <ul class="footer-link">
                                <li class="link-item">
                                    <a href="visaInformation">Visa Information</a>
                                </li>
                                <li class="link-item">
                                    <a href="travelEssentials">Travel Essentials</a>
                                </li>
                                <li class="link-item">
                                    <a href="paymentOptions">Payment Options</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="footer-link">
                                <li class="link-item">
                                    <a href="localCustoms">Local Customs</a>
                                </li>
                                <li class="link-item">
                                    <a href="currencyInfo">Currency Info</a>
                                </li>
                                <li class="link-item">
                                    <a href="refundPolicy">Refund Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Quick Links -->
            </div>

        </div>
    </div>
</div>
<!-- /Footer top -->

<!-- Footer Bottom -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <p class="mb-lg-0">&copy; <?= date('Y') ?> Nhyiraba Travel and Tours Services</p>
            </div>
        </div>
    </div>
</div>
<!-- /Footer Bottom -->

</footer>
<!-- /Footer -->

<!-- Scroll top -->
<a href="#" class="scroll-top">
<i class="hicon hicon-thin-arrow-up"></i>
</a>
<!-- /Scroll top -->

<script defer src="<?php echo URLROOT ?>assets/js/theme-1.min.js"></script>
<script defer src="<?php echo URLROOT ?>assets/js/theme-2.min.js"></script>
<script defer src="<?php echo URLROOT ?>assets/js/theme-3.min.js"></script>

<script>
        // Wait for the window to load
        window.onload = function() {
            const preloader = document.getElementById('preloader');
            const content = document.querySelector('.content');
            // Hide the preloader
            preloader.classList.add('hidden');
            // Show the main content
            content.style.display = 'block';
            // Allow scrolling again
            document.body.style.overflow = 'auto';
        };
    </script>

</body>

</html>