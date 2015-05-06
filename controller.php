<?php
namespace Concrete\Package\CoteoBoilerplatePackage;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;

defined('C5_EXECUTE') or die('Access Denied.');

class Controller extends Package
{
  protected $pkgHandle = 'coteo_boilerplate_package';
  protected $appVersionRequired = '5.7.3';
  protected $pkgVersion = '0.0.1';

  public function getPackageName()
  {
    return t("Concrete 5.7 Boilerplate Theme Package");
  }

  public function getPackageDescription()
  {
    return t("A package that installs a boilerplate theme for 5.7.3.");
  }

  public function install()
  {
    $pkg = parent::install();

    //Install the theme
    $theme = PageTheme::add('theme_vitrine_uikit', $pkg);
  }
}
