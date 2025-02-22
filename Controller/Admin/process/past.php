<?php
use App\Past;

$table = 'pq';
$table_id = 'pq_id';
$table_name = 'title';
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = Input('action');

    if($action === 'add') {
        
        $file = $_FILES['file'];
        $data = [
            $table_name => Input('title'),
            'faculty_id' => Input('faculty'),
            'department_id' => Input('department'),
            'level' => Input('level'),
        ];

        $instance = new Past();
        
        $response = $instance->add($data, $file);
        echo json_encode($response);
    } elseif($action === 'list') {

        $draw = $_POST['draw'];
        $start = $_POST['start'];
        $length = $_POST['length'];
        $searchValue = $_POST['search']['value'];

        $orderCI = $_POST['order'][0]['column'];
        $orderCD = $_POST['order'][0]['dir'];

        $db->table($table.' as p')
                ->leftJoin('faculty as f', 'p.faculty_id', '=', 'f.faculty_id')
                ->leftJoin('department as d', 'p.department_id', '=', 'd.department_id')
                ->select('p.*, f.faculty_name, d.department_name');

        // filtering

   

        //search

        if(!empty($searchValue)) {
            $db->search(['p.title', 'p.level', 'd.department_name', 'f.faculty_name'], $searchValue);
        }

        // columns
        $columns = ['p.title', 'p.level', 'd.department_name', 'f.faculty_name', 'date_created'];
        $orderColumn = $columns[$orderCI] ?? $columns[0];
        $orderDirection = isset($orderCD) ? $orderCD : 'desc';

        $db->orderBy($orderColumn, $orderDirection)->offset((int)$start)->limit((int)$length);
        $results = $db->get();

        $totalRecords = $db->table($table)->count();

        $totalFiltered = (!empty($searchValue)) ? count($results) : $totalRecords;

        $columnTitles = 0;
        $data = array();

        foreach($results as $row) {


        $action = '<button class="btn btn-warning edit m-1" title="edit" data-toggle="modal" data-target="#edit"';

        foreach($row as $field => $value) {

            if (in_array($field, ['date_created'])) {
                continue;
            }

            $action .= ' data-'.$field.'="'.htmlspecialchars($value, ENT_QUOTES, 'UTF-8').'"';
        }

        $action .= '> <i class="fa fa-edit" aria-hidden="true"></i>
                 </button>
                 <button class="btn btn-danger delete m-1" title="delete" data-id="'.$row[$table_id].'">
                   <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>';

        
          
            $rowData = [
                $row[$table_name],
                $row['faculty_name'],
                $row['department_name'],
                $row['level'],
                $action,
                date('D m Y', strtotime($row['date_created']))

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
    } elseif($action === 'SettingStatus') {

        $status = Input('status');
        $s = 0;
        $ids = $_POST['id'];
        
        if($status == 'delete') {
            
            try {
                $item = $db->table($table)->where($table_id, $ids)->first();

                $db->table($table)->where($table_id, $ids)->delete();
                $m = "Successfully Deleted";
                $s = 1;
            }  catch(PDOException $e) {
                $m = "Error Occure :".$e->getMessage();
            }
        } if($status === 'deleteAll') {

            $total = 0;
            $error = [];
            foreach($ids as $id) {
                try {
                    $item = $db->table($table)->where($table_id, $id)->first();
                    $db->table($table)->where($table_id, $id)->delete();
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


        unset($_POST['action']);
        $id = Input('pq_id');
        $data = $_POST;

        $instance =  new Past();
        
        $response = $instance->edit($data, $id);

        echo json_encode($response); 

    } else if($action === 'getdepartmentbyfacultyid') {

        $data = $db->table('department')->where('faculty_id', Input('id'))->get();
        $html = "";

        if(Input('newid')) {
            $datas = $db->table('department')->where('department_id', Input('newid'))->first();
            $html .= '<option value="'.$datas['department_id'].'" selected>'.$datas['department_name'].'</option>';
        }

        if($data) {
            foreach($data as $row) {
                $html .= '<option value="'.$row['department_id'].'">'.$row['department_name'].'</option>';
            }
        } else {

            $html .= '<option value="">No data available</option>';
        }



        echo $html;
    } else if($action === 'getFaculty') {

        $faculties = $db->table('faculty')->orderBy('faculty_id')->get();

        $html = "";

        foreach($faculties as $item) {

            if($item['faculty_id'] == Input('id')) {    

             $html=  "<option value='{$item['faculty_id']}' selected> {$item['faculty_name']} </option> ";
            } else {
                $html .= "<option value='{$item['faculty_id']}'> {$item['faculty_name']} </option> ";
            }
        }

        echo $html;
    }
}