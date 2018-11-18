<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http:/php.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');
define('IMG_GOOD','/public/uploads/news/imgs/');
define('IMG_GOODS','');
define('IMG_MP4','/public/uploads/news/mp4/');
define('IMG_BANNER','/public/uploads/banner/imgs/');
define('IMG_BRAND','/public/uploads/brand/imgs/');
define('APP_PATH_AD', '../../public/uploads/ad/');
define('APP_JS','__ROOT__/public/static/index/');
define('APP_ZT','__ROOT__/public/static/zhuant/');
define('APP_ADMIN','__ROOT__/public/static/admin/');
define('DLEDITOR','__ROOT__/public/dleditor/');
define('PUB','__ROOT__/public/');
define('APP_LAYER','__ROOT__/public/static/data/');
define('APP_IMGALL','/public/static/index/img/img_all/');
// 加载框架引导文件
 // define('BIND_MODULE','index'); 
require __DIR__ . '/thinkphp/start.php';
