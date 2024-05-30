<?php
// Get the current date in 'YYYY-MM-DD' format
$currentDate = date('Y-m-d');
?>

<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Tareas</h1>
            <p>Rellena los campos para guardar una tarea nueva:</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="#">Form Components</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-6">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" action="?c=task&a=createTask">
                      <fieldset>

                        <legend>Crear tarea</legend>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="task_id">ID</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="task_id" type="hidden">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_name">Nombre</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="task_name" type="text" placeholder="Escribe el nombre de tu tarea...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_descrip">Descripción</label>
                          <div class="col-lg-10">
                            <input required class="form-control" name="task_descrip" type="text" placeholder="Escribe una descripción...">
                            </div>
                        </div>

                        <!--NOT NEEDED NOW
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="task_status">Estado</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="task_status">
                              <option>Activa</option>
                              <option>Completada</option>
                              <option>Eliminada</option>
                              <option>Pospuesta</option>
                            </select>
                          </div>
                        </div> -->

                        <!--
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_created_at">Fecha de creación</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="task_created_at" type="Date" placeholder="">
                            </div>
                        </div> -->

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="user_id">ID de usuario</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="user_id" type="number" placeholder="ID">
                            </div>
                        </div>

                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancelar</button>
                            <button class="btn btn-primary" type="submit">Añadir</button>
                          </div>
                        </div>

                      </fieldset>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
