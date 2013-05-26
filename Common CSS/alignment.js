function resize()
{   var cw= document.body.clientWidth;
	document.body.style.marginLeft = cw*.175 + 'px' ;
	document.body.style.width = cw*.682 + 'px';
	document.getElementById("img").style.width= cw*.682 +'px';
}
function myacc()
{ 	var cm = document.getElementByClass("change");
	cm.style.paddingRight = 50 +'px';
	}