<?php

namespace App;

use PDOException;

class Session {

    protected $table = 'session';

    public function add($data)
    {
        global $db;

        $s = 0;

        try {

            $db->table($this->table)->insert($data);

            $s = 1;
            $m = "Session Added Successfully";
        } catch(PDOException $e) {
            $m = "Error: ".$e->getMessage();
        }
        return ['m' => $m, 's' => $s];

    }


    public function edit($data, $id)
    {
        global $db;
        $s = 0;

        $item = $db->table($this->table)->where('session_id', $id)->first();

        if($item) {
            try {
                $db->table($this->table)->where('session_id', $id)->update($data);
                $s = 1;
                $m = "Session Updated Successfully";
            } catch(PDOException $e) {
                $m = "Error: ".$e->getMessage();
            }
        } else {

            $m = "Item not found";
        }

        return ['m' => $m, 's' => $s];
    }
}