<?php 
include 'class/functions.php';
$taskObj = new Functions;

if(isset($_POST['save-task'])){
    $t_name = $_POST['task-name'];
    $t_desc = $_POST['task-desc'];
    $t_date = $_POST['date-started'];
    $t_end = $_POST['date-finished'];

    // print_r($_POST);
    $taskObj->add_task($t_name,$t_desc,$t_date,$t_end);
}elseif(isset($_POST['update_task'])){
    $t_name = $_POST['task_name'];
    $t_desc = $_POST['task_desc'];
    $t_date = $_POST['date_started'];
    $t_end = $_POST['date_finished'];
    $id = $_POST['id'];

    $taskObj->edit_task($t_name,$t_desc,$t_date,$t_end,$id);

}elseif(isset($_GET['delete_task'])){
    $id = $_GET['delete_task'];
    $taskObj->delete_task($id);
}

?>