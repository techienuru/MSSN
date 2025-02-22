<?php

namespace App;

use PDOException;

class Past {

    protected $table = 'pq';
    protected $id = 'pq_id';


    public function add($data, $file) {

        global $db;

        $s =  0;

        if(empty($data['title']) || empty($data['level']) || empty($data['faculty_id']) || empty($data['department_id'])) {
            $m = " All fields are required";
        }else if(empty($file['name'])) {
            $m = "Pls choose the Document";
        } else if(!checkExt($file['name'])) {
            $m = "Unsupported file, only PDF, DOC, DOCX and PPT format are acceptable";
        } else {

            $filename = Upload($this->table, $file);

            if(!$filename) {
                $m = "File uploading fail";
            }  else {

                $data['file'] = $filename;
                try {

                    $db->table($this->table)->insert($data);
                    $s  = 1;
                    $m = "Successfully uploaded";
                } catch(PDOException $e) {

                    $m = "Error: ".$e->getMessage();
                }
            }
        }

        

        return ['m' => $m, 's' => $s];

    }


    public function edit($data, $id)
    {
        
        $s = 0;

        if(empty($data['title'] || $data['faculty_id'] || $data['department_id'])) {
            $m = "All fields are required";
        } else {

            $item = db()->table($this->table)->where($this->id, $id)->first();

            if($item) {
                try {
                    db()->table($this->table)->where($this->id, $id)->update($data);
                    $s = 1;
                    $m = ucfirst($this->table)." Updated Successfully";
                } catch(PDOException $e) {
                    $m = "Error: ".$e->getMessage();
                }
            } else {
    
                $m = "Item not found";
            }

        }



        return ['m' => $m, 's' => $s];
    }
}