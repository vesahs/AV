<?php 



class Regjistrohu {

    public $db;
    public $useri;
    public function __construct() {
        if($_POST) {
            $this->useri = $_POST;
            $this->db = connectDb();
            $this->regjistrohu();
        }
    }

    function regjistrohu() {
        $query = 'INSERT INTO users (';

        $index = 0;
        forEach($this->useri as $key => $value) {
            if($index < count($this->useri)-1)
                $query .= "{$key}, ";
            else {
                $query .= "{$key}) ";
            }
            $index++;
        }

        $query.= 'VALUES (';
        $index=0;
        forEach($this->useri as $value){
            if($index < count($this->useri)-1)
                $query .="'{$value}', ";
            else{
                $query .= "'{$value}') ";
            }
            $index++;
        }
        $test = $this->db->query($query);
    }

}

$regjistrohu = new Regjistrohu();

require './views/regjistrohu.php';