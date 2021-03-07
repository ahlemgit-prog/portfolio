$('#mc-embedded-subscribe-form').on('submit'(function(e){
	e.preventDefault();
	var formdata = $(this).serialize();
	var url = $(this).attr("action");
	$.ajax({
				url:"https://gmail.us1.list-manage.com/subscribe/post?u=e258f2c790beb560c7583457b&amp;id=5aa8caa585",
        method: "post",
        dataType: "JSON",
				data: formdata,
        beforeSend: function(){
        	$('#msg').html("<div class='alert alert-info'>Patience...</div>");
        }
    }).done(function (result) {
        if('#'){
            $('#').html("<div class='alert alert-success'>Merci pour votre inscription !</div>");
            $('#')[0].reset();
        }else {
            $('#').html("<div class='alert alert-danger'>Merci !</div>");
        }
    }).fail(function (xhr, textStatus, errorThrown) {
        $('#').html("<div class='alert alert-danger'>Une erreur inattendue s'est produite</div>");
    });
});
