
function validation()
{
	
var name=document.getElementById("name").value;
var f_name=document.getElementById("f_name").value;
var addr=document.getElementById("addr").value;
var clg=document.getElementById("clg").value;
var email=document.getElementById("email").value;
var mob=document.getElementById("mob").value;
var pass=document.getElementById("pass").value;
var cpass=document.getElementById("cpass").value;
err1=document.getElementById("err1");
err2=document.getElementById("err2");
err3=document.getElementById("err3");
err4=document.getElementById("err4");
err5=document.getElementById("err5");
err6=document.getElementById("err6");
err7=document.getElementById("err7");
err8=document.getElementById("err8");
b=[err1,err2,err3,err4,err5,err6,err7,err8];
var a=/^[A-Za-z0-9\s]+$/;
var n=/^[A-Za-z\s]+$/;
var e=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
var m=/^[6-9]{1}[0-9]{9}$/;	 
	if(name.length<6)
	{
		err1.innerHTML="*Name should have atleast 6 characters";
        err1.style.color="red";
    }
	else{    
	if(n.test(name))
	{
		err1.innerHTML="*Valid";
        err1.style.color="red";
     	
	}	
	else{
		err1.innerHTML="*Only alphabets are allowed in name ";
        err1.style.color="red";
     	}
}
     
	 if(f_name.length<6)
	 {
       err2.innerHTML="*Name should have atleast 6 characters";
       err2.style.color="red";
	 }
	 else
	 {
		 if(n.test(f_name))
		 {
			 err2.innerHTML="*Valid"; 
		     err2.style.color="red";
		 }
		 else{
		 err2.innerHTML="*Only alphabets are allowed in name ";
         err2.style.color="red";
		 }
		 
	 }	 
	 
	
	if(pass.length<6)
	 {
       err7.innerHTML="*Password should have atleast 6 characters";
       err7.style.color="red";
	 }
	 else
	 {
		 
			 err7.innerHTML="*Valid"; 
		     err7.style.color="red";
			 
	 }	 
		if(cpass==pass)
	 { 
       err8.innerHTML="*Valid";
       err8.style.color="red";

	 }
	 else{
		
       err8.innerHTML="*Password do not match. ";
       err8.style.color="red";	 }
  
     
	 
	if(clg.length<6)
	 {
       err4.innerHTML="*Name should have atleast 6 characters";
       err4.style.color="red";
	 }
	 else
	 {
		 if(n.test(clg))
		 {
			 err4.innerHTML="*Valid"; 
		     err4.style.color="red";
		 }
		 else{
		 err4.innerHTML="*Only alphabets are allowed in name.";
         err4.style.color="red";
		 }
		 
	 }	 
	  
  if (addr.length<6)
  {
	  err3.innerHTML="*Address should have atleast 6 characters.";
	  err3.style.color="red";
  }
  else
  {
	  if(a.test(addr))
	  {
		  err3.innerHTML="*Valid";
		  err3.style.color="red";
	  }		  
	  else{
		
		  err3.innerHTML="*Address should not contain special characters.";
		  err3.style.color="red";  
	  }
  }
  
if(e.test(email))
{
		err5.innerHTML="*Valid";
      err5.style.color="red";
   }	
	else{
		err5.innerHTML="*Invalid Email";
      err5.style.color="red";
   	
	}
	
	
  if (mob.length<10)
  {
	  err6.innerHTML="*Mobile number should consist of 10 digits.";
	  err6.style.color="red";
  }
  else
  {
	  if(m.test(mob))
	  {
		  err6.innerHTML="*Valid";
		  err6.style.color="red";
	  }		  
	  else{
		
		  err6.innerHTML="*Please enter valid characters.";
		  err6.style.color="red";  
	  }
  }	
  
  var count=0;
   for(i=0;i<=7;i++)
   {
	   if(b[i].innerHTML=="*Valid")
		   count++;
	   
   }
   if(count==8)
   {
	   
      return true;
   }
	else
	  return false;
}













