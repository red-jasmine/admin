<?php

namespace RedJasmine\Admin\Helpers\Admin\Extends;

use Closure;
use Dcat\Admin\Admin;
use Throwable;

class Select extends \Dcat\Admin\Grid\Displayers\Select
{
    /**
     * @param $options
     * @param $refresh
     * @return string
     * @throws Throwable
     */
    public function display($options = [], $refresh = false)
    {
        if ($options instanceof Closure) {
            $options = $options->call($this, $this->row);
        }

        return Admin::view('admin::grid.displayer.select', [
            'column'  => $this->column->getName(),
            'value'   => $this->value->value??$this->value,
            'url'     => $this->url(),
            'options' => $options,
            'refresh' => $refresh,
        ]);
    }

}
