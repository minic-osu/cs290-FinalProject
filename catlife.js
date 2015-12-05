function display(num)
{

	document.getElementById("result").innerHTML = ("You will live "+num+" years.");
}


function random(){
	var x = Math.floor((Math.random()*99)+1);	
	return x;
	}


function compute(num)
{
	var x = random();
	if(num == 1)
	{
		display(x);
	}
	else if(num ==2)
	{
		x+=x;
		display(x);
	}
	else if(num==3)
	{
		x+=7;
		display(x);
	}
	else{
		display(x);
	}
}


alert("inside");


document.getElementbyId("image")=function() {compute(1)};
document.getElementbyId("image2")=function(){compute(2)};
document.getElementbyId("image3")=function(){compute(3)};
document.getElementbyId("image4")=function(){compute(4)};
