
<?php
    if(isset($_POST["submit"])){
        $nombre=$_POST['nombre'];
        $edad=$_POST["edad"];
        $perro=$_POST["nombreperro"];
        $colonia=$_POST["colonia"];
        $ciudad=$_POST["ciudad"];
        $delegacion=$_POST["delegacion"];
        $cp=$_POST["cp"];
        $celular=$_POST["cel"];
        $email=$_POST["email"];
        $img = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="css/inicio.css" rel="stylesheet" type="text/css">    
</head>
<body>
    <table border="0px" width="100%" height="100%">
        <div class="div1">
        </div>
        <tr class="tr1" >
            <td>
                <img src="css/logo.png" height="30px">
                <span>AdopDog</span>
            </td>
            <td>
            </td>
            <td>
            <a href="index.html"> Si deseas regresar a la página principal, da click aquí: <b> Inicio </b></a>
            </td>
        </tr>
    </table>
    <table border="0px" width="100%" height="100%">
        <tr>
            <td width="30%">
                <div class=ult1>
                    <center><h1>AdopDog agradece tu registro</h1></center>
                </div>
            </td>
            <td width="30%" align="center">
                </br>
                <img src="css/guinio.jpg" alt="" height="450px"/>
            </td>
        </tr>
    </table>
</html>