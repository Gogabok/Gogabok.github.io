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

$(document).ready(function () {
	let count = Math.random();
	let result = Math.floor(count * (6500 - 6350) + 6350)
	$("#online").html(result)
	setInterval(() => {
		let count = Math.random();
		let result = Math.floor(count * (6500 - 6350) + 6350)
		$("#online").html(result)
	}, 10000);
})

$(document).ready(function () {
	$("#menu-1").hover( function (){
		$("#menu-item-1").toggle()
	})
})
$(document).ready(function () {
	$("#menu-2").hover( function (){
		$("#menu-item-2").toggle()
	})
})
	// 	$("#menu-item-2").hide()
	// 	$("#menu-item-1").toggle()
	// }).on("mouseleave", function () {
	// 	$("#menu-item-1").hide()
	// 	$("#menu-item-2").hide()
	// }




// $(document).ready(function () {
// 	$("#menu-about-2").on("mouseover", function () {
// 		console.log(1)
// 		$("#menu-item-1").hide()
// 		$("#menu-item-2").toggle()
// 	})
// })

$(document).ready(function () {
	$(".section-types-list-content").hide()
	$("#content-1").show()
	$(".section-types-list-item").on("click", function () {
		$(".section-types-list-item").removeClass("section-types-list-item-active")
		$(event.target).addClass("section-types-list-item-active")
		$(".section-types-list-content").hide(300)
		$("#content-" + event.target.id).show(300)
	})
})
