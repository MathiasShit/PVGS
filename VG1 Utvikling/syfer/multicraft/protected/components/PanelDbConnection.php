<?php
/**
 *
 *   Copyright © 2010-2018 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

class PanelDbConnection extends DbConnection
{
    public function init()
    {
        $this->type = 'panel';
        parent::init();
    }
}
