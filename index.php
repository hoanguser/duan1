<?php
require_once(__DIR__ . '/public/router.php');
require_once(__DIR__ . '/app/controller/index.php');
require_once realpath("vendor/autoload.php");

$router = new Router();
$router
    ->get('/', [app\controller\controller::class, 'index'])
    ->get('/detail', [app\controller\controller::class, 'detail'])
    ->get('/login', [app\controller\controller::class, 'login'])
    ->get('/signin', [app\controller\controller::class, 'signin'])
    ->post('/sign_info', [app\controller\controller::class, 'xldk'])
    ->post('/xl_login', [app\controller\controller::class, 'xldn'])
    ->get('/logout', [app\controller\controller::class, 'logout'])

    ->get('/cart', [app\controller\controller::class, 'cart'])
    ->post('/xlcart', [app\controller\controller::class, 'xlcart'])
    ->get('/removecart', [app\controller\controller::class, 'removecart'])
    ->get('/checkout', [app\controller\controller::class, 'checkout'])
    ->get('/qldh', [app\controller\controller::class, 'qldh'])
    ->post('/checkoutcart', [app\controller\controller::class, 'add_dh'])
    ->post('/info_checkout_comfirm', [app\controller\controller::class, 'info_checkout_comfirm'])
    ->get('/sucess', [app\controller\controller::class, 'sucess'])
    ->get('/qldh', [app\controller\controller::class, 'qldh'])
    ->get('/uddh', [app\controller\controller::class, 'uddh'])
    ->post('/updatedh', [app\controller\controller::class, 'updatedh'])
    ->get('/ctdh', [app\controller\controller::class, 'ctdh'])

    
    

    ->get('/admin', [app\controller\controller::class, 'admin'])
    ->get('/ad_elements', [app\controller\controller::class, 'ad_elm'])
    ->get('/ad_product', [app\controller\controller::class, 'ad_pro'])
    ->post('/ad_add_pro', [app\controller\controller::class, 'add_pro'])
    ->get('/deletepr', [app\controller\controller::class, 'deletesp'])
    ->get('/update_sp', [app\controller\controller::class, 'updatesp'])
    ->post('/ad_update_pro', [app\controller\controller::class, 'updatepro'])
    ->get('/qldh_admin', [app\controller\controller::class, 'qldh_admin'])


    
    ;
   echo $router->resolve(
    $_SERVER['REQUEST_URI'],
    strtolower($_SERVER['REQUEST_METHOD'])
);
