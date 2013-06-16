
function ajaxcall(roomlog,rtype){
	alert("yo");
try {
request = new XMLHttpRequest();
} catch (tryMS) {
	try {
		request = new ActiveXObject("Msxm12.XMLHTTP");
	} catch (otherMS) {
		try {
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}	catch (failed) 
		{request = null;
	}
}
}
alert("yo");
var url = "http://127.0.0.1/Common CSS/log.php?log=" + roomlog + '&type+ rtype;
request.open("GET",url,true);=' 
request.onreadystatechange = function () {
alert("yo");	
	if (request.readyState == 4) {
						alert("yo");		
				if (request.status == 200) {
				alert("yo");				
				}
		}
} 
request.send(null);		 
}