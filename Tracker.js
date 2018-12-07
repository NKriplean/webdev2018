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