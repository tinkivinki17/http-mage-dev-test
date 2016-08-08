$(function(){
	$(document).ready(function(){
		$(window).resize(function(){ adjustProgress(); });

		$('#toggler').bind('click', function(){
			if($(this).hasClass('on')) {
				$(this).removeClass('on');
				$('body').removeClass('showTips');
			} else {
				$(this).addClass('on');
				$('body').addClass('showTips');
			}
		});

		$('.close').live('click', function(){
			$('.modalLayout').css('display', 'none');
		});

		$('.task .answers .answer').bind('click', function(){
			$('.testType ').hide();

			var answersContainer = $(this).parent();
			// If we've displaied answers - disable clicks on this task.
			if(!answersContainer.hasClass('display')) {
				if($(this).hasClass('checked')) {
					$(this).removeClass('checked');
				} else {
					$(this).addClass('checked');
				}

				if(answersContainer.find('.checked').length == answersContainer.find('.right').length) {
					answersContainer.find('.answer').each(function(){
						if($(this).hasClass('checked') && !$(this).hasClass('right')) {
							$(this).addClass('wrong');
						}
					});

					answersContainer.addClass('display');

					answerQuestion(answersContainer.parent().find('.question'), answersContainer);
				}
			}
		});
	});

	function adjustProgress() {
		var progress = $('.progressBar .finished').width();
		var windowWidth = $(window).width();
		var counter = $('.progressBar .finished .counter');

		if(progress <= (counter.width() / 2)) {
			if(!counter.hasClass('righter')) { counter.addClass('righter'); }
		} else if((windowWidth - progress) <= (counter.width() / 2)) {
			if(!counter.hasClass('lefter')) { counter.addClass('lefter'); }
		} else {
			counter.removeClass('righter').removeClass('lefter');
		}
	}

	function answerQuestion(question, answersContainer) {
		if(answersContainer.find('.wrong').length == 0)
			question.addClass('passed');
		else
			question.addClass('failed');

		var total 		  = $('.question').length;
		var passed 		  = $('.question.passed').length;
		var failed 		  = $('.question.failed').length;
		var totalAnswered = passed + failed;
		var progress	  = 100 / total * totalAnswered;

		setTimeout(adjustProgress, 100);

		$('.progressBar .finished').css('width', progress + '%');
		$('.counter span').text(totalAnswered);

		if(totalAnswered == total) {
			var html = "";

			html += "<div class='result'>";
			html += "	<span class='passed'>" + passed + "</span>";
			html += "	right answers from";
			html += "	<span class='total'>" + total + "</span>";
			html += "	questions.";
			html += "</div>";
			html += "<div class='close'>Hide results</div>";
			
			$('.modal').html(html);
			$('.modalLayout').css('display', 'flex');
			$('body').addClass('showTips');
		}
	}
});