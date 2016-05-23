<?php
namespace Concrete\Package\CoteoBoilerplatePackage;

use Core;
use Page;
use Package;
use \Concrete\Package\CoteoBoilerplatePackage\Src\UikitGridFramework;
use \Concrete\Package\CoteoBoilerplatePackage\Src\Installorupgradepackage;
use \Concrete\Core\Page\Theme\Theme;
use AssetList;
use SinglePage;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends UikitGridFramework
{
    protected $pkgHandle = 'coteo_boilerplate_package';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t('Concrete 5.7 Boilerplate Theme Package');
    }

    public function getPackageDescription()
    {
        return t('A package that installs a boilerplate theme for 5.7.4.');
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installOrUpgrade($pkg);

        Theme::add('theme_vitrine_uikit', $pkg);

        //Install single page
        // $path = '/mentions-legales';
        // $sp = Page::getByPath($path);
        // if ($sp->isError() && $sp->getError() == COLLECTION_NOT_FOUND) {
        //    $sp = SinglePage::add($path, $pkg);
        // }
    }

    public function upgrade()
    {
        $pkg = Package::getByHandle($this->pkgHandle);
        $this->previousVersion = $pkg->getPackageVersion();
        parent::upgrade();
        $this->installOrUpgrade($pkg);
    }

    protected function installOrUpgrade($pkg)
   {
     $this->addSinglePage('/mentions-legales');
   }

    public function on_start()
    {
        require $this->getPackagePath() . '/vendor/autoload.php';
        $manager = Core::make('manager/grid_framework');
        $manager->extend('uikit', function($app) {
            return new UikitGridFramework();
        });
        $al = AssetList::getInstance();
        $al->register(
        'javascript', 'uikit', 'vendor/uikit/uikit/src/js/core/core.js'
        );
        // $al->register(
        //     'css', 'uikit', 'vendor/uikit/uikit/src/less/uikit.less'
        // );
        $al->registerGroup('uikit', array(
            //array('css', 'uikit'),
            array('javascript', 'uikit')
        ));

        $al = AssetList::getInstance();
        $al->register('css', 'styles', 'themes/theme_vitrine_uikit/css/application.less', array(), 'coteo_boilerplate_package');
    }
}
