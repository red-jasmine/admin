<?php

namespace RedJasmine\Admin\Models;

use RedJasmine\Support\Contracts\UserInterface;
use RedJasmine\Support\Enums\UserType;

class Administrator extends \Dcat\Admin\Models\Administrator implements UserInterface
{
    public function getAvatar() : ?string
    {
        return parent::getAvatar();
    }


    public function getUserType() : string|int
    {
        return UserType::ADMIN->value;
    }

    public function getUID() : string|int
    {
        return $this->getAuthIdentifier();
    }

    public function getNickname() : ?string
    {
        return $this->name;
    }


}
