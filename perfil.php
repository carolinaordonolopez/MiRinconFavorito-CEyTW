<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MiRinconFavorito</title>
    <!--CSS BOOTSTRAP-->
    <link rel="styleheet" href="css/bootstrap.css">
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    
    <?php require 'estaticos/nav.php' ;?>

    <br><br><br>
    
    <?php require 'estaticos/jumbotron.php' ;?>

    <script>
        function detailspedido() {
            window.location.assign("pedido.php");
        }
    </script>


    <h3 class="text-left"><b>Mi perfil</b> </h3>
    <hr />
    <div class="container">
        <div class="row">
            <b>Nombre:</b>&nbsp;
            <!-- <p>{{user.name}}</p> -->
        </div>
        <div class="row">
            <b>Apellidos:</b>&nbsp;
            <!-- <p>{{user.surname}}</p> -->
        </div>
        <div class="row">
            <b>Fecha de nacimiento:</b>&nbsp;
            <!-- <p>{{formatDate user.birth}}</p> -->
        </div>
        <div class="row">
            <b>Dirección postal:</b>&nbsp;
            <!-- <p>{{user.address}}</p> -->
        </div>
        <div class="row">
            <b>Email:</b>&nbsp;
            <!-- <p>{{user.email}}</p> -->
        </div>
    </div>

    <hr />
    <br>
    <h3 class="text-left"> <b>Lista de pedidos:</b> </h3>


    <table id="orderstable" class="table">
        <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Número</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> <button class="btn btn-info" onClick="detailspedido()" style="float: right">Details</button></td>
                <!-- {{#each user.userOrders}}
                    {{> order-partial this details_onclick='Controller.controllers.profile.details_clicked'}}
                    
                {{/each}} -->
        </tbody>
    </table>

    <br><br>
    
    <?php require 'estaticos/footer.php' ;?>

    
</body>

</html>