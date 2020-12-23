<?php
    class Gallery{
        public $product_id;
        public $product_category;
        public $product_type;
        public $product_image;
        public $product_title;
    
        function set_product_id($product_id){
            $this->product_id = $product_id;
        }
        function get_product_id(){
            return $this->product_id;
        }

        function set_product_category($product_category){
            $this->product_category = $product_category;
        }
        function get_product_category(){
            return $this->product_category;
        }

        function set_product_type($product_type){
            $this->product_type = $product_type;
        }
        function get_product_type(){
            return $this->product_type;
        }

        function set_product_image($product_image){
            $this->product_image = $product_image;
        }
        function get_product_image(){
            return $this->product_image;
        }

        function set_product_title($product_title){
            $this->product_title = $product_title;
        }
        function get_product_title(){
            return $this->product_title;
        }
    }
?>