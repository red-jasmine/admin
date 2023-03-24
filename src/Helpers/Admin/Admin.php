<?php

namespace RedJasmine\Admin\Helpers\Admin;

use RedJasmine\Support\Contracts\UserInterface;

class Admin implements UserInterface
{

    /**
     * @return string|int
     */
    public function getUserType() : string|int
    {
        return 'admin';
    }

    /**
     * @return string|int
     */
    public function getUID() : string|int
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
