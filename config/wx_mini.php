<?php
/**
 * Created by phpstorm.
 * User: yangliang
 * Date: 2020/2/24 0024
 * Time: 11:27
 */


return [
    'app_id' => env('MINIPROGRAM_APPID', ''),
    'secret' => env('MINIPROGRAM_SECRET', ''),

    // 下面为可选项
    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => storage_path('logs/wx.log'),
    ],
];
