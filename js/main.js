$('#projectDetails').live("click", function(e){
	
	var dataParent = $(this).parent().parent(), dataReadme = dataParent.find("#readme:first").html(), dataName = dataParent.find("#name:first").html();
	console.log(dataReadme.indexOf("No Readme"));
	if(dataReadme.indexOf("No Readme") >= 0){
		$('#header h1').html(dataName);
	}else{
		$('#header h1').html("");
	}	
	$('#header p').html(dataReadme);
	$('body').scrollTop(0);
});