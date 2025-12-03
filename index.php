<!-- PHP -->
<?php 
        // declare variables
        $name = "Valdiaz Gahari";
        $nim = "251110206";
        $class = "D2025";
        $favnumber = 19;
        $dreamGPA = 4.00;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <!-- Style File -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>My Profile</h1>
    </header>
    <div class="box">
        <h3>
            <?php echo "Name: $name <br>";?>
        </h3>
        <h3>
            <?php echo "NIM: $nim <br>";?>
        </h3>
        <h3>
            <?php echo "Class: $class <br>";?>
        </h3>
        <h3>
            <?php echo "Favorite Number: $favnumber <br>";?>
        </h3>
        <h3>
            <?php echo "Dream GPA: $dreamGPA <br>";?>
        </h3>
    </div>
    <footer>
        <p>&copy; 2025 Valdiaz Gahari</p>
    </footer>
</body>
</html>