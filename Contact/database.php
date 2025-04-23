<?php

$conn = new mysqli("sql303.infinityfree.com", "if0_38785579", "fPdDjocGeltHU2I", "if0_38785579_bookverse");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $query = htmlspecialchars($_POST['Query']);

    // Insert into DB
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, query) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $phone, $query);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        // Redirect to contact page with success message
        header("Location: Contact.php?success=1");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();

?>
