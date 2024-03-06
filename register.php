<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST["register"])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $home_address = $_POST['home_address'];
    $home_address_extra = $_POST['home_address_extra'];
    $home_zip = $_POST['home_zip'];
    $home_city = $_POST['home_city'];
    $home_state = $_POST['home_state'];
    $home_country = $_POST['home_country'];
    $home_phone = $_POST['home_phone'];
    $home_cellphone = $_POST['home_cellphone'];
    $birthday = $_POST['birthday'];
    $home_homepage = $_POST['home_homepage'];
    $year = $_POST['year'];
    $term = $_POST['term'];
    $home_other_info = $_POST['home_other_info'];
    $majors = $_POST['majors'];
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $industry = $_POST['industry'];
    $company_address = $_POST['company_address'];
    $company_address_extra = $_POST['company_address_extra'];
    $company_zip = $_POST['company_zip'];
    $company_city = $_POST['company_city'];
    $company_state = $_POST['company_state'];
    $company_country = $_POST['company_country'];
    $company_phone = $_POST['company_phone'];
    $company_cellphone = $_POST['company_cellphone'];
    $company_homepage = $_POST['company_homepage'];
    $company_description = $_POST['company_description'];
    $company_other_info = $_POST['company_other_info'];
    $terms_ok = $_POST['terms_ok'];
    $first_login = $_POST['first_login'];
    $timestamp = $_POST['timestamp'];
    $subgroup = $_POST['subgroup'];
    $middle_name = $_POST['middle_name'];
    $suffix = $_POST['suffix'];
    $alumni_id = $_POST['alumni_id'];
    $remarks = $_POST['remarks'];
   

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Enable verbose debug output
        $mail->SMTPDebug = 0; // Set to 2 for debugging SMTP connection

        // Send using SMTP
        $mail->isSMTP();

        // Set the SMTP server to send through
        $mail->Host = 'smtp.gmail.com';

        // Enable SMTP authentication
        $mail->SMTPAuth = true;

        // SMTP username (your Gmail email address)
        $mail->Username = 'kiethd65@gmail.com';

        // SMTP password (your Gmail password or app-specific password)
        $mail->Password = 'hohp sqmx gpdf ccpo';

        // Enable TLS encryption; `PHPMailer::ENCRYPTION_STARTTLS` also accepted
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // TCP port to connect to (Gmail SMTP port)
        $mail->Port = 587;

        // Set email format to HTML
        $mail->isHTML(true);

        // Sender (your Gmail email address and your website name)
        $mail->setFrom('kiethd65@gmail.com', 'Cor Jesu College');

        // Recipient
        $mail->addAddress($email, $first_name);

        // Email content
        $verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
        $mail->Subject = 'Email verification';
        $mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';

        // Send email
        $mail->send();

        // Hash the password
        $encrypted_password = password_hash($password, PASSWORD_DEFAULT);

        // Connect with database
        $conn = mysqli_connect("localhost", "root", "", "cjc");

        // Insert into users table
        $sql = "INSERT INTO members (first_name, last_name, password, email, home_address, home_address_extra, home_zip, home_city, home_state, home_country, home_phone, home_cellphone, birthday, home_homepage, year, term, home_other_info, majors, company_name, position, industry, company_address, company_address_extra, company_zip, company_city, company_state, company_country, company_phone, company_cellphone, company_homepage, company_description, company_other_info, terms_ok, first_login, subgroup, middle_name, suffix, alumni_id, remarks, verification_code) VALUES ('$first_name', '$last_name', '$password', '$email', '$home_address', '$home_address_extra', '$home_zip', '$home_city', '$home_state', '$home_country', '$home_phone', '$home_cellphone', '$birthday', '$home_homepage', '$year', '$term', '$home_other_info', '$majors', '$company_name', '$position', '$industry', '$company_address', '$company_address_extra', '$company_zip', '$company_city', '$company_state', '$company_country', '$company_phone', '$company_cellphone', '$company_homepage', '$company_description', '$company_other_info', '$terms_ok', '$first_login', '$subgroup', '$middle_name', '$suffix', '$alumni_id', '$remarks','$verification_code')";

        mysqli_query($conn, $sql);

        header("Location: email-verification.php?email=" . $email);
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<form method="POST">
<div class="form-data">
                    <div class="user-details">
                        <label for="text">Name</label>
                        <input type="name" name="first_name" id="first_name" placeholder="First Name" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Last Name</label>
                        <input type="name" name="last_name" id="last_name" placeholder="Last Name" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Address</label>
                        <input type="name" name="home_address" id="home_address" placeholder="Home Address" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Address Extra</label>
                        <input type="name" name="home_address_extra" id="home_address_extra" placeholder="Home Address Extra" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Zip</label>
                        <input type="name" name="home_zip" id="home_zip" placeholder="Home Zip" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home City</label>
                        <input type="name" name="home_city" id="home_city" placeholder="Home City" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home State</label>
                        <input type="name" name="home_state" id="home_statee" placeholder="Home State" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Country</label>
                        <input type="name" name="home_country" id="home_country" placeholder="Home Country" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Phone</label>
                        <input type="name" name="home_phone" id="home_phonee" placeholder="Home Phone" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Cellphone</label>
                        <input type="name" name="home_cellphone" id="home_cellphonee" placeholder="Home Cellphone" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Birthday</label>
                        <input type="name" name="birthday" id="birthday" placeholder="Birthday" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Homepage</label>
                        <input type="name" name="home_homepage" id="home_homepage" placeholder="Home Homepage" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Year</label>
                        <input type="name" name="year" id="year" placeholder="Year" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Term</label>
                        <input type="name" name="term" id="term" placeholder="Term" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Home Other Info</label>
                        <input type="name" name="home_other_info" id="home_other_info" placeholder="Home Other Info" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Majors</label>
                        <input type="name" name="majors" id="majors" placeholder="majors" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Name</label>
                        <input type="name" name="company_name" id="company_name" placeholder="Company Name" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Position</label>
                        <input type="name" name="position" id="position" placeholder="Position" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Industry</label>
                        <input type="name" name="industry" id="industry" placeholder="Industry" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Address</label>
                        <input type="name" name="company_address" id="company_address" placeholder="Company Address" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Address Extra</label>
                        <input type="name" name="company_address_extra" id="company_address_extra" placeholder="Company Address Extra" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Zip</label>
                        <input type="name" name="company_zip" id="company_zip" placeholder="Company Zip" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company City</label>
                        <input type="name" name="company_city" id="company_city" placeholder="Company City" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company State</label>
                        <input type="name" name="company_state" id="company_state" placeholder="Company State" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Countr</label>
                        <input type="name" name="company_country" id="company_country" placeholder="Company Country" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Phone</label>
                        <input type="name" name="company_phone" id="company_phone" placeholder="Company Phone" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Cellphone</label>
                        <input type="name" name="company_cellphone" id="company_cellphone" placeholder="Company Cellphone" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Homepage</label>
                        <input type="name" name="company_homepage" id="company_homepage" placeholder="Company Homepage" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Description</label>
                        <input type="name" name="company_description" id="company_description" placeholder="Company Description" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Company Other Info</label>
                        <input type="name" name="company_other_info" id="company_other_info" placeholder="Company Other Info" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Terms</label>
                        <input type="checkbox" name="terms_ok" id="terms_ok" placeholder="Terms Ok" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">First Login</label>
                        <input type="name" name="first_login" id="first_login" placeholder="First Login" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">subgroup</label>
                        <input type="name" name="subgroup" id="subgroup" placeholder="subgroup" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Middle Name</label>
                        <input type="name" name="middle_name" id="middle_name" placeholder="Middle Name" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Suffix</label>
                        <input type="name" name="suffix" id="suffix" placeholder="Suffix" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Alumni Id</label>
                        <input type="name" name="alumni_id" id="alumni_id" placeholder="Alumni Id" required>      
                    </div>
                    <div class="user-details">
                        <label for="text">Remarks</label>
                        <input type="name" name="remarks" id="remarks" placeholder="Remarks" required>      
                    </div>
 
    <input type="submit" name="register" value="Register">
</form>