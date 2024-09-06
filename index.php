<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form with PHP</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="div_form_border">
        <h1>HTML form with PHP</h1>
        <form action="register.php" method="get">
            
            <!-- action is the page where the form data is sent  -->
            <!-- GET/POST method (GET data can be viewed at the Url ) (Cannot be viewed using the url)  -->
            <!-- name attribute is used as an identifier for each input  -->
            <!-- placeholder is the text that shows on display -->
            
            <label>Please enter your name?</label>
            <br>
            <input type="text" name="name" placeholder="Your name" />
            <br>
            <label>What is your email address?</label>
            <br>
            <input type="email" name="email" placeholder="example@mail.com" />
            <br>
            <label>Please enter your phone number?</label>
            <br>
            <input type="tel" maxlength="10" name="phone" pattern="^0\d{9}" placeholder="082 123 4567" required />
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
</html>