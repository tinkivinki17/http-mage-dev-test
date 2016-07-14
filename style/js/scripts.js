$(function(){
	$(document).ready(function(){
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