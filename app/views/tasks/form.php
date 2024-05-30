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
                    <form class="form-horizontal">
                      <fieldset>

                        <legend>Crear tarea</legend>

                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="task_id">ID</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="task_id" type="number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_name">Nombre</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="task_name" type="string" placeholder="Escribe el nombre de tu tarea...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_descrip">Descripción</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="task_descrip" type="string" placeholder="Escribe una descripción...">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="task_status">Estado</label>
                          <div class="col-lg-10">
                            <input class="form-control" id="task_status" type="string" placeholder="Escribe el nombre de tu tarea...">
                            </div>
                        </div>





                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default" type="reset">Cancel</button>
                            <button class="btn btn-primary" type="submit">Submit</button>
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
