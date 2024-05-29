<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>A free and modular admin template</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Cantidad tareas</h3>
              <p><?php
              if (!isset($tasks)) {
                echo "Tasks not available";
                exit;
            }

              // Display tasks and count the number of tasks
              $taskCount = 0;

              foreach ($tasks as $task) {
                echo "<div>{$task->name}</div>"; // Adjust based on the structure of your task data
                $taskCount++;
            }
            
            // Display the number of tasks
            echo "<div>Total tasks: {$taskCount}</div>";

            ?>
            </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Compatibility with frameworks</h3>
            </div>
          </div>
        </div>
      </div>
    </div>