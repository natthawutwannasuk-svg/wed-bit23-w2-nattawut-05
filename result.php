<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap');

        * {
            box-sizing: border-box;
            font-family: 'Sarabun', sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f9fa; 
            color: #212529;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

 
        .result-container {
            background: #ffffff;
            padding: 35px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04); 
            width: 100%;
            max-width: 360px;
            text-align: center;
            line-height: 1.8; /
            font-size: 1.05rem;
            color: #495057;
        }

       
        .btn-back {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 20px;
            background-color: #f1f3f5;
            color: #495057;
            text-decoration: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background-color: #e9ecef;
            color: #212529;
        }
    </style>
</head>
<body>
    
    <div class="result-container">
        <?php

        
                $o_oz = $_POST["o_oz"];

                echo "ค่าออนซ์: " . $o_oz . "<br>";

                $total = $o_oz * 28.3495 ;
                echo "ค่าออนซ์แปลงเป็นกรัม: " . $total .  "<br>" ;

        ?>

        <a href="index.php" class="btn-back">กลับหน้าแรก</a>
    </div>

</body>
</html>