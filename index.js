$(document).ready(function() {
// 	/**
//  *	Display a form to add new contact
//  */
	$('.js-insert').on('click', function(event) {
		event.preventDefault();
    $('.js-form').toggleClass('is-visible');
	});


// 	/**
// 	*	Display delete column
// 	*/
	// $('.js-delete').on('click', function(event) {
	// 	event.preventDefault();
	// 	$('.delete-row').toggleClass('is-visible');
	// 	$('.js-form').removeClass('is-visible');
	// });

	// /**
	// // *	Delete row
	// // */
	// // $('.contact-list').on('click', '.delete-row', function(event) {
	// // 	event.preventDefault();
	// // 	$(this).closest('.contact').remove();
	// // });
    //   $(".js-delete").click(function(e) {
    //         e.preventDefault;
    //         $.ajax({
    //             type: 'POST',
    //             // url: <?= site_url('Proccess/contact.php') ?>,
    //             // data: {
    //             //     "action": 'delete',
    //             //     'id': <?= $obj['id'] ?>
    //             // },
    //             timeout: 500, // timeout milliseconds
              
	// 		success:function(response){
    //           alert("successfully remove");
	// 		},
	// 		error:function(){
    //            resultbox.html('Error')
	// 		}
    //         });
    //     })
	/**
	*	Form submit button event
	*/
	// $('.js-form').submit(function(event) {
	// 	event.preventDefault();
	// 	let form=$(this);
	// 	let resultbox=form.find('.contact-list');
	// 	resultbox.html('...');
	// 	$.ajax({
	// 		type:'POST',
	// 		url:form.attr('action'),
	// 		data:form.serialize(),
	// 		timeout:2000,
	// 		success:function(response){
    //            resultbox.html(response)
	// 		},
	// 		error:function(){
    //            resultbox.html('Error')
	// 		}
	// 	})
	// 	$('.js-form').removeClass('is-visible');
	// 	$('.js-form-overlay').removeClass('is-visible');
	// });




	/**
	*	Form cancel button event
	*/
	// $('.js-form').on('click', '.js-cancel', function(event) {
	// 	$(this).closest('form').find("input, textarea").val("");
	// 	$('.js-form').removeClass('is-visible');
	// 	$('.js-form-overlay').removeClass('is-visible');
	// });
});
