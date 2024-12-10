<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Number Checker</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #34495e;
            margin-bottom: 8px;
            display: block;
        }

        input[type="number"], input[type="submit"], input[type="reset"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #27ae60;
        }

        .not-perfect {
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perfect Number Checker</h1>
        <form method="POST">
            <label for="num">Enter Number:</label>
            <input type="number" name="num" id="num" required>
            <input type="submit" value="Check">
            <input type="reset" value="Reset">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $num = (int)$_POST["num"];
                $sum = 0;
                for($i = 1; $i < $num; $i++){
                    if($num % $i == 0){
                        $sum += $i;
                    }
                }

                if($num == $sum){
                    echo "<div class='result'>$num Is A Perfect Number!</div>";
                } else {
                    echo "<div class='result not-perfect'>$num Is Not A Perfect Number</div>";
                }
            }
        ?>
    </div>
</body>
</html>
