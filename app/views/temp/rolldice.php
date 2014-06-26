<!doctype html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Roll was, <?php echo $roll; ?>!</h1>
    <?if(isset($guess)) :?>
    	<h1>Guess was, <?php echo $guess; ?>!</h1>

    	<? if($guess == $roll) : ?>
    		<h1 style="color:green">You win!!</h1>
    	<? endif;?>

    <? endif; ?>

</body>
</html>