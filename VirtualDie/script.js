var multInput = document.querySelector('#multiplier');
multInput.value = 6;

var resultButton = document.querySelector('#resultButton');
var resultSpan = document.querySelector('#resultSpan');

resultButton.addEventListener("click", function(){
	var mult = multInput.value;

	for(var i = 0; i < 10; i++)
	{
		setTimeout(function(){
			var res = Math.floor(Math.random() * mult) + 1;
			resultSpan.textContent = res;
			console.log(res);
		}, i*50);
	}	
});
