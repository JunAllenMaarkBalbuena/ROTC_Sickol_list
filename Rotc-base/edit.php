<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

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

    $sql = "UPDATE users SET 
                name='$name', 
                email='$email', 
                phone='$phone', 
                Caddress='$Caddress', 
                Temperature='$Temperature', 
                Blood_Oxygen_level='$Blood_Oxygen_level', 
                Blood_pressure='$Blood_pressure', 
                Symptoms='$Symptoms', 
                Treatment='$Treatment', 
                Cdate='$Cdate' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EDIT USER</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background"></div>
    <div class="editcontent">
        <h1>EDIT USER</h1>
        <form method="post">
            <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
            <input type="text" name="Caddress" value="<?php echo $row['Caddress']; ?>" required><br>
            <input type="text" name="Temperature" value="<?php echo $row['Temperature']; ?>" required><br>
            <input type="text" name="Blood_Oxygen_level" value="<?php echo $row['Blood_Oxygen_level']; ?>" required><br>
            <input type="text" name="Blood_pressure" value="<?php echo $row['Blood_pressure']; ?>" required><br>
            <input type="text" name="Symptoms" value="<?php echo $row['Symptoms']; ?>" required><br>
            <input type="text" name="Treatment" value="<?php echo $row['Treatment']; ?>" required><br>
            <input type="text" name="Cdate" value="<?php echo $row['Cdate']; ?>" required><br>   

            <div class="form-button">
                <input type="submit" value="Update" class="btn">
            </div>
        </form>
    </div>
</body>
</html>