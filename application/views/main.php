<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if(isset($header))
			include($header);?>

<?php if(isset($sidebar))
			include($sidebar);?>


<div class="main-wrapper">
	<!-- Container-fluid starts -->
	<?php
	//there gonna content part
	if(isset($content))
		include($content);
	?>
	<!-- Container-fluid ends -->
</div>

<?php if(isset($footer))
			include($footer); ?>
