
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$('.learnmore-form').on('submit', function(e){
	$(this).find($('.alert-danger')).remove();
	$(this).find($('.alert-warning')).remove();

	e.preventDefault()
	var token = $('input[name=_token]').val();
    var firstname = $(this).find('input[name=firstname]').val();
    var lastname = $(this).find('input[name=lastname]').val();
    var email = $(this).find('input[name=email]').val();
    var company = $(this).find('input[name=company]').val();
    var phone = $(this).find('input[name=phone]').val();
    var policy = $(this).find('input[name=policy]').prop('checked');
    var msgEmailSent = ''
    var errorMsg = ''
    
	$.ajax({
		url: "/demorequest",
		data:{
			firstname: firstname,
			lastname: lastname,
			email: email,
			company: company,
			phone: phone,
			policy: policy
		},
		method: "POST"
	}).done(function(response) {
		msgEmailSent = 'Thanks for reaching out. We will be in touch soon!'
		$('.learnmore-form').prepend('<div class="alert alert-warning alert-dismissible fade show" >'+ msgEmailSent +'<button type="button" class="close" data-dismiss="alert" aria-label="Close">    <span aria-hidden="true">&times;</span></button></div>')

		console.log(response)
	}).fail(function(data) {
	    var errors = data.responseJSON.errors;
	    $.each(errors, function(i, item) {
	    	errorMsg = errorMsg + '<p>'+ item +'</p>'
		})

	    $('.learnmore-form').prepend('<div class="alert alert-danger alert-dismissible fade show" ><strong>Whoops! Something was missing.</strong>' + errorMsg  +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>')
	    console.log(errors)
	});

})
