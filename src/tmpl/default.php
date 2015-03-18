<?php
/**
 * @copyright	Copyright (c) 2015 ITB Company (http://itb-company.com/). All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

//Example output <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=Y3TDHrBrouH-xdKNbWVEXTd8KU-r-mOr&height=400"></script>
?>

<?php if ($script) : ?>
	<div class="yamap-wrapper">
	    <div class="top-shadow"></div>
	        <script type="text/javascript" charset="utf-8" <?php echo $script; ?>></script>
	    <div class="bottom-shadow"></div>
	</div>
<?php endif; ?>
