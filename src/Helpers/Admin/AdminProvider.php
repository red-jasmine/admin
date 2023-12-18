<?php

namespace RedJasmine\Admin\Helpers\Admin;

use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Column;
use RedJasmine\Admin\Helpers\Admin\Extends\Enums;
use RedJasmine\Admin\Helpers\Admin\Extends\Select;
use RedJasmine\Support\Enums\UserType;

class AdminProvider
{


    public static function boot() : void
    {
        Column::extend('select', Select::class);
        Column::extend('enums', Enums::class);

        Form::extend('select2', Extends\Forms\Select::class);


        self::adminer();
    }


    /**
     * 管理端 添加创建和更新人
     * @return void
     */
    public static function adminer() : void
    {
        Form::macro('adminer', function () {
            if ($this->isCreating()) {
                $this->creator_type = UserType::ADMIN->value;
                $this->creator_id   = Admin::user()->id;

            }
            if ($this->isEditing()) {
                $this->updater_type = UserType::ADMIN->value;
                $this->updater_id   = Admin::user()->id;
            }
        });
    }

}
