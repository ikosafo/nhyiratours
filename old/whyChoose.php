<?php include ('./includes/header.php'); ?>

    <!-- Main -->
    <main>

        <!-- Title -->
        <section class="hero">
            <div class="hero-bg">
                <img src="<?php echo URLROOT ?>assets/img/dwl/09.jpg" srcset="<?php echo URLROOT ?>assets/img/dwl/09.jpg 2x" alt="">
            </div>
            <div class="bg-content container">
                <div class="hero-page-title">
                    <span class="hero-sub-title">Get to Know Us</span>
                    <h1 class="display-3 hero-title">
                        Why Choose Us
                    </h1>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Why Choose Us</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- /Title -->

         <!-- Why -->
         <?php include ('includes/whyChoose.php'); ?>
        <!-- /Why -->

        <!-- Booking -->
        <?php include ('includes/booking.php'); ?>
        <!-- /Booking -->

        <!-- Testimonials -->
        <?php include ('includes/testimonials.php') ?>
        <!-- /testimonials -->

    </main>
    <!-- /Main -->

<?php include ('./includes/footer.php'); ?>