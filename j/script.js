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
