<?php

namespace App\AbstractView;

class MasterView extends AbstractView
{
    public function __construct()
    {
        parent::__construct();
        $this->setMaster();
    }

    public function setMaster()
    {
        $this->index = 'master.index';
        $this->show = 'master.show';
        $this->title = 'Master';
    }
}
