<?php
    class NilaiMahasiswa{
        var $matakuliah;
        var $nilai;
        var $nim;

        function __construct($matkul, $nilai, $nim)
        {
            $this->matakuliah = $matkul;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function grade()
        {
            if($this->nilai >= 0 && $this->nilai <= 35){
                return "E";
            }else if($this->nilai > 35 && $this->nilai <= 55){
                return "D";
            }else if($this->nilai > 55 && $this->nilai <= 69){
                return "C";
            }else if($this->nilai > 69 && $this->nilai <= 84){
                return "B";
            }else if($this->nilai > 84 && $this->nilai <= 100){
                return "A";
            }else{
                return "";
            }
        }

        function hasil()
        {
            if($this->nilai < 56){
                return "TIDAK LULUS";
            }else if($this->nilai >= 56){
                return "LULUS";
            }else{
                return "";
            }
        }
    }
?>