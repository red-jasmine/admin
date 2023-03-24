<?php

namespace RedJasmine\Admin\Helpers\Admin;

use RedJasmine\Support\Contracts\User;

class Admin implements User
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
      return  \Dcat\Admin\Admin::user()->id;
    }




}
