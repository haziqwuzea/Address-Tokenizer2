<?php

class Street {

    private $pattern_street  	= "/jalan|jln|lorong|persiaran/i";

    public function filter_street($address) {     

        if (preg_match($this->pattern_street, $address, $street) == 1) {

            $pos_street = strpos($address, $street[0]);
            $str_street = substr($address, $pos_street);
            $str_street = explode(",", $str_street)[0];
            return $result['street'] = $str_street;
        }
    } 

}

?>