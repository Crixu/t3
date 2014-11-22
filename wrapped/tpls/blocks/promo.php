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

<?php if ($this->checkSpotlight('promo', 'promo-1')) : ?>
	<!-- PROMO -->
	<div class="ot-promo">
		<?php $this->spotlight('promo', 'promo-1') ?>
	</div>
	<!-- //PROMO -->
<?php endif ?>