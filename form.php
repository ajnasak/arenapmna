<?php
// define variables and set to empty values
$name = $email = $phone = $message = $alertMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $message = test_input($_POST["message"]);

  // Email parameters
  $to_email = "nasiajnas77@gmail.com"; // Replace with your recipient's email address
  $subject = "Contact Form Submission from $name";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $message_body = "Name: $name\n";
  $message_body .= "Email: $email\n";
  $message_body .= "Phone: $phone\n";
  $message_body .= "Message:\n$message";

  // Send the email
  if (mail($to_email, $subject, $message_body, $headers)) {
    // Set a success message
    $alertMessage = "Thank you for your message. We will contact you shortly.";
  } else {
    // Set an error message
    $alertMessage = "Sorry, there was an error sending your message.";
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact.php" method="post" novalidate="novalidate">
                        <div class="row">
                           
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" required name="phone" id="Phone" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                        <?php if (!empty($alertMessage)): ?>
      <script>
        alert("<?php echo $alertMessage; ?>");
      </script>
    <?php endif; ?>
                    </form>
                </div>