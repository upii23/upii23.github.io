<?php
    // Ensure form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $date = $_POST['date'];
        $time = $_POST['time'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        // Format data for text file
        $data = "Date: $date\nTime: $time\nName: $name\nEmail: $email\nPhone: $phone\n\n";

        // Save data to a text file
        $file = 'appointments.txt';
        file_put_contents($file, $data, FILE_APPEND);

        // Redirect back to schedule page or show confirmation
        header('Location: schedule.php');
        exit;
    } else {
        // Handle if form is accessed directly (not via POST method)
        // Redirect or show error message
        header('Location: schedule.php');
        exit;
    }
?>
