<?php
/*
 * Copyright (C) 2021 Henrique Lima da Costa Pereira
 *
 * SPDX-License-Identifier: Apache-2.0
 */

class Hlcpereira_Geolocalizer_Model_Source_Config_Options
{
    public function getOptions(){
        $this->_data = Mage::getModel("geolocalizer/options")
                                    ->load($this->getOption());
    }
}
