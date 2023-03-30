<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <div id="form">
            <form method="post" action="main.php">
                <label for="num1">
                    Número 1: <input type="text" name="num1" id="num1"> 
                </label>
                <br><br>
                <label for="num2">
                    Número 2: <input type="text" name="num2" id="num2"> 
                </label>
                <br> <br>
                <select name="op" id="op">
                    <option value="+">Somar</option>
                    <option value="-">Subtrair</option>
                    <option value="/">Dividir</option>
                    <option value="*">Multiplicar</option>
                </select>   
                <button type="submit">Calcular</button>
            </form>
        </div>
       
    </div>
  
    
    
</body>
</html>