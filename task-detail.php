<?php 
include 'datafile.php';
$id = $_GET['task-id'];
$task = $taskObj->show_one_task($id);

// print_r($task);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Task Detail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="alert alert-warning alert-dismissible fade show my-5" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>A new task has been added.  <a class="alert-link float-right" href="index.php">Check all tasks Here</a></strong> 
          </div>
          
          <script>
            $(".alert").alert();
          </script>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="jumbotron p-5 text-center">
                    <h1 class="display-4">
                        <?php echo $task['task_name'] ?>
                    </h1>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Task Description: </h4>
                  <p></p>
                  <p class="mb-0"><?php echo $task['task_description'] ?></p>
                </div>

            </div>
        </div>

      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>