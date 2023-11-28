<?php

namespace RedJasmine\Admin\Models;

use RedJasmine\Support\Contracts\UserInterface;

class Administrator extends \Dcat\Admin\Models\Administrator implements UserInterface
{
    public function getAvatar() : ?string
    {
        return parent::getAvatar();
    }


    public function getUserType() : string
    {
        return 'admin';
    }

    public function getUID() : int
    {
        return $this->getAuthIdentifier();
    }

    public function getNickname() : ?string
    {
        return $this->name;
    }


}
