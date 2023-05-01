<?php include("../../templates/header.php"); ?>
  <br/>

<h4> Empleados</h4>

<div class="card">
    <div class="card-header">

        <a name="" id="" class="btn btn-primary" href="crear.php" 
        role="button">Crear </a>

    </div>

    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Pusto</th>
                        <th scope="col">Fecha de inicio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Daniel R</td>
                        <td>imagen.jpg</td>
                        <td>CV.PDF</td>
                        <td>Programador Jr.</td>
                        <td>20/10/2022</td>
                        <td><a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        

    </div>
    
</div>


<?php include("../../templates/footer.php"); ?>
