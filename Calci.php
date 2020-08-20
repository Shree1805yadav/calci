<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
    <style>
       .cal{
           background-color: grey;
           height: 450px;
           width: 350px;
           border-radius: 30px;
           border: bold;
           margin-top: 45px;
           margin-left: 150px;

       }
       .calculator{
           height: auto;
           width: auto;
           border-radius: 2px;
           border-color: black;
           margin-top: 15px;
           margin-left: 6px;
           padding-left: 6px;
           font-weight: bold;
           font-size: 35;


       }

   
    </style>
</head>
<body>

<center>CALCULATOR</center>

<center>

</div>
        <div class="calculator">
        <form name="cal">    
            <input class="calculator" name="calculator" type="text"><br><br>
        </div>
        
            <button>
        
        </form>
         
        
        <table>
            <tr>
                <td><input class="button" type="button" value="1" onclick="cal.calculator.value+=('1')"></td>
                <td><input class="button" type="button" value="2" onclick="cal.calculator.value+=('2')"></td>
                <td><input class="button" type="button" value="3" onclick="cal.calculator.value+=('3')"></td>
                <td><input class="button" type="button" value="+" onclick="cal.calculator.value+=('+')"></td>
            </tr>

            <tr>
                <td><input class="button" type="button" value="4" onclick="cal.calculator.value+=('4')"></td>
                <td><input class="button" type="button" value="5" onclick="cal.calculator.value+=('5')"></td>
                <td><input class="button" type="button" value="6" onclick="cal.calculator.value+=('6')"></td>
                <td><input class="button" type="button" value="-" onclick="cal.calculator.value+=('-')"></td>
            </tr>

            <tr> 
                <td><input class="button" type="button" value="7" onclick="cal.calculator.value+=('7')"></td>
                <td><input class="button" type="button" value="8" onclick="cal.calculator.value+=('8')"></td>
                <td><input class="button" type="button" value="9" onclick="cal.calculator.value+=('9')"></td>
                <td><input class="button" type="button" value="x" onclick="cal.calculator.value+=('*')"></td>
            </tr>

            <tr>
                <td><input class="button" type="button" value="C" onclick="cal.calculator.value+=('C')"id="del"></td>
                <td><input class="button" type="button" value="0" onclick="cal.calculator.value+=('0')"></td>
                <td><input class="button" type="button" value="=" onclick="cal.calculator.value+=eval(cal.calculator.value)"></td>
                <td><input class="button" type="button" value="/" onclick="cal.calculator.value+=('/')"></td>
            </tr>
</tr>
    
        </table>
<tr colspan="25"></tr>
</center>

</body>
</html>