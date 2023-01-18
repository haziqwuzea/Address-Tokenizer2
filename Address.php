<?php
    include('Apt_Number.php');
    include('Postcode.php');
    include('City.php');
    include('State.php');
    include('Street.php');
    include('Section.php');

    class Address {

        private $result = array();

        function filter($input) {
            
            $apt_num = new Apt_Number();
            $postcode = new Postcode();
            $city = new City();
            $state = new State();
            $street = new Street();
            $section = new Section();

            $this->result['apt'] = $apt_num->filter_apt($input);            
            $this->result['postcode'] = $postcode->filter_postcode($input);            
            $this->result['city'] = $city->filter_city($input);            
            $this->result['state'] = $state->filter_state($input);            
            $this->result['street'] = $street->filter_street($input);            
            $this->result['section'] = $section->filter_section($input, $this->result);

            print_r($this->result);
        }
    }

    $input = readline();
    $run = new Address();
    $run->filter($input);
?>