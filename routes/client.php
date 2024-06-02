<?php

use Pc\FpolyBaseWeb3014\Controllers\Client\AboutController;
use Pc\FpolyBaseWeb3014\Controllers\Client\ContactController;
use Pc\FpolyBaseWeb3014\Controllers\Client\HomeController;
use Pc\FpolyBaseWeb3014\Controllers\Client\ProductController;

// Website có các trang là:
//      Trang chủ
//      Giới thiệu
//      Sản phẩm
//      Chi tiết sản phẩm
//      Liên hệ

// Để định nghĩa được, điều đầu tiên làm là phải tạo Controller trước
// Tiếp theo, khai function tương ứng để xử lý
// Bước cuối, định nghĩa đường dẫn

// HTTP Method: get, post, put (path), delete, option, head


$router->get('/',                  HomeController::class       . '@index');
$router->get('/about',             AboutController::class      . '@index');

$router->get('/contact',           ContactController::class    . '@index');
$router->post('/contact/store',    ContactController::class    . '@store');

$router->get('/products',          ProductController::class    . '@index');
$router->get('/products/{id}',     ProductController::class    . '@detail');
