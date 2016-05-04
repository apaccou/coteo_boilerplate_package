<?php
namespace Concrete\Package\CoteoBoilerplatePackage\Src;

use Concrete\Core\Page\Theme\GridFramework\GridFramework;

defined('C5_EXECUTE') or die(_("Access Denied."));

class UikitGridFramework extends GridFramework
{

  public function getPageThemeGridFrameworkName()
  {
      return t('Uikit');
  }

  public function getPageThemeGridFrameworkRowStartHTML()
  {
      return '<div class="uk-grid">';
  }

  public function getPageThemeGridFrameworkRowEndHTML()
  {
      return '</div>';
  }

  public function getPageThemeGridFrameworkContainerStartHTML()
  {
      return '';
  }

  public function getPageThemeGridFrameworkContainerEndHTML()
  {
      return '';
  }

  public function getPageThemeGridFrameworkColumnClasses()
  {
      $columns = array(
          'uk-width-small-1-1',
          'uk-width-small-1-2',
          'uk-width-small-1-3',
          'uk-width-small-2-3',
          'uk-width-small-1-4',
          'uk-width-small-2-4',
          'uk-width-small-3-4',
          'uk-width-small-1-5',
          'uk-width-small-2-5',
          'uk-width-small-3-5',
          'uk-width-small-4-5',
          'uk-width-small-1-6',
          'uk-width-small-2-6',
          'uk-width-small-3-6',
          'uk-width-small-4-6',
          'uk-width-small-5-6',
          'uk-width-small-1-10',
          'uk-width-small-2-10',
          'uk-width-small-3-10',
          'uk-width-small-4-10',
          'uk-width-small-5-10',
          'uk-width-small-6-10',
          'uk-width-small-7-10',
          'uk-width-small-8-10',
          'uk-width-small-9-10',
      );
      return $columns;
  }

  public function getPageThemeGridFrameworkColumnOffsetClasses()
  {
      $offsets = array(
          'uk-push-1-2',
          'uk-push-1-3',
          'uk-push-2-3',
          'uk-push-1-4',
          'uk-push-2-4',
          'uk-push-3-4',
          'uk-push-1-5',
          'uk-push-2-5',
          'uk-push-3-5',
          'uk-push-4-5',
          'uk-push-1-6',
          'uk-push-2-6',
          'uk-push-3-6',
          'uk-push-4-6',
          'uk-push-5-6',
          'uk-push-1-10',
          'uk-push-2-10',
          'uk-push-3-10',
          'uk-push-4-10',
          'uk-push-5-10',
          'uk-push-6-10',
          'uk-push-7-10',
          'uk-push-8-10',
          'uk-push-9-10',
          'uk-pull-1-2',
          'uk-pull-1-3',
          'uk-pull-2-3',
          'uk-pull-1-4',
          'uk-pull-2-4',
          'uk-pull-3-4',
          'uk-pull-1-5',
          'uk-pull-2-5',
          'uk-pull-3-5',
          'uk-pull-4-5',
          'uk-pull-1-6',
          'uk-pull-2-6',
          'uk-pull-3-6',
          'uk-pull-4-6',
          'uk-pull-5-6',
          'uk-pull-1-10',
          'uk-pull-2-10',
          'uk-pull-3-10',
          'uk-pull-4-10',
          'uk-pull-5-10',
          'uk-pull-6-10',
          'uk-pull-7-10',
          'uk-pull-8-10',
          'uk-pull-9-10',
      );
      return $offsets;
  }

  public function getPageThemeGridFrameworkColumnAdditionalClasses()
  {
      return 'columns';
  }

  public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
  {
      return 'columns';
  }

}
