<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Recruitment</title>
</head>
<body>
    <h2>Recruitment Form</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Position: <input type="text" name="position" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" name="apply" value="Apply">
    </form>

    <?php
    if (isset($_POST['apply'])) {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $email = $_POST['email'];

        $sql = "INSERT INTO recruitment (name, position, email) VALUES ('$name', '$position', '$email')";
        if ($conn->query($sql)) {
            echo "Application submitted for $name.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    echo "<h3>All Applicants</h3>";
    $result = $conn->query("SELECT * FROM recruitment");
    while ($row = $result->fetch_assoc()) {
        echo "{$row['name']} applied for {$row['position']}<br>";
    }
    ?>
</body>
</html>