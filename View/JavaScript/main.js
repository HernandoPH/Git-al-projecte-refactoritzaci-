function myFunction() {
 if(document.getElementById("navbar-right").style.display=="none"){
    document.getElementById("navbar-right").style.display="block";

 }else{
    document.getElementById("navbar-right").style.display="none";
 }
}
$(document).scroll(function(){
	if($(this).scrollTop()>0){
	$("#navbar").css("background-color","rgba(24,28,33,1)");
	}
	else{
	$("#navbar").css("background-color","rgba(24,28,33,0.2)");
	}
})
function myFunction1() {
  if(document.getElementById("hidden").style.display=="none"){
  	document.getElementById("hidden").style.display="block";
  }else{
  	document.getElementById("hidden").style.display="none";
  }
}
document.getElementById("hidden").style.display="none";
