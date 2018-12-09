// JavaScript source code
var delayTime = 2000; // milliseconds

//$(function() {
//  $('#tracker').click(function () {
//    setTimeout(function () {
//      $('.progressbar li.active:before').css({"border-color": "green"});
//    }, delayTime);
//  });
//});

//$('.progressbar li.active:before').on('click', '#tracker' function(event){
	$(event.delegateTarget).css('border-color': 'green');
//});


function progressTimer(){
	var timeleft = 30;
	alert("hello");
	var downloadTimer = setInterval(function(){
		timeleft--;
		if(timeLeft <=30 && timeLeft > 20)
		{
			alert("Hi from a1");
			document.getElementById("active1").styleSheets.border-color = "green";
		}
		else if(timeleft <=20 && timeLeft > 10)
		{
			document.getElementById("active2").styleSheets.border-color = "green";
		
		}
		else if(timeLeft <= 10 & timeLeft > 0)
		{
			document.getElementById("active3").styleSheets.border-color = "green";
		}
		else if(timeleft <= 0)
		{
			document.getElementById("active4").styleSheets.border-color = "green";
		}
	},delayTime);
}