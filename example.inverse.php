<?php
require_once('buddyexpress.bcinverse.php');
?>
<form>
<input style="width:800px; height:200px;"type="text" name="inverse" value="<?php echo buddyexpress_bcinverse_result($_REQUEST['inverse'])?>">
<input type="submit" value="Inverse">
</form>
