<?php 

require_once "connection.php";

class Apotekku{

    public function get_user($email){
        global $mysql;
        $query = "SELECT * FROM user WHERE email = $email";
        if (strlen($email) == 0) {
            return false;
        }
        $data = array();
        $result = $mysql->query($query);
        if ($result) {
            while ($row = $result->fetch_object()) {
                $data[]=$row;
            }
            $response = array(
                'status' => 200,
                'message' => "Get user successfully",
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 404,
                'message' => "User $email not found",
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function get_daftar_obat()
    {
        global $mysql;
        $query = "SELECT * FROM obat";
        $data = array();
        $result = $mysql->query($query);
        if ($result) {
            while ($row = $result->fetch_object()) {
                $data[]=$row;
            }
            $response = array(
                'status' => 200,
                'message' => "Get obat successfully",
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 404,
                'message' => "Kesalahan",
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

}


?>