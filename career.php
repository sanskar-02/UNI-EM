<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_FILES['file'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $file = $_FILES['file']; // Access the uploaded file

    // Validate file upload
    if ($file['error'] === UPLOAD_ERR_OK) {
        $filePath = $file['tmp_name']; // Temporary file path
        $fileName = $file['name'];     // Original file name

        // Create the email body
        $html = "Name: $name<br>Email: $email";

        include('smtp/PHPMailerAutoload.php');
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = "tls"; // Correct encryption type
        $mail->SMTPAuth = true;
        $mail->Username = "sanskarpss02@gmail.com"; // Your email
        $mail->Password = "ffsl ckav qsbv mdca";   // Your email password
        $mail->SetFrom("sanskarpss02@gmail.com", "Career Application");
        $mail->addAddress("sanskarpss02@gmail.com"); // Recipient email
        $mail->IsHTML(true);
        $mail->Subject = "New Career Application";
        $mail->Body = $html;

        // Add the file as an attachment
        $mail->addAttachment($filePath, $fileName);

        // SMTP Options
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Send the email
        if ($mail->send()) {
            echo "Your response has been sent.";
        } else {
            echo "Message Error: " . $mail->ErrorInfo;
        }
    } else {
        echo "File upload error: " . $file['error'];
    }
}
?>


<?php include_once "header.php" ?>

<!-- page-banner -->
<section class="breadcrumb-image">
    <div class="container">
        <h1>CAREER</h1>
        <div class="breadcrumbs">
            <ol>
                <li><a href="index.php">HOME</a></li>
                <li class="current">CAREER</li>
            </ol>
        </div>
    </div>
</section>
<!-- ====== -->
<section class="career">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center py-3">
                <h2>Grow With Us</h2>
            </div>
            <div class="col-lg-12 text-center">
                <img src="assets/img/career.jpg" alt="">
            </div>
            <div class="col-lg-12 career-content">
                <p>
                    At UNI-EM, we believe in fostering talent, embracing innovation, and building a team that thrives on
                    collaboration and creativity. As a dynamic and forward-thinking organization, we are committed to
                    empowering our employees with opportunities to learn, grow, and excel in their careers. Whether
                    you're a seasoned professional or just starting out, you'll find an inspiring environment where your
                    ideas are valued, your contributions are recognized, and your potential is limitless. Join us on our
                    journey to shape the future, one breakthrough at a time. Explore exciting career opportunities and
                    become part of a team that makes a difference every day!
                </p>
            </div>
        </div>
    </div>
</section>
<section class="careers-form">
    <div class="container text-center">
        <form method="post" id="career-form" enctype="multipart/form-data">
            <h5>Apply Now</h5>
            <p>Fill out the form below to apply for a position. We will get back to you shortly.</p>
            <div class="row g-4 py-3">
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name"
                            onkeydown="return/[a-z A-Z]/i.test(event.key)" required>
                        <label for="name">Full Name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-floating">
                        <input type="file" class="form-control" id="file" name="file" placeholder="Drop Your Resume"
                            required>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="submit-btn" id="submit" name="submit" type="submit">Submit</button>
                    <span style="color:red;" id="sent-msg"></span>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    jQuery('#career-form').on('submit', function (e) {
        e.preventDefault();
        jQuery('#sent-msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled', true);
        jQuery.ajax({
            url: 'career.php',
            type: 'post',
            data: jQuery('#career-form').serialize(),
            success: function (result) {
                jQuery('#sent-msg').html(result);
                jQuery('#submit').html('Message Sent');
                // setTimeout(function () {
                //     jQuery('#sent-msg').empty();
                //     jQuery('#submit').html('Send Message');
                // }, 3000);

                jQuery('#submit').attr('disabled', false);
                jQuery('#career-form')[0].reset();
            }
        });

    });
</script>

<?php include_once "footer.php" ?>