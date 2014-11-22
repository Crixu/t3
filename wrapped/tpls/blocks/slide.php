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

<?php if ($this->checkSpotlight('slide', 'slide-1, slide-2')) : ?>
	<!-- SLIDE -->
	<div class="ot-slide">
		<?php $this->spotlight('slide', 'slide-1, slide-2') ?>
	</div>
	<!-- //SLIDE -->
<?php endif ?>