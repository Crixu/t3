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

/**
 * Mainbody 2 columns: content - sidebar
 */
?>
<div id="t3-mainbody" class="t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-sm-8  col-md-9">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<jdoc:include type="component" />
		</div>
		<!-- //MAIN CONTENT -->

		<div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-4  col-md-3">
			<div class="row">

				<!-- MASSCOL 1 -->
				<?php if ($vars['mastcol']) : ?>
					<div class="t3-mastcol t3-mastcol-1 <?php $this->_c($vars['mastcol']) ?>">
						<jdoc:include type="modules" name="<?php $this->_p($vars['mastcol']) ?>" style="T3Xhtml" />
					</div>
				<?php endif ?>
				<!-- //MASSCOL 1 -->

				<!-- SIDEBAR RIGHT -->
				<?php if ($vars['sidebar']) : ?>
				<div class="t3-sidebar col-xs-12 col-sm-4  col-md-3 <?php $this->_c($vars['sidebar']) ?>">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar']) ?>" style="T3Xhtml" />
				</div>
				<?php endif ?>
				<!-- //SIDEBAR RIGHT -->
				
			</div>
		</div>

	</div>
</div> 