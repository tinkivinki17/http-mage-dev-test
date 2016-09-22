<!DOCTYPE html>
<html>
<head>
	<title>Magento Developers Test</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css' />
	<link type='text/css' href="/style/css/style.css" rel='stylesheet' media='screen' />

	<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/style/js/scripts.js"></script>
</head>
<body class="showTips">
	<div class="head">
		<div class="container">
			<div class="flex">
				<div class="logo">
					<img src="/style/images/magento-logo.svg">
					<span>Developer Test</span>
				</div>
				<div class="flex">
					<form method="GET">
						<?php $limit = (isset($_GET['limit'])) ? filter_var($_GET['limit'], FILTER_VALIDATE_INT) : 102; ?>
						<input type="text" name="limit" value="<?php echo $limit;?>" />
						<button>Set limit</button>
					</form>
				</div>
				<div class="testType flex">
					<div>Show answers after submitting the question</div>
					<div id="toggler" class="on"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php $questions = shuffle_assoc($tasks, $limit); ?>
		<?php foreach ($questions as $tasksNumber => $task) : ?>
			<div class="task">
				<div class="question">
					<span>question <?php echo $tasksNumber; ?>:</span>
					<div>
						<?php echo $task['question']; ?>
					</div>

					<?php $imagePath = "/style/images/{$tasksNumber}.png"; ?>

					<? if(file_exists(getcwd() . $imagePath)) : ?>
						<div class="image">
							<img src="<?php echo $imagePath; ?>" />
						</div>
					<? endif; ?>
				</div>

				<div class="answers">
					<?php foreach(shuffle_assoc($task['answers']) as $answerNumber => $answer) : ?>
						<div class="answer <?php if(in_array($answerNumber, $answers[$tasksNumber])) echo 'right'; ?>">
							<?php echo htmlspecialchars($answer) ?>
						</div>	
					<?php endforeach; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="modalLayout">
		<div class="modalContainer">
			<div class="modal">
				
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="flex">
				<div class="logo">
					<img src="/style/images/magento-logo.svg">
					<span>Developer Test</span>
				</div>
			</div>
		</div>
	</div>
	<div class="progressBar">
		<div class="finished">	
			<div class="counter righter">
				<span>0</span>
				/
				<?php echo count($questions); ?>
			</div>
		</div>
	</div>
</body>
</html>