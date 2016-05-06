<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$navItems = $controller->getNavItems(true);

echo '<ol class="uk-breadcrumb">';

for ($i = 0; $i < count($navItems); $i++) {
	$ni = $navItems[$i];
	// if ($i > 0) {
	// 	echo ' <span class="ccm-autonav-breadcrumb-sep" aria-hidden="true">&gt;</span> ';
	// }

	if ($ni->isCurrent) {
		echo '<li class="uk-active" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
		echo '' . $ni->name . '';
		echo '</li>';
	} else {
		echo '<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '" itemprop="url"><span itemprop="title">' . $ni->name . '</span></a>';
		echo '</li>';
	}
}

echo '</ol>';
?>
