function getPorcentage(value, max)
{
	data = value.toFixed(2);

	result = (data / max * 100).toFixed(2);

	return result;
}

function updateSelection(data)
{
	var url = $(data).children('a').attr('href');

	$.ajax(
	{
		url: url,
		type: 'GET',
		success:function(data, status)
		{
			$('.modal-body').html(data);
		},
		error: function (XMLHttpRequest, textStatus, errorThrown)
		{
			console.log("error: \n"+XMLHttpRequest.responseText);
			console.log(textStatus);
			console.log(errorThrown);
		}
	});

	return false;
}