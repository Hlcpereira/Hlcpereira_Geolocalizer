<?php
/*
 * Copyright (C) 2021 Henrique Lima da Costa Pereira
 *
 * SPDX-License-Identifier: Apache-2.0
 */

class Hlcpereira_Geolocalizer_Model_Source_Config_Preferences
{
    protected $_array;
    public function toOptionArray(){
        $dummyArray = [
            [
                'value' => 'dummy',
                'label' => 'Dummy'
            ],
        ]; #TO-DO: Nuke me
        $options = Mage::getSingleton("geolocalizer/source_config_options")->getOptions();
        foreach ($options as $value => $label){
            $this->_array[] = [
                'value' => $value,
                'label' => $label
            ];
        }

        //return $array;
        return $dummyArray; #TO-DO: Nuke me
    }    
}
