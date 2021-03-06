<?php
namespace Concrete\Package\CoteoBoilerplatePackage;

use Package;
use \Concrete\Package\CoteoBoilerplatePackage\Src\UikitGridFramework;
use Core;
use Page;
use \Concrete\Core\Page\Theme\Theme;
use AssetList;
use SinglePage;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{
    protected $pkgHandle = 'coteo_boilerplate_package';
    protected $appVersionRequired = '5.7.4';
    protected $pkgVersion = '0.0.1';

    public function getPackageName()
    {
        return t("Concrete 5.7 Boilerplate Theme Package");
    }

    public function getPackageDescription()
    {
        return t("A package that installs a boilerplate theme for 5.7.4.");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('theme_vitrine_uikit', $pkg);

        //Install single page
        $path = '/mentions-legales';
        $sp = Page::getByPath($path);
        if ($sp->isError() && $sp->getError() == COLLECTION_NOT_FOUND) {
           $sp = SinglePage::add($path, $pkg);
        }
        //Install single page
        $path = '/plan-du-site';
        $sp = Page::getByPath($path);
        if ($sp->isError() && $sp->getError() == COLLECTION_NOT_FOUND) {
           $sp = SinglePage::add($path, $pkg);
        }
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
