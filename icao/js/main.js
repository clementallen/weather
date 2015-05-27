$(document).ready(function()
{
	$('#alert-loading').html('Rendering...');

	var $datas = $('#datas');
	var $tbody = $('#datas tbody');


	var highlight = function()
	{
		if(typeof $search == 'undefined') { return; }

		var val = $search.val();
		if(val == '')
		{
			$tbody.removeHighlight();
		}
		else
		{
			$tbody.highlight(val);
		}
	};

	$datas.DataTable(
	{
		'fnDrawCallback' : highlight
	});

	var $search = $("#datas_filter input[type=search]").eq(0).attr('autofocus', 'autofocus');

	$('#alert-loading').fadeOut(300, function()
	{
		$('#list').fadeIn();
	});
});
