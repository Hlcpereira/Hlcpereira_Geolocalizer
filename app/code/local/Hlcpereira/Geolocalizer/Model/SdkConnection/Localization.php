<?php
/*
 * Copyright (C) 2021 Henrique Lima da Costa Pereira
 *
 * SPDX-License-Identifier: Apache-2.0
 */

class Hlcpereira_Geolocalizer_Model_SdkConnection_Localization
{
    protected $geoIpSdk;

    public function initLocation(){
        $this->geoIpSdk = new \GeoIPSDK\Api();
        return $this->geoIpSdk;
    }
}
