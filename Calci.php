<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=width-device, initial-scale=1.0">
    <title>Calculator</title>
    <script>
        function dis(val) {
            document.getElementById("result").value += val
        }

        function equal() {
            let x = document.getElementById("result").value
            let y = eval(x)
            document.getElementById("result").value = y
        }

        function clr() {
            document.getElementById("result").value = ""
        }
    </script>

    <style>
        input[type="button"] {
            background: grey;
            border: solid black 2px;
            height: 30px;
            padding: 30px;
        }
        
        input[type="textbar"] {
            background-color: white;
            border: solid black 2px;
            width: 80%;
            height: 30px;
        }
    </style>
</head>

<body>

    <center>


        <table border="1">


            <tr>
                <td colspan="4"><input type="textbar" name="display" id="result"></td>
            </tr>




            <tr>
                <td><input type="button" value="1" style="border:2px solid DodgerGrey;" onclick="dis('1')"></td>
                <td><input type="button" value="2" style="border:2px solid DodgerGrey;" onclick="dis('2')"></td>
                <td><input type="button" value="3" style="border:2px solid DodgerGrey;" onclick="dis('3')"></td>
                <td><input type="button" value="+" style="border:2px solid DodgerGrey;" onclick="dis('+')"></td>
            </tr>
            <br>
            <tr>
                <td><input type="button" value="5" style="border:2px solid DodgerGrey;" onclick="dis('5')"></td>
                <td><input type="button" value="4" style="border:2px solid DodgerGrey;" onclick="dis('4')"></td>
                <td><input type="button" value="6" style="border:2px solid DodgerGrey;" onclick="dis('6')"></td>
                <td><input type="button" value="-" style="border:2px solid DodgerGrey;" onclick="dis('-')"></td>
            </tr>
            <br>
            <tr>
                <td><input type="button" value="7" style="border:2px solid DodgerGrey;" onclick="dis('7')"></td>
                <td><input type="button" value="8" style="border:2px solid DodgerGrey;" onclick="dis('8')"></td>
                <td><input type="button" value="9" style="border:2px solid DodgerGrey;" onclick="dis('9')"></td>
                <td><input type="button" value="*" style="border:2px solid DodgerGrey;" onclick="dis('*')"></td>
            </tr>
            <br>
            <tr>
                <td><input type="button" value="C" style="border:2px solid DodgerGrey;" onclick="clr()"></td>
                <td><input type="button" value="0" style="border:2px solid DodgerGrey;" onclick="dis('0')"></td>
                <td><input type="button" value="=" style="border:2px solid DodgerGrey;" onclick="equal()"></td>
                <td><input type="button" value="/" style="border:2px solid DodgerGrey;" onclick="dis('/')"></td>
            </tr>

            </form>
    </center>
    </table>
</body>

</html>
