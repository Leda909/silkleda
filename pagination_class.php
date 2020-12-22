<?php
    class Pagination {
        public $images;
        public $sum_page;
        public $current_page;


        function set_images($images){
            $this->images = $images;
        }

        function get_images(){
            return $this->images;
        }

        function set_sum_page($sum_page){
            $this->sum_page = $sum_page;
        }

        function get_sum_page(){
            return $this->sum_page;
        }

        function set_current_page($current_page){
            $this->current_page = $current_page;
        }

        function get_current_page(){
            return $this->current_page;
        }


    }
?>