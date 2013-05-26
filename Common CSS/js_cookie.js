var pass;
function readCookie() {
	var name = document.getElementById("Username").value;
	
  var searchName = name + "=";
  var cookies = document.cookie.split(';');
  for(var i=0; i < cookies.length; i++) {
    var c = cookies[i];
    while (c.charAt(0) == ' ')
      c = c.substring(1, c.length);
    if (c.indexOf(searchName) == 0)
      {
	  return c.substring(searchName.length, c.length);
	  }
  }
  return null;
}
function login1(trace)
{

var password = document.getElementById("Password").value;
 pass = readCookie();

 if(password==pass)
	{ alert('Log in successful');
	  trace.submit();
	}
	else if(pass!=null)
	{ alert('Log in unsuccessful');
	}
	else
	{ alert('No such username was found');
	}
	}
function redirect()
{  
	window.location = "../LAS/Register.html";
	}
function writeCookie() {
    var expires = "";
	var name= document.getElementById("Username").value;
	var value= document.getElementById("Password").value;
	var days = 365;
	  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    expires = "; expires=" + date.toGMTString();
	  }
  document.cookie = name + "=" + value + expires + "; path=/";
    window.location = 'LoginT.html';
}
