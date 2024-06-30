<?php
    // Handle logic to show schedule and appointment form
    // For simplicity, assume a static schedule or fetch from a database

    // Example of a static schedule array
    $schedule = array(
        '2024-07-01' => array('09:00', '10:00', '11:00'),
        '2024-07-02' => array('10:00', '12:00', '14:00'),
        '2024-07-03' => array('11:00', '13:00', '15:00'),
    );

    // Display the schedule
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Consultation - MindWell Clinic</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Schedule a Consultation</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Available Consultation Times</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($schedule as $date => $times): ?>
                        <?php foreach ($times as $time): ?>
                            <tr>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $time; ?></td>
                                <td><a href="process_form.php?date=<?php echo urlencode($date); ?>&time=<?php echo urlencode($time); ?>">Book Now</a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 MindWell Clinic. All rights reserved.</p>
    </footer>
</body>
</html>
