<?php

    class City {

        private $city_array	= array("Kuala Terengganu", "Kuala Lumpur", "Kajang", "Bangi", "Damansara", "Petaling Jaya", "Puchong", "Subang Jaya", "Cyberjaya", "Putrajaya", "Mantin", "Kuching", "Seremban");

        public function filter_city($address) {     

            foreach ($this->city_array as $city_name) {
                $pattern_city = "/" . $city_name . "/i";
                if (preg_match($pattern_city, $address, $city) == 1) {
                    return $result['city'] = $city[0];
                }
            }
        } 

    }
?>
