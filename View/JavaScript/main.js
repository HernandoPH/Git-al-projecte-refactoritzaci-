function myFunction() {
 if(document.getElementById("navbar-right").style.display=="none"){
    document.getElementById("navbar-right").style.display="block";

 }else{
    document.getElementById("navbar-right").style.display="none";
 }
}
$(document).scroll(function(){
	if($(this).scrollTop()>0){
	$("#navbar").css("background-color","rgba(120,120,120,1)");
	}
	else{
	$("#navbar").css("background-color","rgba(120,120,120,0.2)");
	}
})