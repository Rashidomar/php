$(document).ready(function(){
	
	$("#submit").click(function(){
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var username = $("#username").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var con_password = $("#confirm_password").val();

		if (firstname == "" && lastname == "" && username == "" && email == "") {
			$("#head").text("All fields are required").css("color" , "cornflowerblue");
			$("#fullname").focus();
			return false;

		}else if(firstname == ""){
			$("#first").text("enter first name").css("color" , "cornflowerblue");
			$("#firstname").focus();
			return false;

		}else if(lastname == ""){
			$("#last").text("enter last name").css("color" , "cornflowerblue");
			$("#lastname").focus();
			return false;

		}else if(username == ""){
			$("#user").text("enter username").css("color" , "cornflowerblue");
			$("#username").focus();
			return false;

		}else if(email == ""){
			$("#mail").text("enter email").css("color" , "cornflowerblue");
			$("#email").focus();
			return false;

		}else if(password == ""){
			$("#pass_1").text("enter password").css("color" , "cornflowerblue");
			$("#password").focus();
			return false;

		}else if(con_password == ""){
			$("#pass_2").text("enter confirm password").css("color" , "cornflowerblue");
			$("#confirm_password").focus();
			return false;

		}else if(password != con_password){
			$("#pass_2").text("password does not much").css("color" , "cornflowerblue");
			$("#password").focus();
			return false;
		}
	})
})


