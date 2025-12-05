<!-- PHP -->
<?php 
        // declare variables
        $name = "Valdiaz Gahari"; // string
        $nim = "251110206"; // integer
        $code = array("HTML, ", "CSS, ", "JavaScript, ", "C/C++(Arduino), ", "PHP."); // array
        $dreamGPA = 4.00; // float
        $prodi = true; //boolean

        // conditional statements

        // GPA
        if ($dreamGPA >= 3.5){
            $title = "Insha Allah Cumlaude";
        } else {
            $title = "Not Cumlaude, But Hard Working!";
        }

        // prodi
        if ($prodi == true){
            $stugram = "Teknik Informatika";
        } else {
            $stugram = "Teknik Elektro";
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- Favicon -->
     <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=7820&format=png&color=000000favicon.ico" type="image/x-icon">
    
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
    <main class="main">
        <div class="img">
            <img src="https://raw.githubusercontent.com/vexuroooxy/Tugas-4/refs/heads/main/assets/image.jpg" alt="photo" width="300">
        </div>
        <div class="box">
            <div class="text">
                <p>
                    <?php echo "$name <br>";?>
                </p>   
            </div>
            <div class="text">
                <p>
                    <?php echo "$nim <br>";?>
                </p>
            </div>
            <div class="text">
                <p>
                    <?php foreach ($code as $list){
                            echo "$list";
                            }
                        ?>
                </p>
            </div> 
            <div class="text">
                <p>
                    <?php echo "IPK $dreamGPA $title <br>";?>
                </p>
            </div>
            <div class="text">
                <p>
                    <?php echo "$stugram <br>";?>
                </p>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Valdiaz Gahari</p>
    </footer>
</body>
</html>