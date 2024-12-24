<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بررسی اول بودن عدد</title>
</head>
<body>


        <form method="post">
        <input type="number" name="number" required>
        <button type="submit">بررسی</button>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $number = $_POST["number"];
        if ($number <= 1) 
        {
            echo "<p>عدد $number یک عدد اول نیست.</p>";
        }
         else {
            $isPrime = true;
            
            for ($i = 2; $i < $number; $i++)
             {
                if ($number % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime)
             {
                echo "<p>عدد $number یک عدد اول است.</p>";
            } 
            else {
                echo "<p>عدد $number یک عدد اول نیست.</p>";
            }
        }
    }
    ?>

</body>
</html>
