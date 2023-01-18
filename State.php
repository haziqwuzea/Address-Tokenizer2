<?php

class State {

    private $state_array = array("Selangor", "Terengganu", "Pahang", "Kelantan", "Melaka", "Pulau Pinang", "Kedah", "Johor", "Perlis", "Sabah", "Sarawak");

    public function filter_state($address) {     

        foreach ($this->state_array as $state_name) {
            $pattern_state = "/" . $state_name . "/i";
            if (preg_match($pattern_state, $address, $state) == 1) {
                return $result['state'] = $state[0];
            }
        }
    } 

}

?>