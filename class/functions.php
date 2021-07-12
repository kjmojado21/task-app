<?php 
include 'config.php';

class Functions extends config{
    public function add_task($task_name,$task_desc,$started,$finished){
       $sql = " INSERT INTO tasks(task_name, task_description, task_started, task_finished) VALUES ('$task_name','$task_desc','$started','$finished')";
       $result = $this->conn->query($sql); 
       $id = $this->conn->insert_id;

    //    if($result == FALSE){
    //     die('ERROR: '.$this->conn->error);
    //    }

       if(!empty($id)){
           header(
               'location:task-detail.php?task-id='.$id
           );
       }
       
    }
    public function edit_task($task_name,$task_desc,$started,$finished,$id){
        $sql = "UPDATE tasks SET task_name='$task_name',task_description='$task_desc',task_started='$started',task_finished='$finished' WHERE task_id = '$id'";
        $result = $this->conn->query($sql);
        

        if($result == TRUE){
            header('location:index.php');
        }

    }
    public function show_one_task($id){
        $sql = "SELECT * FROM tasks WHERE task_id = '$id'";
        return $this->conn->query($sql)->fetch_assoc();

    }

    public function show_all_task(){
        $sql = "SELECT * FROM tasks";
        $result = $this->conn->query($sql);

        $row = array();
        while($rows = $result->fetch_assoc() ){
            $row[] = $rows;
        }
        return $row;
    }
    public function delete_task($id){
        $sql = "DELETE FROM tasks WHERE task_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:index.php');
        }
        
    }
}

?>