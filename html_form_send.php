<?php
if(isset($_POST["submit"])) {
$recipient = "kleanx@gmail.com"; //my email
echo $subject = 'Email message from Point Plumbing';
echo $name = $_POST ["yourName"];
echo $email = $_POST["yourEmail"];
echo $phone = $_POST["yourPhone"];
echo $location = $_POST["yourLocate"];
echo  $message = $_POST["yourMessage"];

 $mailBody="Name: $name\nEmail: $email\n\n$message"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>
<form action="" method="post" id="spaceing" data-abide>
        <div class="form-bg">
            <div class="row">
                <div id="name" class="large-6 medium-6 small-12 columns">
                    <label> <h5>Name</h5>
                        <input type="text" name="yourName" placeholder="What is you're name?"></input>
                    </label>
                </div>

                <div id="email" class="large-6 medium-6 small-12 columns">
                    <label><h5>Email</h5>
                        <input type="email" name="yourEmail" placeholder="Please enter in you're email."required></input>
                    </label>
                    <small class="error">An email Address is required.</small>
                </div>
            </div>

                <div class="row">
                    <div id="phone"class="large-6 medium-6 small-12 columns">
                        <label><h5>Phone</h5>
                            <input type="text" name="yourPhone" placeholder="Please enter you're phone number."></input>
                        </label>
                    </div>

                    <div id="location" class="large-6 medium-6 small-12 columns">
                        <label><h5>Location</h5>
                            <input type="text" name="yourLocate" placeholder="Where on Oahu are you currently living?"></input>
                        </label>
                    </div>
                </div>

                <div class="row">
                    <div id="message-area" class="large-12 medium-12 small-12 columns">
                        <label><h5>Message</h5>
                            <textarea id="message" name="yourMessage" placeholder="Please tell us about you're plumbing issues."></textarea>
                        </label>
                    </div>
                </div>

            <div class="row">
                <div id="submit" class="large-3 medium-3 small-3 columns">
                    <button name="submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>