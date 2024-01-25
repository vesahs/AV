<?php

class Contact {
    public $forma;
    public $db;
    public function __construct() {
        $this->forma = $_POST;
        $this->db = connectDb();
        $this->ruajFormen();
    }

    public function ruajFormen() {
        $query = 'INSERT INTO contact_us (';
        $index = 0;
        forEach($this->forma as $key => $value) {
            if($index < count($this->forma)-1)
                $query .= "{$key}, ";
            else {
                $query .= "{$key}) ";
            }
            $index++;
        }

        $query.= 'VALUES (';
        $index=0;
        forEach($this->forma as $value){
            if($index < count($this->forma)-1)
                $query .="'{$value}', ";
            else{
                $query .= "'{$value}') ";
            }
            $index++;
        }
        $this->db->query($query);
        header("Location: /index");
    }


}