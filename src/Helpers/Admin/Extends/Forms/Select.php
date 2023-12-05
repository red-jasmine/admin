<?php

namespace RedJasmine\Admin\Helpers\Admin\Extends\Forms;

use Dcat\Admin\Form\Field\HasDepends;

class Select extends \Dcat\Admin\Form\Field\Select
{
    use HasDepends;


    protected $view = 'red-jasmine.admin::form.select';
}
