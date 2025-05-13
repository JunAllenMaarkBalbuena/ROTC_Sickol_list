<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SICKOL APP</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <div class="background"></div> 
    <div class="content"> 
        <h2>ROTC "SICKOL" LIST</h2>
        <div class="cadet-button">
            <a href="add.php" class="btn">Add New Cadet</a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th><th>Name</th><th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='cadet-row'>
                                    <td>".$row['id']."</td>
                                    <td>".$row['name']."</td>
                                    <td><button class='expand-btn' onclick='toggleDetails(this)'>Expand</button></td>
                                  </tr>
                                  <tr class='cadet-details'>
                                    <td colspan='3'>
                                        <ul>
                                            <li><strong>Email:</strong> ".$row['email']."</li>
                                            <li><strong>Phone:</strong> ".$row['phone']."</li>
                                            <li><strong>Address:</strong> ".$row['Caddress']."</li>
                                            <li><strong>Temperature:</strong> ".$row['Temperature']."</li>
                                            <li><strong>Blood Oxygen Level:</strong> ".$row['Blood_Oxygen_level']."</li>
                                            <li><strong>Blood Pressure:</strong> ".$row['Blood_pressure']."</li>
                                            <li><strong>Created At:</strong> ".$row['Cdate']."</li>
                                        </ul>

                                        <table class='nested-table'>
                                            <thead>
                                                <tr>
                                                    <th>Symptoms</th>
                                                    <th>Treatment</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>".$row['Symptoms']."</td>
                                                    <td>".$row['Treatment']."</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class='action-buttons'>
                                            <a href='edit.php?id=".$row['id']."' class='btn'>Edit</a>
                                            <a href='delete.php?id=".$row['id']."' class='btn-delete'>Delete</a>
                                        </div>
                                    </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

 
</body>
</html>
