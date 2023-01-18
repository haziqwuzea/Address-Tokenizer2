<?php

    class Apt_Number {

        private $pattern_apt = "/no\s(\d+)/i";
        

        public function filter_apt($address) {     

            if (preg_match($this->pattern_apt, $address, $apt) == 1) {
                return $result['apt'] = $apt[0];
            }
        }        
    }

?>