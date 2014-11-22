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

// get social links
$sociallink1 = $this->params->get('sociallink1');
$sociallink2 = $this->params->get('sociallink2');
$sociallink3 = $this->params->get('sociallink3');
$sociallink4 = $this->params->get('sociallink4');
$sociallink5 = $this->params->get('sociallink5');
$sociallink6 = $this->params->get('sociallink6');
$sociallink7 = $this->params->get('sociallink7');
$sociallink8 = $this->params->get('sociallink8');

// Modal module
$otModalModule = $this->params->get('otModalPosition');
$otModalIcon = $this->params->get('otModalIcon');

?>

<!-- TOPBAR -->


<div id="ot-topbar">
      <div class="ot-topbar">
	      <div class="row">
		      <div class="col-sm-12">
		<?php if ($otModalModule == 1 && $this->countModules( 'ot-modal' )) { ?>
				<div class="ot-modal pull-right hidden-sm">
					<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#otModal">
					  <i class="<?php echo $otModalIcon; ?>"></i>
					</button>
					
					<!-- Optimum Modal -->
					<div class="modal fade" id="otModal" tabindex="-1" role="dialog" aria-labelledby="otModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h3><span><?php echo JText::_('OT_MODAL_TITLE'); ?></span></h3>
					      </div>
					      <div class="modal-body">
					        <div><jdoc:include type="modules" name="ot-modal" style="JAxhtml" /></div>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<?php } ?>            
		            <?php if ($this->countModules('topbar-l')) : ?>
		            	<div class="topbar-l pull-left hidden-xs hidden-sm">
		            		<jdoc:include type="modules" name="<?php $this->_p('topbar-l') ?>" />
		            	</div>
		            <?php endif ?>

				<?php if ($this->countModules('languageswitcherload')) : ?>
					<!-- LANGUAGE SWITCHER -->
					<div class="languageswitcherload">
						<jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" />
					</div>
					<!-- //LANGUAGE SWITCHER -->
				<?php endif ?>
					
				<?php if(!empty($sociallink1)||!empty($sociallink2)||!empty($sociallink3)||!empty($sociallink4)||!empty($sociallink5)||!empty($sociallink6)||!empty($sociallink7)||!empty($sociallink8)) : ?>
			    <div class="social-icons pull-right text-center">
			                      
			           <?php if (!empty($sociallink1)) : ?>
			                <div class="social-icon"><a class="facebook" target="_blank" href="<?php echo $this->params->get('sociallink1') ?>"><i class="fa fa-facebook"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink2)) : ?>
			                <div class="social-icon"><a class="twitter" target="_blank" href="<?php echo $this->params->get('sociallink2') ?>"><i class="fa fa-twitter"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink3)) : ?>
			                <div class="social-icon"><a class="google" target="_blank" href="<?php echo $this->params->get('sociallink3') ?>"><i class="fa fa-google-plus"></i></a></div>
			           <?php endif; ?>
			                 <?php if (!empty($sociallink4)) : ?>
			                <div class="social-icon"><a class="dribbble" target="_blank" href="<?php echo $this->params->get('sociallink4') ?>"><i class="fa fa-dribbble"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink5)) : ?>
			                <div class="social-icon"><a class="flickr" target="_blank" href="<?php echo $this->params->get('sociallink5') ?>"><i class="fa fa-flickr"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink6)) : ?>
			                <div class="social-icon"><a class="youtube" target="_blank" href="<?php echo $this->params->get('sociallink6') ?>"><i class="fa fa-youtube"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink7)) : ?>
			                <div class="social-icon"><a class="linkedin" target="_blank" href="<?php echo $this->params->get('sociallink7') ?>"><i class="fa fa-linkedin"></i></a></div>
			           <?php endif; ?>
			           <?php if (!empty($sociallink8)) : ?>
			                <div class="social-icon last"><a class="rss" target="_blank" href="<?php echo $this->params->get('sociallink8') ?>"><i class="fa fa-rss"></i></a></div>
			           <?php endif; ?>
			     </div>
				 <?php endif; ?>

		      </div>
	      </div>
      </div>
</div>
<!-- //TOPBAR -->