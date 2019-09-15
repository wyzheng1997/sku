laravel-admin extension 商品SKU
======

![预览](https://github.com/jade-kun/sku/blob/master/1.png?raw=true)

## 安装
```bash
composer install jadekun/sku
php artisan vendor:publish --provider="JadeKun\Sku\SkuServiceProvider"
```

## 配置

### 配置sku上传地址
文件路径【public/vendor/jadekun/sku/sku.js】
```javascript
const UploadHost = '/admin/upload_file';
```
php进行存储
```php
// key为file
if($request->hasFile('file')) {
    $file = $request->file('file');
    $path = $file->store('images');

    // 返回格式
    return ['url'=> Storage::url($path)];
}
```

### 数据库字段配置
- 数据类型json


### 使用方法
```php
$form->sku('sku','商品SKU');
```

### 其他说明
本扩展只会将SKU数据写指定的字段中，如需个性化处理数据，请在【表单回调】中处理

原始数据
```json
{
	"type": "many", // many多规格；single单规格
	"attrs": {"尺寸": ["XL", "XXL", "XXXL"], "颜色": ["黑", "灰色"]},
    "sku": [{"pic": "", "price": "89", "stock": "100", "尺寸": "XL", "颜色": "黑"}, {
        "pic": "",
        "price": "89",
        "stock": "100",
        "尺寸": "XL",
        "颜色": "灰色"
    }, {"pic": "", "price": "89", "stock": "100", "尺寸": "XXL", "颜色": "黑"}, {
        "pic": "",
        "price": "89",
        "stock": "100",
        "尺寸": "XXL",
        "颜色": "灰色"
    }, {"pic": "", "price": "89", "stock": "100", "尺寸": "XXXL", "颜色": "黑"}, {
        "pic": "",
        "price": "89",
        "stock": "100",
        "尺寸": "XXXL",
        "颜色": "灰色"
    }]
}
```

```php
$form->sku('sku','商品SKU');

// 处理数据
$form->saving(function($form) {
    dd($form->sku);
});
```