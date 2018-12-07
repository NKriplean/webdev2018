// JavaScript source code
var delayTime = 2000; // milliseconds

$(function() {
  $('#tracker').click(function () {
    setTimeout(function () {
      $('.progressbar li.active:before').css({"border-color": "green"});
    }, delayTime);
  });
});

$('.progressbar li.active:before').on('click', '#tracker' function(event){
	$(event.delegateTarget).css('border-color': 'green');
});


function progessTimer(){
	var timeleft = 30;
	var downloadTimer = setInterval(function(){
	timeleft--;
	document.getElementById("countdowntimer").textContent = timeleft;
	if(timeleft <=20)
	{
		document.getElementById("")
	}
	else if(timeLeft <= 10)
	{
		
	}
	else if(timeleft <= 0)
	{
		//End of tracker
	}
	},delayTime);
}