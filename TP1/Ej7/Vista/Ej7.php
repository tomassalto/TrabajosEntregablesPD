<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 7 TP 1</title>
    <script type="text/javascript">
        function validar(){
            var op1 = document.getElementById("input1");
            var op2 = document.getElementById("input2");
            var resp = true;
            if (op1.value === "" || isNaN(op1.value)){
                op1.style = "border-color:red";
                resp = false;
            }else{
                op1.style = "border-color:green";
            }
            if (op2.value === "" || isNaN(op2.value)){
                op2.style = "border-color:red";
                resp = false;
            }else{
                op2.style = "border-color:green";
            }
            return resp;
        }
    </script>
</head>
    <body>
        <form method="post" action="../Control/realizarcalculo.php" name="form1" id="form1" onSubmit="return validar();">
            <input type="text" name="input1" id="input1"/><br/>
            <input type="text" name="input2" id="input2"/><br/>
            <select name="select">
                    <option value="1" id="opt1">Suma</option>
                    <option value="2" id="opt2">Resta</option>
                    <option value="3" id="opt3">Multiplicacion</option>
            </select>
            <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </body>
    <div>
    <tr>
        <td class="ejercicios" style="text-align:center">
          <a href="/TP1/indexTP1.php"><button >Volver atrás.</button></a> 
        </td>
    </tr>
    </div>
</html>