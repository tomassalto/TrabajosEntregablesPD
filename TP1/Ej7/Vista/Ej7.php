<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="form" id="form" method="post" action="../Control/realizarcalculo.php">
        <input name="text1" id="text1" type="number" required>
        <input name="text2" id="text2" type="number" required>
        <select name="select" id="select">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <button  type="submit">Calcular</button>
    </form>
    <div>
    <tr>
        <td class="ejercicios" style="text-align:center">
          <a href="/TP1/indexTP1.php"><button >Volver atrás.</button></a> 
        </td>
    </tr>
    </div>
</body>
</html>