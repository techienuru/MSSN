<?php

namespace App;

use PDOException;

class Blog {

    protected $table = 'blog';
    protected $id = 'blog_id';


    public function add($data, $image) {

        global $db;

        $s =  0;

            $filename = '';
            if($image['name']) {

                $filename = UploadImage($this->table, $image);

                if($filename === false) {
                    $error = "Image Upload fail";
                }
            }

            if(isset($error)) {
                $m = $error;
            } else {
                
                $data['blog_image'] = $filename;

                try {
                    $db->table($this->table)->insert($data);
                    $s = 1;
                    $m = ucfirst($this->table)." Added Successfully";
                } catch(PDOException $e) {
                    $m = "Error Occur: ".$e->getMessage();
                }
            }

        

        return ['m' => $m, 's' => $s];

    }


    public function edit($data, $id)
    {
        
        $s = 0;

        if(empty($data['blog_title'] || $data['blog_content'])) {
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