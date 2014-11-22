<?php
/** 
 *------------------------------------------------------------------------------
 * @package       Optimum Theme
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2013-2014 Optimum Theme. All Rights Reserved.
 * @license       Optimum Theme Property Licence
 * @authors       OptimumTheme.com
 * @Link:         http://www.optimumtheme.com
 *------------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('navhelper')) : ?>
	<!-- NAV HELPER -->
	<nav class="wrap t3-navhelper <?php $this->_c('navhelper') ?>">
		<jdoc:include type="modules" name="<?php $this->_p('navhelper') ?>" />
	</nav>
	<!-- //NAV HELPER -->
<?php endif ?>
