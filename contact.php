<?php include_once "header.php" ?>

<!-- page-banner -->
<section class="breadcrumb-image">
    <div class="container">
        <h1>CONTACT US</h1>
        <div class="breadcrumbs">
            <ol>
                <li><a href="index.php">HOME</a></li>
                <li class="current">CONTACT US</li>
            </ol>
        </div>
    </div>
</section>
<!-- ====== -->



<!-- Enquiry form -->

<section class="contact">
    <div class="container-xl">

        <!-- <h2 class="text-white text-center py-3">
            If you want enquire anything about us then feel free to ask..
        </h2> -->

        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <h5>Get In Touch</h5>
                <p class="mb-4"> If you have any questions or need information, feel free to ask!</p>
                <div class="contact-info d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="">Location</h5>
                        <p class="mb-0">City, State, Country</p>
                    </div>
                </div>
                <div class="contact-info d-flex align-items-center mb-4">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 ">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="">Mobile</h5>
                        <p class="mb-0">+91 91XXXXXXXX</p>
                    </div>
                </div>
                <div class="contact-info d-flex align-items-center">
                    <div class="d-flex align-items-center justify-content-center flex-shrink-0 ">
                        <i class="fa fa-envelope-open"></i>
                    </div>
                    <div class="ms-3">
                        <h5 class="">Email</h5>
                        <p class="mb-0">info@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center flex-column p-3">
                <form method="post" id="contact-form">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name"
                                    onkeydown="return/[a-z A-Z]/i.test(event.key)" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="number" name="number" pattern="{/0-9/}"
                                    maxlength="10" placeholder="Contact number" required>
                                <label for="Number">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    name="comment" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="contact-btn" id="submit" name="submit" type="submit">Send
                                Message</button>

                            <span style="color:red;" id="msg"></span>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<div class="row g-0">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.107146465045!2d77.0913427!3d28.686441300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0324ba6bf9bf%3A0x68b21ddcf7d57be9!2sNarang%20Medical%20Limited!5e0!3m2!1sen!2sin!4v1736356705379!5m2!1sen!2sin"
        height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<!-- Enquiry form End-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    jQuery('#contact-form').on('submit', function (e) {
        e.preventDefault();
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled', true);
        jQuery.ajax({
            url: 'submit.php',
            type: 'post',
            data: jQuery('#contact-form').serialize(),
            success: function (result) {
                jQuery('#msg').html(result);
                jQuery('#submit').html('Message Sent');
                setTimeout(function () {
                    jQuery('#msg').empty();
                    jQuery('#submit').html('Send Message');
                }, 3000);

                jQuery('#submit').attr('disabled', false);
                jQuery('#contact-form')[0].reset();
            }
        });

    });
</script>


<?php include_once "footer.php" ?>