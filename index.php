<?php
    include("./backend/conexion.php");
    $conexion = conectar();
    $query = "select * from contactos";
    $resultado = mysqli_query($conexion, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Mi Directorio-Amiguitos 👾</title>
  </head>
  <body>
    <div style="margin: 20px!important;">
        <div class="row">
            <p class="fs-1 text-center pa-0">Universidad Tecnologica de Salamanca</p>
            <p class="fs-4 text-center pa-0">Tecnologias de la informacion, Área de desarrollo de software multiplataforma</p>
            <p class="fs-4 text-center pa-0">Eduardo Zuñiga Mondragon / Estudiante</p>
            </div></div>
    <div class="row">
      <div class="col-3">
        <p class="fs-3 text-center">Contacto nuevo</p>
        <form action="./backend/insertar.php" method="post">
          <input type="text"
                name="nombre"
                placeholder="Ingesa tu nombre"
                class="form-control mb-3"
          >
          <input type="text"
                name="a-paterno"
                placeholder="Ingesa tu apellido paterno"
                class="form-control mb-3"
          >
          <input type="text"
                name="a-materno"
                placeholder="Ingesa tu apellido materno"
                class="form-control mb-3"
          >
          <input type="number"
                name="celular"
                placeholder="Ingesa tu celular"
                class="form-control mb-3"
          >
          <input type="email"
                name="correo"
                placeholder="Ingesa tu correo electronico"
                class="form-control mb-3"
          >
          <input type="text"
                name="Direccion"
                placeholder="Ingesa tu direccion"
                class="form-control mb-3"
          >
          <input type="submit"
                 value="Guardar"
                 class="btn btn-primary"
          >
        </form>
</div>
<div class="col-9">
  <p class="fs-3 text-center">directorio mi amigo</p>
  <table class="table">
    <thead class="table-success table-striped">
      <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>A-paterno</th>
                            <th>A-materno</th>
                            <th>celular</th>
                            <th>correo</th>
                            <th>direccion</th>
                            <th>acciones</th>
                            <th>  </th>
                            <th>  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($contacto = mysqli_fetch_array($resultado)) { ?>
                            <tr>
                                <td>
                                    <?php echo $contacto['ID_contacto'] ?>
                                </td>
                                <td>
                                    <?php echo $contacto['nombre'] ?>
                                </td>
                                <td>
                                    <?php echo $contacto['a-paterno'] ?>
                                </td>
                                <td>
                                    <?php echo $contacto['a-materno'] ?>
                                </td>
                                <td>
                                    <?php echo $contacto['celular'] ?>
                                </td>
                                <td>
                                    <?php echo $contacto['correo'] ?>
                                </td>
                                <th>
                                    <?php echo $contacto['Direccion'] ?>
                                </td>
                                <td>
                                <a href=""
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="Delete user">
                                        <i class="fa-solid fa-user-minus" style = "color: red;"></i>
                                    </a>
                                </td>
                                <td>
                                <a href=""
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="Edit user">
                                        <i class="fa-solid fa-user-pen" style="color: #f99A06;"></i>
                                    </a>
                                </td>
                                <td>
                                <a href=""
                                data-bs-toggle="tooltip" 
                                data-bs-placement="top" 
                                title="Create group">
                                        <i class="fa-solid fa-people-group" style="color: green;"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>