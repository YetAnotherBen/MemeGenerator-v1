


var id="explorer";



function firstInit(){
	suppContenu();
	$.get('send-ajax-data.php',{
		param : "./" ,
		/*$('#text').val()*/
		fonctiAppel:0;

	})
    .done(function(data) {
        document.getElementById(id).innerHTML=data;
    })
    .fail(function(data) {
        alert('Error: ' + data);
    });
}

function OpenDoc(name){
	suppContenu();
	$.get('send-ajax-data.php',{
		param : name ,
		/*$('#text').val()*/
		fonctiAppel:0

	})
    .done(function(data) {
        /*alert(data);*/
       	document.getElementById(id).innerHTML=data;
    })
    .fail(function(data) {
        alert('Error: ' + data);
    });

}

function suppContenu(){
	document.getElementById(id).innerHTML="";
}

