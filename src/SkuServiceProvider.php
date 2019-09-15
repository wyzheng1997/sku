<?php

namespace JadeKun\Sku;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class SkuServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Sku $extension)
    {
        if (! Sku::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'sku');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/jadekun/sku')],
                'sku'
            );
        }

        Admin::booting(function () {
            Form::extend('sku', SkuField::class);
        });
    }
}
