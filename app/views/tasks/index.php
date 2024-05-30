<div class="content-wrapper">
<div class="page-title">
  <div>
    <h1>Data Table</h1>
    <ul class="breadcrumb side">
      <li><i class="fa fa-home fa-lg"></i></li>
      <li>Tables</li>
      <li class="active"><a href="#">Data Table</a></li>
    </ul>
  </div>
  <div><a class="btn btn-primary btn-flat" href="#"><i class="fa fa-lg fa-plus"></i></a><a class="btn btn-info btn-flat" href="#"><i class="fa fa-lg fa-refresh"></i></a><a class="btn btn-warning btn-flat" href="#"><i class="fa fa-lg fa-trash"></i></a></div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <table class="table table-hover table-bordered" id="sampleTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Estado</th>
              <th>Fecha creación</th>
              <th>Fecha actualización</th>
              <th>ID de Usuario</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>

          <?php
            if (!isset($tasks)) {
                echo "<tr><td colspan='7'>Tasks not available</td></tr>";
                exit;
            }

//Listar las tareas
              foreach ($tasks as $task) {
                echo "<tr>";
                echo "<td>{$task->id}</td>";
                echo "<td>{$task->name}</td>";
                echo "<td>{$task->descrip}</td>";
                echo "<td>{$task->status}</td>";
                echo "<td>{$task->created}</td>";
                echo "<td>{$task->updated}</td>";
                echo "<td>{$task->user_id}</td>";
                echo "<td>Editar | Eliminar</td>";
                echo "</tr>";
            }
            

            ?>

          

        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>