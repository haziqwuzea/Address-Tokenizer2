<?php

class Section {

    private $pattern_nosymbol = "/[^a-zA-Z0-9_-]/s";

    public function filter_section($address, $result) {  
        
        $address = str_replace($result, '', $address);

        $section = preg_replace($this->pattern_nosymbol, '', $address);
        if($section != null) {
            return $result['section'] = $section;
        }
    } 

}
