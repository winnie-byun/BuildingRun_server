<?php
// Routes

//$app->get('/', 'App\Controller\HomeController:dispatch')
//    ->setName('homepage');

$app->get('/post/{id}', 'App\Controller\HomeController:viewPost')
    ->setName('view_post');

$app->get('/', 'App\Controller\HomeController:main')
    ->setName('main_page');
$app->post('/main_after', 'App\Controller\HomeController:main_after')
    ->setName('main_after');
$app->get('/main_after', 'App\Controller\HomeController:main_after')
    ->setName('main_after');


$app->get('/login', 'App\Controller\HomeController:login')
    ->setName('login');
$app->post('/loginHandler', 'App\Controller\LoginController:loginHandler')
    ->setName('loginHandler');

$app->get('/register', 'App\Controller\HomeController:register')
    ->setName('register');
$app->post('/registerHandler', 'App\Controller\SignupController:registerHandler')
    ->setName('registerHandler');

$app->get('/forgot_pw', 'App\Controller\HomeController:forgot_pw')
    ->setName('forgot_pw');
$app->post('/forgot_pwHandler', 'App\Controller\forgottenPWController:forgot_pwHandler')
    ->setName('forgot_pwHandler');

$app->get('/signoutHandler', 'App\Controller\HomeController:signoutHandler')
    ->setName('signoutHandler');

$app->get('/accountActivation/{id}', 'App\Controller\SignupController:accountActivation')
    ->setName('accountActivation');

$app->get('/user_change', 'App\Controller\HomeController:user_change')
    ->setName('user_change');

$app->get('/pw_check', 'App\Controller\HomeController:pw_check')
    ->setName('pw_check');
$app->post('/pw_checkHandler', 'App\Controller\SetNewPassword:pw_checkHandler')
    ->setName('pw_checkHandler');

$app->get('/pw_new', 'App\Controller\HomeController:pw_new')
    ->setName('pw_new');
$app->post('/pw_newHandler', 'App\Controller\SetNewPassword:pw_newHandler')
    ->setName('pw_newHandler');

$app->get('/delete_id_check', 'App\Controller\HomeController:delete_id_check')
    ->setName('delete_id_check');
$app->post('/delete_id_checkHandler', 'App\Controller\IDCancellation:delete_id_checkHandler')
    ->setName('delete_id_checkHandler');




// for APP
$app->post('/app/register', 'App\Controller\SignupController:app_signup')
    ->setName('app_register');
$app->get('/app/sendActivationEmail', 'App\Controller\EmailController:sendActivationEmail')
    ->setName('app_sendActivationEmail');

$app->get('/app/login', 'App\Controller\LoginController:login')
    ->setName('app_login');

$app->get('/app/forgot_pw', 'App\Controller\forgottenPWController:forgot_pw')
    ->setName('app_forgotPW');
$app->get('/app/sendNewPwEmail', 'App\Controller\EmailController:sendNewPwEmail')
    ->setName('app_sendNewPwEmail');

$app->get('/app/sendEmail', 'App\Controller\EmailController:sendEmail')
    ->setName('app_sendEmail');


// show database for test
$app->get('/showDB/airQuality', 'App\Controller\DBTester:printAirQualityInfo')
    ->setName('showDB_airQuality');
$app->get('/showDB/building', 'App\Controller\DBTester:printBuilding')
    ->setName('showDB_building');
$app->get('/showDB/gps', 'App\Controller\DBTester:printGPS')
    ->setName('showDB_gps');
$app->get('/showDB/heartInfo', 'App\Controller\DBTester:printHeartInfo')
    ->setName('showDB_heartInfo');
$app->get('/showDB/inLoc', 'App\Controller\DBTester:printInLoc')
    ->setName('showDB_inLoc');
$app->get('/showDB/nonce', 'App\Controller\DBTester:printNonce')
    ->setName('showDB_nonce');
$app->get('/showDB/sensor', 'App\Controller\DBTester:printSensor')
    ->setName('showDB_sensor');
$app->get('/showDB/user', 'App\Controller\DBTester:printUser')
    ->setName('showDB_user');
