<?php

	/**
	 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
	 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
	 *
	 * Licensed under The MIT License
	 * For full copyright and license information, please see the LICENSE.txt
	 * Redistributions of files must retain the above copyright notice.
	 *
	 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
	 * @link          https://cakephp.org CakePHP(tm) Project
	 * @package       app.View.Layouts
	 * @since         CakePHP(tm) v 0.10.0.1076
	 * @license       https://opensource.org/licenses/mit-license.php MIT License
	 */

$cakeDescription = __d('cake_dev', 'Control de Cambios');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		//Bootstrap --
		echo $this->Html->css('bootstrap.min');

		//Jquery
		echo $this->Html->css('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
		echo $this->Html->css('/resources/demos/style.css');

	?>

	<!-- JQuery -->
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!-- Script para el campo de fecha -->
	<script>
		$( function() {
			$( "#datepicker" ).datepicker();
		} );
	</script>

</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php //echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>

			<ul class="nav nav-tabs">
				<li class="nav-item">
					<?php echo $this->Html->link(
							'Home','index', 
							array(
								'class' => 'nav-link',
								'style' => 'color: blue',
							)
						); ?>
				</li>
				<li class="nav-item dropdown">
					<?php echo $this->Html->link(
							'Consultar','view', 
							array(
								'class' => 'nav-link',
								'style' => 'color: blue',
							)
						); ?>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li>
			</ul>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'https://cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
