function toggleDiv(divId) {
	//$("#"+divId).toggle();
	
	if(divId == 'about'){
		$("#"+divId).fadeIn();
		$("#projects").fadeOut();
		$("#contact").fadeOut();		
	}
   	if(divId == "projects"){
		$("#"+divId).fadeIn();
		$("#about").fadeOut();
		$("#contact").fadeOut();			   	
   	}
   	if(divId == "contact"){
		$("#"+divId).fadeIn();
		$("#about").fadeOut();
		$("#projects").fadeOut();			   	
   	}
}