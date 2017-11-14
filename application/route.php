<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

$rule['index/']     =        ['index/Index/index/',['ext'=>'shtml']];
$rule['information/']      =       ['index/Information/index/',['ext'=> 'shtml']];
$rule['dinformation/']      =       ['index/Information/details/',['ext'=> 'shtml']];
$rule['teachers/']      =       ['index/Teachers/index/',['ext'=> 'shtml']];
$rule['ambient/']      =       ['index/Ambient/index/',['ext'=> 'shtml']];
$rule['amdetails/']      =       ['index/Ambient/details/',['ext'=> 'shtml']];
$rule['tdetails/']      =       ['index/Teachers/details/',['ext'=> 'shtml']];
$rule['about/']      =       ['index/About/index/',['ext'=> 'shtml']];
$rule['activity/']      =       ['index/Activity/index/',['ext'=> 'shtml']];
$rule['adetails/']      =       ['index/Activity/details/',['ext'=> 'shtml']];
$rule['program/']      =       ['index/Program/index/',['ext'=> 'shtml']];
$rule['bespoke/']      =       ['index/Bespoke/index/',['ext'=> 'shtml']];

return $rule;

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
