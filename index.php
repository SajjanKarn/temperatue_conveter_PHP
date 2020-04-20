<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Comic Neue', cursive;
        }

        h1 {
            font-size: 3rem;
            padding: 20px 0px;
            text-align: center;
            height: 20vh;
            color: #6C63FF;
        }

        .main-div {
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-content: center;
        }

        /* ...............LEFT SIDE.............. */
        .left-side {
            background-color: #dfe6e9;
            width: 400px;
            height: 400px;
            border-radius: 30% 70% 67% 33% / 32% 30% 70% 68%;
            -webkit-box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
            -moz-box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
            box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
        }

        .left-side img {
            margin: 5rem 0 0;
            max-width: 400px;
            height: auto;
        }

        /* ........... RIGHT SIDE ..................... */
        .right-side {
            width: 400px;
            padding: 30px;
            height: 400px;
            border-radius: 15px;
            background-color: #dfe6e9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            /* box shadow property */
            -webkit-box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
            -moz-box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
            box-shadow: 7px 6px 42px -23px rgba(0, 0, 0, 0.74);
        }

        .input_num {
            width: 300px;
            padding: 5px;
            outline: none;
            border: none;
            border-bottom: 2px solid black;
            font-size: 1.3rem;
            background-color: transparent;
            font-weight: bold;
            margin: 0 0 1rem;
        }

        .selection {
            margin: 20px 0;
            font-size: 1.2rem;
        }

        .btn {
            padding: 10px 16px;
            outline: none;
            border: none;
            font-size: 1.2rem;
            color: white;
            background-color: #6C63FF;
            border-radius: 5px;
            cursor: pointer;
        }

        p {
            margin: 20px 0;
            font-weight: bold;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Temperature Converter!</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="img/img.svg" alt="temp" class="img">
            </div>
            <div class="right-side">
                <form method="POST" autocomplete="off">
                    <input type="text" class="input_num" name="input_num" placeholder="Enter Your Number">
                    <div class="selection">

                        <label for="cel">Celsius</label>
                        <input type="radio" name="units" id="cel" value="cel">

                        <label for="fah">Farenheite</label>
                        <input type="radio" name="units" id="fah" value="fah">

                    </div>

                    <input type="submit" class="btn" value="Convert Now" name="submit">
                </form>

                <p>
                    <?php

                    if (isset($_POST['submit'])) {
                        $number = $_POST['input_num'];
                        $type_conversion = $_POST['units'];

                        // Here We'll check the conversion type
                        if ($type_conversion === "fah") {
                            $answer = ($number * (9 / 5) + 32);
                            echo "The Temperature From Celsius To Farenheite is: $answer";
                        } else {
                            # (C * (9 / 5) + 32)
                            $answer = (($number - 32) * 5) / 9;
                            echo "The Temperature From Farenheite To Celsius is: $answer";
                        }
                    }

                    ?>
                </p>
            </div>
        </div>
    </header>
</body>

</html>