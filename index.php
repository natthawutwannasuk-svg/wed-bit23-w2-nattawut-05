<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* นำเข้าฟอนต์สไตล์มินิมอล */
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500&display=swap');

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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        h1 {
            font-size: 1.4rem;
            font-weight: 500;
            margin-bottom: 25px;
            color: #343a40;
            text-align: center;
            letter-spacing: 0.5px;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04); 
            max-width: 360px;
        }

        label {
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 8px;
        }

        input[type="number"] {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            font-size: 1rem;
            color: #495057;
            background-color: #fdfdfd;
            transition: all 0.2s ease;
            outline: none;
            margin-bottom: 20px; 
        }

        input[type="number"]:focus {
            border-color: #212529; 
            background-color: #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #212529; 
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #343a40; 
        }
    </style>
</head>
<body>
        <h1>งานที่2 ณัฐวุฒิ BIT.2/3 เลขที่05 </h1>


        <form action="result.php" method="post">

            <label for="">ใส่ค่าออนซ์</label><br>
            <input type="number" name="o_oz" > <br>

            <input type="submit" value="คำนวณ">
        </form>

</body>
</html>