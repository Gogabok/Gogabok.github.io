$(document).ready(function () { 
 $(function(){
    $("a[href^='#']").click(function(){
    	var _href = $(this).attr("href");
    	$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        	return false;
    	});
	});
	$("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
			return false; 
		}
	);
});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        success: function(response) {
        	result = $.parseJSON(response);
        	alert('Спасибо за вашу заявку!')
    	},
    	error: function(response) {
            alert('Произошла ошибка')
    	}
 	});
}