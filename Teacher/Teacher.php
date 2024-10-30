<?php
include('connect_database.php');
$sql = "select * from student";
$result = $connect_db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tech.css">
</head>

<body>
    <header>
        <div class="navbar">
            <a href="Profile.php"><img src="mgl.jpg" alt="profile"></a>
            <input type="text" placeholder="Search bar">
            <a href="Get_data.php" class="text">My Post</a>
            <a href="Post.php" class="text">Create Post</a>
    </header>
    <main>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div style="background-color: #beccbc; width:250px; margin:.5rem; padding:.5rem">
                    <p><?php echo 'Tutor Name:' . $row['Student_name'] ?></p>
                    <p><?php echo 'Prefered Subjects:' . $row['Prefered_subject'] ?></p>
                    <p><?php echo 'Class:' . $row['Class'] ?></p>
                    <p><?php echo 'Contact_details:' . $row['Contact_details'] ?></p>
                    <p><?php echo 'Maximum Budget:' . $row['Maximum_budget'] ?></p>
                    <p><?php echo 'Location:' . $row['Location'] ?></p>
                </div>
            <?php } ?>
        </tbody>
    </main>
</body>

</html>