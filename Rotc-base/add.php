<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $Caddress = $_POST['Caddress'];
    $Temperature = $_POST['Temperature'];
    $Blood_Oxygen_level = $_POST['Blood_Oxygen_level'];
    $Blood_pressure = $_POST['Blood_pressure'];
    $Symptoms = $_POST['Symptoms'];
    $Treatment = $_POST['Treatment'];
    $Cdate = $_POST['Cdate'];

    $sql = "INSERT INTO users 
        (name, email, phone, Caddress, Temperature, Blood_Oxygen_level, Blood_pressure, Symptoms, Treatment, Cdate) 
        VALUES 
        ('$name', '$email', '$phone', '$Caddress', '$Temperature', '$Blood_Oxygen_level', '$Blood_pressure', '$Symptoms', '$Treatment', '$Cdate')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADD NEW SICKOLr</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background"></div>
    <div class="addcontent">
    <h3>ADD NEW SICKOL</h3>
    <form method="post">
        <input type="text" name="name" placeholder="Enter Name" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="text" name="phone" placeholder="Enter Phone" required><br>
        <input type="text" name="Caddress" placeholder="Enter Address" required><br>
        <input type="text" name="Temperature" placeholder="Enter Temperature" required><br>
        <input type="text" name="Blood_Oxygen_level" placeholder="Enter Blood Oxygen Level" required><br>
        <input type="text" name="Blood_pressure" placeholder="Enter Blood Pressure" required><br>
        <input type="text" name="Symptoms" placeholder="Enter Symptoms" required><br>
        <input type="text" name="Treatment" placeholder="Enter Treatment" required><br>
        <input type="text" name="Cdate" placeholder="Enter Date" required><br>

        <div class="form-save">
                <input type="submit" value="Save" class="btn">
            </div>
    </form>

</body>
</html>
