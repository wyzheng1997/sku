<?php

namespace JadeKun\Sku\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class SkuController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('sku::index'));
    }
}