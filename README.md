laravel-admin extension 商品SKU
======

![预览](https://github.com/jade-kun/sku/blob/master/1.png?raw=true)

## 安装
```
composer install jadekun/sku
php artisan vendor:publish --provider="JadeKun\Sku\SkuServiceProvider"
```

## 配置

### 配置sku上传地址
文件路径【public/vendor/jadekun/sku/sku.js】
```
const UploadHost = '/admin/upload_file';
```



