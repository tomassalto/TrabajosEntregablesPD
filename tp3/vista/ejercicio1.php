<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link href="" rel="stylesheet">
    <title>Document</title>

</head>
<body>
    <div>
        <form id="form1" name="form1" method="post" action="../control/subirarchivo.php" enctype="multipart/form-data">            
            <div class="mb-3">
            <label for="validationCustom03" class="form-label">Seleccionar un archivo:</label>
            <input require name="archivo" type="file" class="form-control" id="archivo" required>
            </div>
            <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button id="btn-sub" type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div><br>
    <tr>
    <td class="ejercicios" style="text-align:center">
    <a href="/tp3/indexTP3.php"><button class="btn btn-primary" type="button">Volver atrás.</button></a> 
    </td>
    </tr>
    
</body>
<script src="index.js" type="text/javascript"></script>
<script src="./bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>
</html>