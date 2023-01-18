<?php

    class Postcode {

        private $pattern_postcode    = "/(\d+){4}/";

        public function filter_postcode($address) {    

            if (preg_match($this->pattern_postcode, $address, $postcode) == 1) {

                if ($postcode[0] >= 1000 && $postcode[0] <= 98859) {
                    return $result['postcode'] = $postcode[0];
                } else {
                    return $result['postcode'] = $address;
                }
            }
        } 

    }
