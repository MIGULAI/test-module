<?php
namespace app\vendor\modules\Installer;

use Composer\Installer\LibraryInstaller;


class Installer extends LibraryInstaller
{
    public function install(){
        $configFile = '../config/web.php';
        $config = require $configFile;
        $config['modules']['hello'] = [
            'class' => 'app\vendor\modules\hello\Module',
        ];
        file_put_contents($configFile, '<?php ' . var_export($config, true) . "; \n if (YII_ENV_DEV) { \n \$config['bootstrap'][] = 'debug';\n \$config['modules']['debug'] = [\n'class' => 'yii\debug\Module'];} return \$config;");
    }
}

?>