$('#app-preview, .popup').click(function() {
  $('.popup').toggleClass('visible')
});

window.fbAsyncInit = function() 
{
	FB.Event.subscribe('edge.create',
		function(response)
		{
			SwapLikes(response);
		}
	);
	
	$('#fb2').find('iframe').attr('src', $('#fb2').find('iframe').attr('src').replace('300px', '96px'));
	$('#fb2').find('iframe').css('width', '96');
};
		
function SwapLikes(likedUrl)
{
	if(likedUrl == 'http://neosmart.net/EasyBCD/')
	{
		$('#fb1').css('display', 'none');
		$('#fb2').css('display', '').css('margin-right', '15px');
	}
}

$(document).ready(function()
	{
		$('#fb2').css('display', 'none');
	}
);
