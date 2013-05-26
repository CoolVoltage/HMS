
function calc()
{ 
  var list=["Standard Room(2)","Deluxe Suite(3)","Executive Suite(4)","Presidential Suite(5)","Tamilnadu Suite(6)","Royal Club Suite Room(8)"];
  
  var anum=document.getElementById("anum").value;
  var cnum=document.getElementById("cnum").value;
  var rtype=document.getElementById("rtype"); 
  if(cnum=="nil")
  return;
  while(rtype.firstChild)
  rtype.removeChild(rtype.firstChild);
  for(var i=0;i<=5;++i)
  {		var option=document.createElement("option");
		option.value= list[i];
		option.text= list[i];
		
		rtype.appendChild(option);
	}
    anum = parseInt(anum) + (parseInt(cnum)/2);
	
   
   i=2; 
  while(i<anum&&i<=6)
  { rtype.removeChild(rtype.firstChild);
  ++i;
  }

}
