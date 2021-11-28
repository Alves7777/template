<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\ApisController;

class SiteHomeApi
{
    public array $sectionTwo1, $sectionTwo2, $sectionTwo3, $sectionTwo4;

    public function getSectionTwo(): bool
    {
        $apiSectionTwo = new ApisController;
        $getSection = $apiSectionTwo->RESPONSE_SECTIONTWO_GET;

        $this->sectionTwo1 = $getSection[0];
        $this->sectionTwo2 = $getSection[1];
        $this->sectionTwo3 = $getSection[2];
        $this->sectionTwo4 = $getSection[3];

        return true;
    }

}
