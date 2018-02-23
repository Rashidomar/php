$(document).ready(function () {

	$('#send').click(function (e) {
		//stop or cancel the submission of form data
		e.preventDefault();

		//store user input 
		var name = $('#name').val();
		var message = $('#message').val();

		if (name == ''   && message == '') {

			alert("fill In");

		}else{	
			//send user input to database
			$.ajax({
					type: "POST",
					url: "insert.php",
					//passing data to the server
					data: {
						user_name :name,
						user_comment: message
					 },
					
			});
		}
			
	});

	//load chat every 20000 millisecond
	setInterval(function () {update();},2000);

	//load chat from database 
	function update() {
		$.ajax({
			type: 'POST',
			url: 'load.php',
			 success:function (data) {
						$('#chat_body').html(data);
					}
	
			});
	}


})




	


