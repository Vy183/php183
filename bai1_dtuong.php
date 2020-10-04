<?php
    class phep_tinh{
        public $so_thu_1, $so_thu_2;

        function phep_tinh($so_thu_1, $so_thu_2){
            $this->so_thu_1 = $so_thu_1;
            $this->so_thu_2 = $so_thu_2;
        }

        function set_num1($value){
            $this->so_thu_1 = $value;
        }

        function set_num2($value){
            $this->so_thu_2 = $value;
        }

        function num1(){
            return $this->so_thu_1;
        }

        function num2(){
            return $this->so_thu_2;
        }

        function ket_qua(){
            return $ket_qua;
        }
        
        function tinh_tong(){
            return $this->so_thu_1 + $this->so_thu_2;
        }


        function tinh_hieu(){
            return $this->so_thu_1 - $this->so_thu_2;
        }

        function tinh_tich(){
            return $this->so_thu_1 * $this->so_thu_2;
        }

        function tinh_chia(){
            return $this->so_thu_1 / $this->so_thu_2;
        }

    }
?>