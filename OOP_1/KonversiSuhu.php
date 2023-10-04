<?php 
class KonversiSuhu{
    private $satuanSuhuAwal;
    private $besaranSuhu;
    private $satuanSuhuTujuan;

    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }
    public function konversi(){
        if($this->satuanSuhuAwal == "Celsius"){
            if ($this->satuanSuhuTujuan == "Fahrenheit"){
                return($this->besaranSuhu * 9/5) + 32;
            }else if ($this->satuanSuhuTujuan == "Reaumur"){
                return($this->besaranSuhu * 4/5);
            }else if($this->satuanSuhuTujuan == "Celcius"){
                return $this->besaranSuhu;
            }else{
                return "Satuan tujuan tidak valid";
            }
        
        }else if($this->satuanSuhuAwal == "Fahrenheit"){
            if($this->satuanSuhuTujuan == "Celsius"){
                return($this->besaranSuhu - 32) * 5/9;
            }else if ($this->satuanSuhuTujuan == "Reaumur"){
                return ($this->besaranSuhu - 32) * 5/9 *4/5;
            }else if ($this->besaranSuhuTujuan == "Fahrenheit"){
                return $this->besaranSuhu;
            }else{
                return "Satuan tujuan tidak valid";
        }

        }elseif ($this->satuanSuhuAwal == "Celsius") {
            if ($this->satuanSuhuTujuan == "Réaumur") {
                return $this->besaranSuhu * 4/5;  
            } elseif ($this->satuanSuhuTujuan == "Fahrenheit") {
                return $this->besaranSuhu * 9/5 + 32; 
            } elseif ($this->satuanSuhuTujuan == "Celsius") {
                return $this->besaranSuhu;  
            } else {
                return "Satuan tujuan tidak valid";
        }

        }else if ($this->satuanSuhuAwal == "Reaumur"){
            if($this->satuanSuhuTujuan == "Celsius"){
                return $this->besaranSuhu * 5/4;
            }else if ($this->satuansuhuTujuan == "Fahrenheit"){
                return $this->besaranSuhu * 9/4 + 32;
            }else if ($this->satuanSuhuTujuan == "Reaumur"){
                return $this->besaranSuhu;
            }else{
                return "Satuan tujuan tidak valid";
            }

        }else {
            return "Satuan tujuan tidak valid";
        }
    }
    public function cetak(){
        echo '<h1 align="center">Konversi Suhu</h1>';
        echo '<table border="1">';
        echo '<tr><th>Satuan suhu awal</th><th>Besaran Suhu</th><th>Satuan suhu tujuan</th><th>Hasil konversi</th></tr>';
        echo '<tr>';
        echo '<td>' . $this->satuanSuhuAwal . '</td>';
        echo '<td>' . $this->besaranSuhu . '</td>';
        echo '<td>' . $this->satuanSuhuTujuan . '</td>';
        echo '<td>' . $this->konversi() . '</td>';
        echo '</tr>';
        echo '</table>';
    }
}

?>