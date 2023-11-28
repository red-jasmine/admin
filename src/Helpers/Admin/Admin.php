<?php

namespace RedJasmine\Admin\Helpers\Admin;

use RedJasmine\Support\Contracts\UserInterface;

class Admin implements UserInterface
{

    /**
     * @return string
     */
    public function getUserType() : string
    {
        return 'admin';
    }

    /**
     * @return int
     */
    public function getUID() : int
    {
        return \Dcat\Admin\Admin::user()->id;
    }

    public function getNickname() : ?string
    {
        return \Dcat\Admin\Admin::user()->name;
    }

    public function getAvatar() : ?string
    {
        return \Dcat\Admin\Admin::user()->avatar;
    }


}
