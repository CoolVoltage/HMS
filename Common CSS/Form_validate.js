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

var url = "../Common CSS/usercheck.php?uname=" + form.value;
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
var noOfdays = {0:31,1:28,2:31,4:31,6:31,7:31,9:31,11:31,3:30,5:30,8:30,10:30};
var nameofmonth = {0:"January",1:"February",2:"March",4:"May",6:"July",7:"August",9:"October",11:"December",3:"April",5:"June",8:"September",10:"November"};
window.onload = function () {
	today = new Date;
	currentMonth = today.getMonth();
	currentYear = today.getFullYear();
	currentNum = today.getDate();
	currentDay = today.getDay();
	Setcalendar();
	Setoptions();
		var tds = document.getElementById("calendar").getElementsByTagName("td");
	for (var i=0;i<tds.length;++i) {
	var td=tds[i];	
	td.onclick = function () {
	if (this.innerHTML) {
	if(document.getElementById("clicked")){
	document.getElementById("clicked").style.backgroundColor="white";
		document.getElementById("clicked").id="";
	}
	this.style.backgroundColor="lightblue";
	this.id="clicked";
	document.getElementById("DAy").value=this.innerHTML;
	document.getElementById("MOnth").value=currentMonth;
	document.getElementById("YEar").value=currentYear;
}
}
}
}
function Setoptions() {

	var select = document.getElementById("month");
	
	for (var i=0;i<12;++i) {
	var option = document.createElement("option");
	option.value=i;
	option.innerHTML=nameofmonth[i];
	if (i==currentMonth) {
	option.setAttribute("selected","selected");
}
	select.appendChild(option);
}	
}
function Setcalendar() {
var j;
var date=1;
firstDay= new Date(currentYear,currentMonth,1);
var tr = document.getElementsByTagName("tr");
for (var i=1;i<tr.length;++i) {
	if(i==1)
{	j=firstDay.getDay();
	}
	else 
	j=0;
td=tr[i].getElementsByTagName("td");
for (j;j<td.length;++j) {
	if (date<=noOfdays[currentMonth]) {
	td[j].innerHTML=date;
	date++;
	}
	else {
	return;
}
}
}
}
function changecalendar()
{
currentMonth = document.getElementById("month").value;
currentYear = document.getElementById("year").value;
var tds=document.getElementsByTagName("td");
for (var i=0;i<tds.length;i++) {
	tds[i].innerHTML="";
}
Setcalendar();
}