function display(num)
{

	document.getElementById("result").innerHTML = ("You will live "+num+" years.");
}


function random(){
	var x = Math.floor((math.random()*99)+1);	
	return x;
	}


function compute(num)
{
	var x = random();
	if(num == 1)
	{
		display(x);
	}
	elseif(num ==2)
	{
		x+=x;
		display(x);
	}
	eleif(num==3)
	{
		x=*7;
		display(x);
	}
	else{
		display(x);
	}
}


alert("inside");


document.getElementbyId("Image")=function() {compute(1)};
document.getElementbyId("Image2")=function(){compute(2)};
document.getElementbyId("Image3")=function(){compute(3)};
document.getElementbyId("Image4")=function(){compute(4)};
