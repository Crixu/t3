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

<?php if ($this->checkSpotlight('field-1', 'grid-1, grid-2, grid-3, grid-4')) : ?>
	<!-- FIELD 1 -->
	<div class="ot-field ot-field-1">
		<?php $this->spotlight('field-1', 'grid-1, grid-2, grid-3, grid-4') ?>
	</div>
	<!-- //FIELD 1 -->
<?php endif ?>