<?php
use App\Department;

$table = 'department';
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = Input('action');

    if($action === 'add') {
        
       
        $data = [
            'department_name' => Input('name'),
            'faculty_id' => Input('faculty'),
        ];

        $instance = new Department();
        
        $response = $instance->add($data);
        echo json_encode($response);
    } else if($action === 'list') {

        $draw = $_POST['draw'];
        $start = $_POST['start'];
        $length = $_POST['length'];
        $searchValue = $_POST['search']['value'];

        $orderCI = $_POST['order'][0]['column'];
        $orderCD = $_POST['order'][0]['dir'];

        $db->table($table.' as d')
            ->leftJoin('faculty as f', 'd.faculty_id', '=', 'f.faculty_id')
            ->select('d.*, f.faculty_name');

        // filtering

   

        //search

        if(!empty($searchValue)) {
            $db->search(['d.department_name'], $searchValue);
        }

        // columns
        $columns = ['d.department_id', 'd.department_name', 'd.date_created'];
        $orderColumn = $columns[$orderCI] ?? $columns[0];
        $orderDirection = isset($orderCD) ? $orderCD : 'desc';

        $db->orderBy($orderColumn, $orderDirection)->offset((int)$start)->limit((int)$length);
        $results = $db->get();

        $totalRecords = $db->table($table)->count();

        $totalFiltered = (!empty($searchValue)) ? count($results) : $totalRecords;

        $columnTitles = 0;
        $data = array();

        foreach($results as $row) {

          $action = '<button class="btn btn-warning edit" title="edit" data-toggle="modal" data-target="#edit" data-faculty="'.$row['faculty_id'].'" data-id="'.$row['department_id'].'" data-name="'.$row['department_name'].'"> <i class="fa fa-edit" aria-hidden="true"></i>
                 </button>
                 <button class="btn btn-danger delete" title="delete" data-id="'.$row['department_id'].'">
                   <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>';

          
            $rowData = [
                $row['department_id'],
                $row['department_name'],
                $row['faculty_name'],
                $action,
                date('D m Y', strtotime($row['date_created'])),

            ];

            $rowData = array_combine(range(0, count($rowData) -1), array_values($rowData));
            $data[] = $rowData;
        }

        $response = [
            'draw' => (int)$draw,
            'recordsTotal' => (int)$totalRecords,
            'recordsFiltered' => (int)$totalFiltered,
            'columns' => $columnTitles,
            'data' => $data

        ];

        echo json_encode($response);
    } else if($action === 'SettingStatus') {

        $status = Input('status');
        $s = 0;
        $ids = $_POST['id'];
        
        if($status == 'delete') {
            
            try {
                $item = $db->table($table)->where('department_id', $ids)->first();

                $db->table($table)->where('department_id', $ids)->delete();
                $m = "Successfully Deleted";
                $s = 1;
            }  catch(PDOException $e) {
                $m = "Error Occure :".$e->getMessage();
            }
        } else if($status === 'deleteAll') {

            $total = 0;
            $error = [];
            foreach($ids as $id) {
                try {
                    $item = $db->table($table)->where('department_id', $id)->first();
                    $db->table($table)->where('department_id', $id)->delete();
                    $total++;
                } catch(PDOException $e) {
                    $error[] = "Unable to delete item with ID $id ".$e->getMessage();
                }
            }

            if(count($error) > 0) {
                $m = $error[0];
            } else {
                $s = 1;
                $m = "$total Item successfully Deleted";
            }
        }

        $response = json_encode(['s' => $s, 'm' => $m]);
        echo $response;
    } else if($action === 'edit') {

        $data = [
            'department_name' => Input('name'),
            'faculty_id' => Input('faculty'),
        ];

        $id = Input('id');

        $instance = new Department();
        
        $response = $instance->edit($data, $id);
        echo json_encode($response); 
    } else if($action === 'getDepartmentFaculty') {

        $id = Input('id');
        $faculty = $db->raw("SELECT * FROM faculty ORDER BY CASE WHEN faculty_id = $id THEN 0 ELSE 1 END, faculty_id")->get();


        $html = "";
        foreach ($faculty as $row) 
        {
            $html .= '<option value="'.$row['faculty_id'].'">'.$row['faculty_name'].'</option>';
        }
        echo $html;

    }
}