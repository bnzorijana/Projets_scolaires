$(document).ready(function(){
		$("#cacher1").on('click',function(){
			$("#ph4").hide();
			$("#ph5").hide();
			$("#ph6").hide();
			$("#ph7").hide();
			$("#ph8").hide();
			$("#ph9").hide();
			$("#ph1").fadeIn('slow');
			$("#ph2").fadeIn('slow');
			$("#ph3").fadeIn('slow');

		});
		$("#cacher2").on('click',function(){
			$("#ph1").hide();
			$("#ph2").hide();
			$("#ph3").hide();
			$("#ph7").hide();
			$("#ph8").hide();
			$("#ph9").hide();
			$("#ph4").fadeIn('slow');
			$("#ph5").fadeIn('slow');
			$("#ph6").fadeIn('slow');

		});
		$("#cacher3").on('click',function(){
			$("#ph1").hide();
			$("#ph2").hide();
			$("#ph3").hide();
			$("#ph4").hide();
			$("#ph5").hide();
			$("#ph6").hide();
			$("#ph7").fadeIn('slow');
			$("#ph8").fadeIn('slow');
			$("#ph9").fadeIn('slow');

		});
		$("#montrer").on('click',function(){
			$("#ph1").fadeIn('slow');
			$("#ph2").fadeIn('slow');
			$("#ph3").fadeIn('slow');
			$("#ph4").fadeIn('slow');
			$("#ph5").fadeIn('slow');
			$("#ph6").fadeIn('slow');
			$("#ph7").fadeIn('slow');
			$("#ph8").fadeIn('slow');
			$("#ph9").fadeIn('slow');

		});
});