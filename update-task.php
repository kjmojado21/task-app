<?php 
include 'datafile.php';
$task_data = $taskObj->show_one_task($_GET['id']);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 p-3">
        <div class="alert alert-warning" role="alert">
            <strong>UPDATE EXISITING TASK DATA HERE</strong>
            <span class="float-right">
                <a href="index.php">SEE ALL TASKS HERE</a>
            </span>
        </div>
        <form action="datafile.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" placeholder="<?php echo $task_data['task_name'] ?>" name="task_name" id="" class="form-control">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="task_desc" placeholder="<?php echo $task_data['task_description'] ?>" id="" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-6">
                    <input type="date" value="<?php echo $task_data['task_started'] ?>" name="date_started" id="" class="form-control">
                </div>
                <div class="col-lg-6">
                    <input type="date" name="date_finished" value="<?php echo $task_data['task_finished'] ?>" id="" class="form-control">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    <button type="submit" name="update_task" class="btn btn-outline-secondary btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>