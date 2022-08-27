<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 TP 1</title>
    <script>
            function validacion(){
                var numero = document.getElementById("validationCustom01");
                var resp = false;
                var lab = document.getElementById("lab");

                if (numero.value === ""){
                    lab.innerHTML = "Debe ingresar un numero: ";
                    numero.style="border-color:red;"
                }else{
                    if (isNaN(numero.value)===false){
                        resp= true;
                    } else{
                        lab.innerHTML = "Debe ingresar un numero: ";
                        numero.style="border-color:red;"
                    }
                }
                return resp;
            }
    </script>
</head>
<body>

    <form method="get" action="../Control/vernumero.php" id="form1" name="form1" 
    onSubmit="return validacion();" >
        <label for="validationCustom01" id="lab">Ingrese un numero: </label>
        <input type="text" id="validationCustom01" name="numero">
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
    
</body>
</html>aaaaaaaaaaaaaa