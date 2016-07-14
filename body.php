<!DOCTYPE html>
<html>
<head>
	<title>Magento Developers Test</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css' />
	<link type='text/css' href="/style/css/style.css" rel='stylesheet' media='screen' />

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/style/js/scripts.js"></script>
</head>
<body>
	<div class="head">
		<div class="container">
			<div href="/">
				<img src="/style/images/magento-logo.svg">
				<span>Developer Test</span>
			</div>
		</div>
	</div>
	<div class="container">
		<?php foreach ($tasks as $tasksNumber => $task) : ?>
			<div class="task">
				<div class="question">
					<span>question <?php echo $tasksNumber; ?>:</span>
					<div>
						<pre><?php echo $task['question']; ?></pre>
					</div>

					<?php $imagePath = "/style/images/{$tasksNumber}.png"; ?>

					<? if(file_exists(getcwd() . $imagePath)) : ?>
						<div class="image">
							<img src="<?php echo $imagePath; ?>" />
						</div>
					<? endif; ?>
				</div>
				<div class="answers">
					<?php foreach($task['answers'] as $answerNumber => $answer) : ?>
						<div class="answer <?php if(in_array($answerNumber, $answers[$tasksNumber])) echo 'right'; ?>">
							<?php echo htmlspecialchars($answer) ?>
						</div>	
					<?php endforeach; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>