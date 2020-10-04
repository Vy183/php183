<?php
    class phep_tinh{
        public $so_thu_1, $so_thu_2;

        function phep_tinh($so_thu_1, $so_thu_2){
            $this->so_thu_1 = $so_thu_1;
            $this->so_thu_2 = $so_thu_2;
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