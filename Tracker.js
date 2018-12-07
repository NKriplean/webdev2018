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
	//Add in if change away from class for the first event | document.getElementById("active1"),styleSheets.border-color = "green";
	var downloadTimer = setInterval(function(){
	timeleft--;
	if(timeleft <=20)
	{
		document.getElementById("active2").styleSheets.border-color = "green";
		
	}
	else if(timeLeft <= 10)
	{
		document.getElementById("active3").styleSheets.border-color = "green";
	}
	else if(timeleft <= 0)
	{
		document.getElementById("active4").styleSheets.border-color = "green";
	}
	},delayTime);
}