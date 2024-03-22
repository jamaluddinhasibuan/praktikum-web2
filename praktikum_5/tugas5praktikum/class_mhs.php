<?php
    class NilaiMahasiswa {
        var $nim, $mk, $nilai;

       //  $mahasiswa1 = ($nim, $mk, $nilai);


        function __construct($nim, $mk, $nilai) {
            $this->nim = $nim;
            $this->mk = $mk;
            $this->nilai = $nilai;
        }

        public function grade_nilai() {
            if($this->nilai >= 0 && $this->nilai <= 35) {
                return "E";
            } elseif($this->nilai >= 36 && $this->nilai <= 55) {
                return "D";
            } elseif($this->nilai >= 56 && $this->nilai <= 69) {
                return "C";
            } elseif($this->nilai >= 70 && $this->nilai <= 84) {
                return "B";
            } elseif($this->nilai >= 85 && $this->nilai <= 100) {
                return "A";
            } else {
                return "Luar Biasa";
            }
        }

        public function hasil() {
            if ($this->nilai >= 0 && $this->nilai <= 55) {
                return "Tidak Lulus";
            } elseif ($this->nilai >= 56 && $this->nilai <= 100) {
                return "Lulus";
            } else {
                return "Tidak Diketahui";
            }
        }


    }