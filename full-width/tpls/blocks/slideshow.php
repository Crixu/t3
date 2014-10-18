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
<?php if ($this->countModules('slideshow')) : ?>
<!-- SLIDESHOW -->	
	<div class="ot-slideshow">
		<jdoc:include type="modules" name="<?php $this->_p('slideshow') ?>" />
	</div>
<!-- //SLIDESHOW -->
<?php endif ?>