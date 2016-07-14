$(function(){
	$(document).ready(function(){

		$('#toggler').bind('click', function(){
			if($(this).hasClass('on'))
				$(this).removeClass('on');
			else
				$(this).addClass('on');
		});

		$('.task .answers .answer').bind('click', function(){
			var parent = $(this).parent();
			// If we've displaied answers - disable clicks on this task.
			if(!parent.hasClass('display')) {
				if($(this).hasClass('checked')) {
					$(this).removeClass('checked');
				} else {
					$(this).addClass('checked');
				}

				if(parent.find('.checked').length == parent.find('.right').length) {
					parent.find('.answer').each(function(){
						if($(this).hasClass('checked') && !$(this).hasClass('right')) {
							$(this).addClass('wrong');
						}
					});

					parent.addClass('display');

					var question = parent.parent().find('.question');

					if(parent.find('.wrong').length == 0)
						question.addClass('passed');
					else
						question.addClass('failed');
				}
			}
		});
	});
});