function validate(){
var name=document.getElementById('name').value;
var email= document.getElementById('email').value;
var city= document.getElementById('city').value;
var state=document.getElementById('state').value;
var pin=document.getElementById('pin').value;
var mobile=document.getElementById('mobile').value;

var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  return false;  
  }  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
else if(mobile.length<10){  
  alert("Enter valid Number");  
  return false;  
  }  
else if(city==null || city==""){  
  alert("Enter City");  
  return false;  
  }  
else if(state==null || state==""){  
  alert("Enter State");  
  return false;  
  }  
else if(pin==null || pin==""){  
  alert("Enter State");  
  return false;  
  }  
}  
