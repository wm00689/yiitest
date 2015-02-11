<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/2/10
 * Time: 20:49
 */
return [

    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,

             'rules' => [


                   'thumbs/<path:.*>' => 'site/thumb',

                 ],
        ],
    ],
    //维护模式
    //'catchAll' => ['site/offline'],
];