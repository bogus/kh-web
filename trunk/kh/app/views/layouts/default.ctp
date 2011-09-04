<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Kitaphane - Bir kitap okudum, hayatim degisti'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->charset('utf-8'); 
	
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			Kitaphane.org
			<span style="color:0xffffff;">
			<?php
				if ($this->Session->read('Auth.User')) {
			?>
				(Hosgeldin <?php echo $this->Session->read('Auth.User.username'); ?>, cikmak icin <?php
						echo $this->Html->link(
							__('tikla', true),
							'/users/logout',
							array('escape' => false)
						);
					?>)
				<?php
					echo $this->Html->link(
						__('Hesabim', true),
						'/users/myprofile',
						array('escape' => false)
					);
					
					echo $this->Html->link(
						__('Kitaplarim', true),
						'/books/userListBooks',
						array('escape' => false)
					);
				?>
			<?php
				} else {
			?>
					<?php
						echo $this->Html->link(
							__('Giris', true),
							'/users/login',
							array('escape' => false)
						);
					?>
					<?php
						echo $this->Html->link(
							__('Kayit', true),
							'/users/register',
							array('escape' => false)
						);
					?>
			</span>	
			<?php
				}
			?>
		</div>
		<div id="content">
			<?php echo $this->Session->flash('auth'); ?>
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); 
	?>
</body>
</html>