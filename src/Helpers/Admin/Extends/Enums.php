<?php

namespace RedJasmine\Admin\Helpers\Admin\Extends;

use Dcat\Admin\Admin;
use Dcat\Admin\Grid\Displayers\AbstractDisplayer;
use Illuminate\Support\Enumerable;

class Enums extends AbstractDisplayer
{
    public function display($options = [], $default = null) : string
    {
        $enums = $this->value;
        if (is_null($this->value)) {
            return '';
        }

        $value = is_object($this->value) ? $this->value->value : $this->value;

        $colors = Admin::color()->all();

        $index = $value;

        if (is_string($value)) {
            $index = sprintf('%u', crc32($value)) % 10;
        }

        $style      = array_keys($colors)[(int)$index] ?? 'default';
        $background = Admin::color()->get($style, $style);

        try {
            $name = $enums->name();
        } catch (\Throwable) {
            $name = (string)$value;

        }


        return "<i class='fa fa-circle' style='font-size: 13px;color: {$background}'></i>&nbsp;&nbsp;" . $name;

    }


}
