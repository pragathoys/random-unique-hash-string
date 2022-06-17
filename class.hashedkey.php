<?php
class Hashedkey{

        protected int $size;

        function __construct($size = 8){
                $this->size = $size;
        }

        public function get_hashed_key(){
                $bytes = random_bytes( $this->size );
                $result = bin2hex($bytes);
                $formated = substr($result,0,4) . "-" . substr($result,4,4) . "-" . substr($result,8,4). "-" . substr($result,12,4);  
                return strtoupper( $formated );
        }
}
