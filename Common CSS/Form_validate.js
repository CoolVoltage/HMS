var check =[false,false,false,false,false];
function validate(form,helpId,helptext,pattern,i)
{ 	
if(form.value.length==0||!pattern.test(form.value))
	{ helpId.innerHTML = helptext;
	check[i]=false;
	return;
	}
	else
	{
	helpId.innerHTML ="";
	check[i]=true;	
	}
if (i==3) {
	
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

var url = "http://127.0.0.1/Common CSS/usercheck.php?uname=" + form.value;
request.open("GET",url,true);
request.onreadystatechange = displayDetails;
request.send(null);
}
return;
}
function displayDetails() {	
		
	if (request.readyState == 4) {
							
				if (request.status == 200) {
	if(request.responseText=="true")
	{
	check[3]=true;
	var j = document.getElementById("help_username");
	j.innerHTML="";
	}
	else {	
	
	var j = document.getElementById("help_username");
	j.innerHTML="Username already exists";
	check[3] = false;
}
}
}
}
function submit1(trace)
{ var flag=1;
	var j;
	
	if(trace.name=="travel")
	{j=2;}
	else
	{j=4;}
	for(var i=1;i<=j;++i)
	{ if(!check[i])
		{flag=-1;
			alert(i);
		}
		}
	if(flag==-1)
	 { alert("Form Incomplete");
	 }
	 else
	trace.submit();
	}

function dropbox() {
var day=document.getElementById("day");
var month=document.getElementById("month");
var year=document.getElementById("year");
for(var i=1;i<=31;++i)
	{
	var option=document.createElement("option");
	option.value=i;	
	option.text=i;
	day.appendChild(option);
}
for(var i=1;i<=12;++i)
	{
	var option=document.createElement("option");
	option.value=i;	
	option.text=i;
	month.appendChild(option);
}
for(var i=1950;i<=1995;++i)
	{
	var option=document.createElement("option");
	option.value=i;	
	option.text=i;
	year.appendChild(option);
}
}