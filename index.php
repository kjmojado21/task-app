<?php
include 'datafile.php';

$task_list = $taskObj->show_all_task();

?>
<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="alert alert-info" role="alert">
            <strong>TASK LISTS</strong>
            <span class="float-right">
                <a href="add-task.php">ADD NEW TASK HERE</a>
            </span>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($task_list as $row) : ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-header">
                            <?php echo $row['task_name'] ?>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                <strong><?php echo $row['task_description'] ?></strong>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="update-task.php?id=<?php echo $row['task_id'] ?>">Update Task</a>
                            <a href="datafile.php?delete_task=<?php echo $row['task_id'] ?>" class="float-right text-danger">Delete Task</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>