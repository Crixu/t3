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

<!-- FOOTER -->
<footer id="t3-footer" class="wrap t3-footer">

	<?php if ($this->checkSpotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6')) : ?>
		<!-- FOOT NAVIGATION -->
			<?php $this->spotlight('footnav', 'footer-1, footer-2, footer-3, footer-4, footer-5, footer-6') ?>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>

	<?php if ($this->checkSpotlight('footnav2', 'footer-7, footer-8, footer-9, footer-10, footer-11, footer-12')) : ?>
		<!-- FOOT NAVIGATION -->
			<?php $this->spotlight('footnav2', 'footer-7, footer-8, footer-9, footer-10, footer-11, footer-12') ?>
		<!-- //FOOT NAVIGATION -->
	<?php endif ?>

	<section class="t3-copyright">
			<div class="row">
				<div class="<?php echo $this->getParam('t3-rmvlogo', 1) ? 'col-md-10' : 'col-md-12' ?> copyright <?php $this->_c('footer') ?>">
					<jdoc:include type="modules" name="<?php $this->_p('footer') ?>" />
				</div>
				<?php if ($this->getParam('t3-rmvlogo', 1)): ?>
					<div class="col-md-2 text-right">
						<a href="http://www.optimumtheme.com" title="Joomla Templates" target="_blank">Optimum Theme</a>
					</div>
				<?php endif; ?>
			</div>
	</section>
	
</footer>
<!-- //FOOTER -->