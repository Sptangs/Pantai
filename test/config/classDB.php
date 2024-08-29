<?php
    class Koneksi{
        public $db;

        function __construct()
        {
            try{
                $this->db = new PDO('mysql:host=localhost;dbname=tblpantai', "root", "");
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function select($t, $f="*"){
            $sel = $this->db->prepare("select $f from $t");
            $sel->execute();
            $data = $sel->fetchAll();
            return $data;
        }
        function insert($t, $val){
            $ins = $this->db->prepare("insert into $t values($val)");
            $ins->execute();
            return $ins;
        }
        function query($q){
            $query = $this->db->prepare($q);
            $query->execute();
            return $query;
        }
    }
    $dbo = new Koneksi();
?>