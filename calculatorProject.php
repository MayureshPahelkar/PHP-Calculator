<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #E7DFC6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .calculator {
            background: #3d3d3d;
            width: 700px;
            padding: 40px;
            border-radius: 12px;
            display: flex;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* LEFT SECTION */
        .left {
            width: 40%;
            display: flex;
            align-items: center;
        }

        .title-wrapper {
            display: flex;
            align-items: center;
            animation: slideFade 2.5s ease-in-out infinite;
        }

        .line {
            width: 4px;
            height: 80px;
            background: #E7DFC6;
            margin-right: 15px;
        }

        .left h1 {
            color: #E7DFC6;
            font-size: 24px;
            line-height: 1.2;
            
        }

        /* RIGHT SECTION */
        .right {
            width: 60%;
        }

        .right form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .right input,
        .right select {
            background: transparent;
            border: none;
            border-bottom: 2px solid #777;
            padding: 10px;
            color: #fff;
            font-size: 14px;
            outline: none;
        }

        .right input::placeholder {
            color: #ccc;
        }

        .right select {
            background: #fff;
            color: #000;
            border-radius: 4px;
        }

        button {
            width: 130px;
            padding: 10px;
            background: #E7DFC6;
            border: none;
            color: #fff;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #E7DFC6;
        }

        /* RESULT TEXT */
        .result {
            color: #fff;
            margin-top: 10px;
            font-size: 16px;
        }

        /* ANIMATION */
        @keyframes slideFade {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }
            50% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
                transform: translateX(20px);
            }
        }
    </style>
</head>

<body>

<div class="calculator">

    <div class="left">
        <div class="title-wrapper">
            <div class="line"></div>
            <h1>PHP<br>CALCULATOR</h1>
        </div>
    </div>

    <div class="right">
        <form method="POST">
            <input type="text" name="num1" placeholder="ENTER NUMBER" >
            <input type="text" name="num2" placeholder="ENTER NUMBER" >

            <select name="operation">
                <option value="add">ADD</option>
                <option value="sub">SUBTRACT</option>
                <option value="mult">MULTIPLY</option>
                <option value="div">DIVIDE</option>
            </select>

            <button type="submit" value="submit" name="submit">SUBMIT</button>

            <!-- RESULT -->
            <p class="result">
                 <?php

                    if(isset($_POST['submit'])){
                        $num1=$_POST['num1'];
                        $num2=$_POST['num2'];
                        // echo $num1.' '.$num2;

                        $operation=$_POST['operation'];

                        switch($operation){
                            case "add": $sum=$num1+$num2;
                            echo "The Addition of Two Num is : {$sum}";
                            break;

                            case "sub": $sub=$num1-$num2;
                            echo "The Subtraction of Two Num is : {$sub}";
                            break;

                             case "mult": $mult=$num1*$num2;
                            echo "The Multiplication of Two Num is : {$mult}";
                            break;

                             case "div": $div=$num1/$num2;
                            echo "The Division of Two Num is : {$div}";
                            break;

                            default:echo "! Sorry , operation can't be performed  ";
                        }
                    }

                ?>
            </p>
        </form>
    </div>

</div>

</body>
</html>
