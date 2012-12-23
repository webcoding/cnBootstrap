$(document).ready(function(){
	
	var myFormObj = {};
	
	// We are linking the form fields to myFormObj and trigger
	// the change event, so the data is updated initially.
	
	$('#originalForm').link(myFormObj).find('input[type=text]').trigger('change');
	
	var buttons = $('#originalForm input[type=button]');
	
	buttons.eq(0).click(function(){
		outputData('The myFormObj variable',myFormObj);
	});
	
	buttons.eq(1).click(function(){
		$(myFormObj).data("name","Homer");
	});
	
	buttons.eq(2).click(function(){
		outputData('This button\'s HTML5 data attribute',$(this).data('someobj'));
	});
	
	function outputData(title,obj){
		try{	
			$('#output').html('<label>'+title+':</label><pre>'+formatObject(obj)+'</pre>');
		}
		catch(e){
			$('#output').html('The output cannot be displayed in your browser');
		}
	}
	
	function formatObject(obj){
		return JSON.stringify(obj).replace(/,/g,',\n    ').replace('{','{\n    ').replace('}','\n}')
	}
	
});