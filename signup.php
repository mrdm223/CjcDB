<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.html" method="post" name="register" onsubmit="return validateForm()">
    <div class="loader">
        <span class="loader-text">First Name</span>
    </div>
    <input type="text" id="first_name" name="first_name" required><br>

    <div class="loader">
        <span class="loader-text">Last Name</span>
    </div>
    <input type="text" id="last_name" name="last_name" required><br>

    <div class="loader">
        <span class="loader-text">Password</span>
    </div>
    <input type="password" id="password" name="password" required><br>

    <div class="loader">
        <span class="loader-text">Email</span>
    </div>
    <input type="email" id="email" name="email" required><br>

    <div class="loader">
        <span class="loader-text">Home address</span>
    </div>
    <input type="text" id="home_address" name="home_address" required><br>
    
    <div class="loader">
        <span class="loader-text">Home address extra</span>
    </div>
    <input type="text" id="home_address_extra" name="home_address_extra" required><br>

    <div class="loader">
        <span class="loader-text">Zip code</span>
    </div>
    <input type="text" id="home_zip" name="home_zip" required><br>

    <div class="loader">
        <span class="loader-text">City</span>
    </div>
    <input type="text" id="home_city" name="home_city" required><br>

    <div class="loader">
        <span class="loader-text">home state</span>
    </div>
    <input type="text" id="home_state" name="home_state" required><br>

    <div class="loader">
        <span class="loader-text">Country</span>
    </div>
    <input type="text" id="home_country" name="home_country" required><br>

    <div class="loader">
        <span class="loader-text">home_phone</span>
    </div>
    <input type="text" id="home_phone" name="home_phone" required><br>

    <div class="loader">
        <span class="loader-text">home cellphone</span>
    </div>
    <input type="text" id="home_cellphone" name="home_cellphone" required><br>

    <div class="loader">
        <span class="loader-text">Birthday</span>
    </div>
    <input type="text" id="birthday" name="birthday" required><br>

    <div class="loader">
        <span class="loader-text">home homepage</span>
    </div>
    <input type="text" id="home_homepage" name="home_homepage" required><br>

    <div class="loader">
        <span class="loader-text">year</span>
    </div>
    <input type="text" id="year" name="year" required><br>

    <div class="loader">
        <span class="loader-text">term</span>
    </div>
    <input type="text" id="term" name="term" required><br>

    <div class="loader">
        <span class="loader-text">home_other_info</span>
    </div>
    <input type="text" id="home_other_info" name="home_other_info" required><br>

    <div class="loader">
        <span class="loader-text">majors</span>
    </div>
    <input type="text" id="majors" name="majors" required><br>

    <div class="loader">
        <span class="loader-text">company name</span>
    </div>
    <input type="text" id="company_name" name="company_name" required><br>

    <div class="loader">
        <span class="loader-text">position</span>
    </div>
    <input type="text" id="position" name="position" required><br>

    <div class="loader">
        <span class="loader-text">industry</span>
    </div>
    <input type="text" id="industry" name="industry" required><br>

    <div class="loader">
        <span class="loader-text">company address</span>
    </div>
    <input type="text" id="company_address" name="company_address" required><br>

    <div class="loader">
        <span class="loader-text">company address extra</span>
    </div>
    <input type="text" id="company_address_extra" name="company_address_extra" required><br>

    <div class="loader">
        <span class="loader-text">company_zip</span>
    </div>
    <input type="text" id="company_zip" name="company_zip" required><br>

    <div class="loader">
        <span class="loader-text">company city</span>
    </div>
    <input type="text" id="company_city" name="company_city" required><br>

    <div class="loader">
        <span class="loader-text">company state</span>
    </div>
    <input type="text" id="company_state" name="company_state" required><br>

    <div class="loader">
        <span class="loader-text">company country</span>
    </div>
    <input type="text" id="company_country" name="company_country" required><br>

    <div class="loader">
        <span class="loader-text">company phone</span>
    </div>
    <input type="text" id="company_phone" name="company_phone" required><br>

    <div class="loader">
        <span class="loader-text">company cellphone</span>
    </div>
    <input type="text" id="company_cellphone" name="company_cellphone" required><br>

    <div class="loader">
        <span class="loader-text">company homepage</span>
    </div>
    <input type="text" id="company_homepage" name="company_homepage" required><br>

    <div class="loader">
        <span class="loader-text">company description</span>
    </div>
    <input type="text" id="company_description" name="company_description" required><br>

    <div class="loader">
        <span class="loader-text">company other info</span>
    </div>
    <input type="text" id="company_other_info" name="company_other_info" required><br>

    <div class="loader">
        <span class="loader-text">terms ok</span>
    </div>
    <input type="text" id="terms_ok" name="terms_ok" required><br>

    <div class="loader">
        <span class="loader-text">first login</span>
    </div>
    <input type="text" id="first_login" name="first_login" required><br>

    <div class="loader">
        <span class="loader-text">timestamp</span>
    </div>
    <input type="text" id="timestamp" name="timestamp" required><br>

    <div class="loader">
        <span class="loader-text">subgroup</span>
    </div>
    <input type="text" id="subgroup" name="subgroup" required><br>

    <div class="loader">
        <span class="loader-text">middle name</span>
    </div>
    <input type="text" id="middle_name" name="middle_name" required><br>

    <div class="loader">
        <span class="loader-text">suffix</span>
    </div>
    <input type="text" id="suffix" name="suffix" required><br>

    <div class="loader">
        <span class="loader-text">alumni_id</span>
    </div>
    <input type="text" id="alumni_id" name="alumni_id" required><br>

    <div class="loader">
        <span class="loader-text">remarks</span>
    </div>
    <input type="text" id="remarks" name="remarks" required><br>

    <div class="loader">
        <span class="loader-text">company_zip</span>
    </div>
    <input type="text" id="company_zip" name="company_zip" required><br>

    </form>
</body>
</html>