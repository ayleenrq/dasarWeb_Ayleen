<html>
    <head>
        <title>Form Nama Lengkap dan Email</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f7c9c9;
                background-image: url('../P2/image.png');
                background-size: cover;
            }
            fieldset {
                border-radius: 12px;
                padding: 20px;
                background-color: #fff;
                width: 300px;
            }
            .output {
                margin-top: 10px;
                padding: 10px;
                background-color: #f0f0f0;
                border-radius: 5px;
            }
            .error {
                color: red;
                font-size: 12px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <fieldset>
            <h4 style="text-align: center;">Form Input PHP</h4>
            
            <?php 
            $input = "";
            $email = "";
            $output = "";
            $outputEmail = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST['input'];
                $email = $_POST['email'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

                // Validasi email
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $output = "Nama: " . $input . "<br>Email: " . $email;
                } else {
                    $outputEmail = "Email tidak valid, silakan masukkan email yang benar.";
                }
            }
            ?>

            <form method="post" action="">
                <label for="input">Nama:</label>
                <input type="text" name="input" id="input" style="margin-left: 2px; width: 300px;" value="<?php echo $input; ?>" required>
                <br><br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" style="margin-left: 2px; width: 300px;" value="<?php echo $email; ?>" required>
                <br><br>
                <input style="margin: auto; display: block; background-color: rgb(252, 197, 213);" type="submit" name="submit" value="Submit">
            </form>
            
            <?php 
            if (!empty($output)) {
                echo "<div class='output'>" . $output . "</div>";
            }
            if (!empty($outputEmail)) {
                echo "<div class='error'>" . $outputEmail . "</div>";
            }
            ?>
        </fieldset>
    </body>
</html>
