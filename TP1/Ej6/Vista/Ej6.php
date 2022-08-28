<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 5 TP 1</title>

    <script type="text/javascript">
        function validar(){
            var nombre = document.getElementById("nombre");
            var errorNombre = document.getElementById("mens-nombre");
            var apellido = document.getElementById("apellido");
            var errorApellido = document.getElementById("mens-apellido");
            var direccion = document.getElementById("direccion");
            var errorDireccion = document.getElementById("mens-direccion");
            var edad = document.getElementById("edad");
            var errorEdad = document.getElementById("mens-edad");
            var estudios = document.querySelector('input[name="estudios"]:checked').value;
            var errorEstudios = document.getElementById("mens-estudios");
            var resp = true;
            
            if (nombre.value !== ""){
                if (isNaN(nombre.value) === false){
                    nombre.style = "border-color:red;";
                    resp = false;
                    errorNombre.innerHTML = "Ingrese un nombre valido:";
                }else{
                    nombre.style = "border-color:green";
                }
            }else{
                resp = false;
                nombre.style = "border-color:red;";
            }

            if (apellido.value !== ""){
                if (isNaN(apellido.value) === false){
                    apellido.style = "border-color:red;";
                    resp = false;
                    errorApellido.innerHTML = "Ingrese un apellido valido:";
                }else{
                    apellido.style = "border-color:green";
                }
            }else{
                resp = false;
                apellido.style = "border-color:red;";
            }

            if (direccion.value !== ""){
                if (isNaN(direccion.value) === false){
                    direccion.style = "border-color:red;";
                    resp = false;
                    errorDireccion.innerHTML = "Ingrese una direccion con nombre y numeros:";
                }else{
                    direccion.style = "border-color:green";
                }
            }else{
                resp = false;
                direccion.style = "border-color:red;";
            }     
            
            if (edad.value !== "" ){
                if (isNaN(edad.value) || edad.value <= 0){
                    edad.style = "border-color:red;";
                    resp = false;
                    errorEdad.innerHTML = "Ingrese una edad valida:";
                }else{
                    edad.style = "border-color:green";
                }
            }else{
                resp = false;
                edad.style = "border-color:red;";
            } 
            return resp;
        }

    </script>
</head>

    <body>
            <form method="get" action="../Control/saluda.php" name="form1" id="form1" onSubmit="return validar();">
                <table>
                    <tr>
                        <th style="text-align:left">
                        Ingrese sus datos:
                        </th>
                    </tr>
                    <tr>
                        <td id="mens-nombre">
                        Nombre:
                        </td>
                        <td>
                        <input type="text" name="nombre" id="nombre"/>
                        </td>
                    </tr>
                    <tr>
                        <td id="mens-apellido">
                        Apellido:
                        </td>
                        <td>
                        <input type="text" name="apellido" id="apellido"/>
                        </td>
                    </tr>
                    <tr>
                        <td id="mens-direccion">
                        Direccion:
                        </td>
                        <td>
                        <input type="text" name="direccion" id="direccion"/><br/>
                        </td>
                    </tr>
                    <tr>
                        <td id="mens-edad">
                        Edad:
                        </td>
                        <td>
                        <input type="text" name="edad" id="edad"/><br/>
                        </td>
                    </tr>
                    <tr>
                        <td id="mens-estudios">
                        Estudios:
                        </td>
                        <td>
                        <input type="radio" id="estudios" name="estudios" value="Primaria">
                        <label for="primario">Primaria</label><br>
                        <input type="radio" id="estudios" name="estudios" value="Secundaria">
                        <label for="secundario">Secundaria</label><br>
                        <input type="radio" id="estudios" name="estudios" value="Ninguno" checked>
                        <label for="ninguno" >Ninguno</label> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <label for="sexo">Sexo:</label> 
                        </td>
                        <td>
                            <select id="sexo" name="sexo">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Deportes:
                        </td>
                        <td>
                            <input type="checkbox" id="deportes1" name="1">
                            <label for="deportes1">Futbol</label><br>
                            <input type="checkbox" id="deportes2" name="2">
                            <label for="deportes2">Basquet</label><br>
                            <input type="checkbox" id="deportes3" name="3">
                            <label for="deportes3">Rugby</label><br>
                            <input type="checkbox" id="deportes4" name="4">
                            <label for="deportes4">Voley</label>
                        </td>
                    </tr>
                    <tr>
                    <td>
                        <input type="submit" name="submit" id="submit" value="Enviar"/><br/>
                    </td>
                    </tr>
                </table>

            </form>
            <div>
    <tr>
        <td class="ejercicios" style="text-align:center">
          <a href="../../indexTP1.php"><button >Volver atrás.</button></a> 
        </td>
    </tr>
    </div>
    </body>
</html>