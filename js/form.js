$(function(){

	$('body').on('submit','form',function(){
		var form = $(this);
		$.ajax({
			beforeSend:function(){
				$('.loading').fadeIn();
			},
			url: "ajax/form.php",
			type: "POST",
			data: $(form).serialize(),
			success: function(data){
				$('.mostrar').html(data);
				$('.loading').fadeOut();
				$(form)[0].reset();
			}
		});
		return false;
	});
})
