<?php 
require('quiz.php');

$questions = new Quiz;
$questions = $questions->generate();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Teste técnico</title>
</head>
<body>
     <form action="resposta.php" method="post">
        <?php
        $i = 1;
        foreach ($questions as $info) {
        	shuffle($info['options']);
        ?>
			<p><?php echo $info['question']; ?></p>

        	<?php foreach ($info['options'] as $detail) { ?>
        		<input type="radio" name="<?php echo $i; ?>" value="<?php echo $detail['option']; ?>" required /><?php echo $detail['text']; ?><br />
        	<?php } ?>

        <?php 
    		$i++;
    	} 
    	?>

        <br />     
        <button class="btn success" type="submit">Conferir</button>
     </form>
 </body>
