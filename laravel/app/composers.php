<?php

/*
|--------------------------------------------------------------------------
| Composer Views
|--------------------------------------------------------------------------
|
*/
View::composer('layouts.base','Composers\BaseComposer');

/*
View::composers(array(
    'AdminComposer' => array('admin.index', 'admin.profile'),
    'UserComposer' => 'user',
    'ProductComposer@create' => 'product'
));
*/
