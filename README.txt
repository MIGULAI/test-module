test yii2 module

For instalation add to composer.json next:

"repositories": [ 
        {
            "type": "vcs",
            "url": "https://github.com/MIGULAI/test-module/"
        },
        //.......
]

"require": {
    "modules/hello" : "*",
    //.......
}

in config/web.php add 
'bootstrap' => [
    'hello',
    /...
],
and
'modules' => [
    'hello' => [
        'class' => 'app\vendor\modules\hello\Module',
        //.....
    ],
],
