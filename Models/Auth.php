<?php

namespace App;

class Auth {

    public $table = 'admin';

    public function Login($email, $password, $db)
    {
        $s = 0;
        $user = $db->table($this->table)->where('email', $email)->where('is_active', 1)->first();

        if($user) {
            if(!password_verify($password, $user['password'])) {
                $m = "Invalid Password";
            } else {
                $_SESSION['AdminID'] = $user['admin_id'];
                $_SESSION['AdminName'] = $user['email'];
                $m = "Successfully Login";
                $s =1;
            }
        } else {
            $m = "Invalid Admin or Inactive";
        }

        return ['s' => $s, 'm' => $m];
    }

    public function isLogin() {

        if(isset($_SESSION['AdminID']) && isset($_SESSION['AdminName'])) {
            global $db;

            $user = $db->table($this->table)->where('id', $_SESSION['AdminID'])->first();

            if($user) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function edit($data) 
    {
        global $db;
        $status = 0;

        if(empty($data['username']) || empty($data['first_name']) || empty($data['last_name'])) {
            $message = "username, first name and last name cannot be blank";
        } else {

            $id = $_SESSION['AdminID'];

            try {
                $db->table($this->table)->where('id', $id)->update($data);
                $status = 1;
                $message = "Admin detail updated successfully";
            } catch(\PDOException $e) {
                $message = 'Error: '.$e->getMessage();
            }
        }

        return ['m' => $message, 's' => $status];
    }

    // public function changePassword($data)
    // {
    //     global $db;
    //     $status = 0;

    //     $id = $_SESSION['AdminID'];
    //     $admin = (new \App\General)->getRow($this->table, 'id', $id);

    //     if(empty($data['oldpassword']) || empty($data['newpassword']) || empty($data['confirmpassword'])) {
    //         $message = " All fields are required";
    //     } else {
    //         if(!password_verify($data['oldpassword'], $admin['password'])) {
    //             $message = "Invalid old password";
    //         } else if($data['newpassword'] !== $data['confirmpassword']) {
    //             $message = "new and confirm password does not match";
    //         } else {

    //             try {
    //                 $passwordN = password_hash($data['newpassword'], PASSWORD_DEFAULT);
    //                 $db->table($this->table)->where('id', $id)->update(['password' => $passwordN]);
    //                 $message = "Password change successfully";
    //                 $status = 1;
    //             } catch(\PDOException $e) {
    //                 $message = "Error: ".$e->getMessage();
    //             }
    //         }
    //     }

    //     return [
    //         'm' => $message,
    //         's' => $status,
    //     ];
    // }

    public function logout()
    {
        unset($_SESSION['AdminID']);
        unset($_SESSION['AdminName']);
        session_destroy();
    }
}