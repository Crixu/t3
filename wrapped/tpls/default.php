<?php
/** 
 *------------------------------------------------------------------------------
 * @package       Optimum Theme
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2013-2014 OptimumTheme.com. All Rights Reserved.
 * @license       Optimum Theme Property Licence
 * @license       based on T3 Framework - http://t3-framework.org
 * @authors       OptimumTheme.com
 * @Link:         http://www.optimumtheme.com
 *------------------------------------------------------------------------------
 */


defined('_JEXEC') or die;

$app = JFactory::getApplication();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
$hide_mainbody = (!$this->params->get("ot_mainbody_disabled",true)==false && ($menu->getActive() == $menu->getDefault( $lang->getTag() )));

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" />'>

<head>
	<jdoc:include type="head" />
	<?php $this->loadBlock('head') ?>
</head>

<body>

<div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->
	<div class="ot-border container">	
	  <?php $this->loadBlock('topbar') ?>	
	
	  <?php $this->loadBlock('header') ?>	
	
	  <?php $this->loadBlock('mainnav') ?>
	
	  <?php $this->loadBlock('slideshow') ?>
	
	  <?php $this->loadBlock('slide') ?>
	  
	  <?php $this->loadBlock('field-1') ?>
		  
	  <?php $this->loadBlock('promo') ?>
				
	  <?php $this->loadBlock('field-2') ?>
	  		
	  <?php $this->loadBlock('field-3') ?>
	
	  <?php if (!$hide_mainbody) : ?>
	  	<?php $this->loadBlock('mainbody') ?>
	  <?php endif; ?>
		
	  <?php $this->loadBlock('field-4') ?>
				
	  <?php $this->loadBlock('field-5') ?>
				
	  <?php $this->loadBlock('field-6') ?>
	
	  <?php $this->loadBlock('navhelper') ?> 
	
	  <?php $this->loadBlock('footer') ?>
	</div>
</div>

</body>

</html>