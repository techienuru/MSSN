<?php
use App\Blog;
use App\Faculty;

$table = 'blog';
$table_id = 'blog_id';
$table_name = 'blog_title';
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $action = Input('action');

    if($action === 'add') {
        
        $image = $_FILES['image'];
        $data = [
            $table_name => Input('title'),
            'blog_content' => Input('content'),
            'blog_teaser' => Input('teaser'),
            'blog_date' => Input('date'),
            'blog_time' => Input('time'),
        ];

        $instance = new Blog();
        
        $response = $instance->add($data, $image);
        echo json_encode($response);
    } elseif($action === 'list') {

        $draw = $_POST['draw'];
        $start = $_POST['start'];
        $length = $_POST['length'];
        $searchValue = $_POST['search']['value'];

        $orderCI = $_POST['order'][0]['column'];
        $orderCD = $_POST['order'][0]['dir'];

        $db->table($table);

        // filtering

   

        //search

        if(!empty($searchValue)) {
            $db->search([$table_name], $searchValue);
        }

        // columns
        $columns = [$table_id, $table_name, 'date_created'];
        $orderColumn = $columns[$orderCI] ?? $columns[0];
        $orderDirection = isset($orderCD) ? $orderCD : 'desc';

        $db->orderBy($orderColumn, $orderDirection)->offset((int)$start)->limit((int)$length);
        $results = $db->get();

        $totalRecords = $db->table($table)->count();

        $totalFiltered = (!empty($searchValue)) ? count($results) : $totalRecords;

        $columnTitles = 0;
        $data = array();

        foreach($results as $row) {


        $action = '<button class="btn btn-warning edit" title="edit" data-toggle="modal" data-target="#edit"';

        foreach($row as $field => $value) {

            if (in_array($field, ['date_created'])) {
                continue;
            }

            $action .= ' data-'.$field.'="'.htmlspecialchars($value, ENT_QUOTES, 'UTF-8').'"';
        }

        $action .= '> <i class="fa fa-edit" aria-hidden="true"></i>
                 </button>
                 <button class="btn btn-danger delete" title="delete" data-id="'.$row[$table_id].'">
                   <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>';

        $image = '<img src='.PUBLIC_URL.'/thumb/'.$row['blog_image'].' width="60px" height="60px"/>';
        
          
            $rowData = [
                $image,
                $row[$table_name],
                date('D m Y', strtotime($row['blog_date'])),
                date('H:i:s', strtotime($row['blog_time'])),
                $action,

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
        $id = Input('blog_id');
        $data = $_POST;

        $instance =  new Blog();
        
        $response = $instance->edit($data, $id);

        echo json_encode($response); 
    }
}