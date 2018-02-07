<?php

if (isset($_POST['ja'])) {
	deleteRow($id);
	header('location: ' . URL . 'home/index');
}
elseif (isset($_POST['nee'])) {
	header('location: ' . URL . 'home/index');
}

?>

<h1>Weet u zeker dat u <?php print_r($current['name']); ?> wilt verwijderen?</h1>
<form method="post" action="">
	<input type="submit" name="ja" value="Ja">
	<input type="submit" name="nee" value="Nee">
</form>