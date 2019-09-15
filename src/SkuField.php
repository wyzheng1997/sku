<?php

namespace JadeKun\Sku;

use Encore\Admin\Form\Field;

class SkuField extends Field
{
    protected $view = 'sku::sku_field';

    protected static $js = [
        'vendor/jadekun/sku/sku.js'
    ];

    protected static $css = [
        'vendor/jadekun/sku/sku.css'
    ];

    public function render()
    {

        $this->script = <<< EOF
window.DemoSku = new JadeKunSKU('{$this->getElementClassSelector()}')
EOF;
        return parent::render();
    }

}
