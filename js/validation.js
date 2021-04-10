function validate(){
var name=document.getElementById('name').value;
var email= document.getElementById('email').value;
var city= document.getElementById('city').value;
var state=document.getElementById('state').value;
var pin=document.getElementById('pin').value;
var mobile=document.getElementById('mobile').value;

var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
window.location.href = "../components.modal.html";
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address");  
  }  

else if(mobile.length<10){  
  alert("Enter valid Number");    
  }  
else if(city==null || city==""){  
  alert("Enter City");  
  }  
 


  else if(mobile.length>=10 && name!=null && address!=null){

    window.location.href = "http://net-informations.com";

  }




}  
