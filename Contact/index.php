<!DOCTYPE html>
<html>
<head>
    <title>Bookverse - Contact Us</title>
    <link rel="stylesheet" href="/bookverse/Contact/Contact.css">
</head>
<body>
    <header>
        <?php include("../navbar/index.php"); ?>
    </header>
    <main>
        <div class="contact-container">
            <h2>Contact Us</h2>
            <form method="POST" action="database.php" onsubmit="return validateEmail()">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your name" maxlength="30" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="yourname@gmail.com" size="30" style="margin-bottom: 10px;" required>
                <span id="email-error" style="color: rgb(27, 27, 166); font-size: 10px;"></span>    

                <label for="phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" placeholder="XXXXXXXXXX" maxlength="10" minlength="10" required>

                <label for="Query">Query:</label>
                <textarea name="Query" id="Query" rows="5" placeholder="Feedback/Suggestion/Issue" required></textarea>

                <button type="submit" name="submit">Submit</button>
            </form>    
        </div>
        <div class="popup" id="popup-message">
    <h3>Your message has been sent successfully!</h3>
    <button onclick="closePopup()">OK</button>
</div>

    </main>
    <footer>
        <?php include("../footer/index.php"); ?>
    </footer>
    <script src="/bookverse/Contact/Contact.js"></script>
</body>
</html>
