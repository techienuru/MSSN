<?php

namespace App;

use PDOException;

class Exco {

    protected $table = 'excos';
    protected $id = 'exco_id';


    public function add($data, $image) {

        global $db;

        $s =  0;

       

        if(empty($data['name'])) {
            $m = " All fields are required";
        }else if(empty($image['name'])) {
            $m = "Pls choose the Document";
        } else if(!checkExt($image['name'])) {
            $m = "Unsupported file, only PDF, DOC, DOCX and PPT format are acceptable";
        } else {

            $imagename = Upload("images/".$this->table, $image);

            if(!$imagename) {
                $m = "File uploading fail";
            }  else {

                $data['image'] = $imagename;
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

        if(empty($data['title'])) {
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