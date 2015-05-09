<?php
namespace Concrete\Package\CoteoBoilerplatePackage\Theme\ThemeVitrineUikit;

use Concrete\Core\Page\Theme\Theme as Theme;

class PageTheme extends Theme
{
    protected $pThemeGridFrameworkHandle = 'uikit';

    public function registerAssets()
    {
        $this->requireAsset('uikit');
        $this->requireAsset('css', 'styles');
        $this->requireAsset('javascript', 'jquery');
    }
}
