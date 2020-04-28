function details() {

    var details = document.getElementById('details');
    if (details.style.display !== 'flex') {
        details.style.display = 'flex';
    }
    else {
        details.style.display = 'none';
    };

    var iphone = document.getElementById('iphone');
    if (iphone.style.display !== 'none') {
        iphone.style.display = 'none';
    }

    var ipad = document.getElementById('ipad');
    if (ipad.style.display !== 'none') {
        ipad.style.display = 'none';
    }
     var mac = document.getElementById('mac');
    if (mac.style.display !== 'none') {
        mac.style.display = 'none';
    }
     var  watch = document.getElementById('watch');
    if (watch.style.display !== 'none') {
        watch.style.display = 'none';
    }

};

function iphone() {
    var iphone = document.getElementById('iphone');
    if (iphone.style.display !== 'inline') {
        iphone.style.display = 'inline';
    }

    var ipad = document.getElementById('ipad');
    if (ipad.style.display !== 'none') {
        ipad.style.display = 'none';
    }
     var mac = document.getElementById('mac');
    if (mac.style.display !== 'none') {
        mac.style.display = 'none';
    }
     var  watch = document.getElementById('watch');
    if (watch.style.display !== 'none') {
        watch.style.display = 'none';
    }
};

function ipad() {
    var ipad = document.getElementById('ipad');
    if (ipad.style.display !== 'inline') {
        ipad.style.display = 'inline';
    }

    var iphone = document.getElementById('iphone');
    if (iphone.style.display !== 'none') {
        iphone.style.display = 'none';
    }
     var mac = document.getElementById('mac');
    if (mac.style.display !== 'none') {
        mac.style.display = 'none';
    }
     var  watch = document.getElementById('watch');
    if (watch.style.display !== 'none') {
        watch.style.display = 'none';
    }
};

function mac() {
    var mac = document.getElementById('mac');
    if (mac.style.display !== 'inline') {
        mac.style.display = 'inline';
    }

    var iphone = document.getElementById('iphone');
    if (iphone.style.display !== 'none') {
        iphone.style.display = 'none';
    }
     var ipad = document.getElementById('ipad');
    if (ipad.style.display !== 'none') {
        ipad.style.display = 'none';
    }
     var  watch = document.getElementById('watch');
    if (watch.style.display !== 'none') {
        watch.style.display = 'none';
    }
};

function  watch() {
    var watch = document.getElementById('watch');
    if (watch.style.display !== 'inline') {
        watch.style.display = 'inline';
    }
    var iphone = document.getElementById('iphone');
    if (iphone.style.display !== 'none') {
        iphone.style.display = 'none';
    }
     var ipad = document.getElementById('ipad');
    if (ipad.style.display !== 'none') {
        ipad.style.display = 'none';
    }
     var mac = document.getElementById('mac');
    if (mac.style.display !== 'none') {
        mac.style.display = 'none';
    }
};




function modals() {
	var modal = document.getElementById('modal');
	if (modal.style.display !== 'block') {
        modal.style.display = 'block';
    }
    else {
        modal.style.display = 'block';
    }
    var modal = document.getElementById('modal-overlay');
	if (modal.style.display !== 'block') {
        modal.style.display = 'block';
    }
    else {
        modal.style.display = 'block';
    }
}

function closes() {
    var modal = document.getElementById('modal');
    if (modal.style.display !== 'none') {
        modal.style.display = 'none';
    }
    else {
        modal.style.display = 'none';
    }
    var modal = document.getElementById('modal-overlay');
    if (modal.style.display !== 'none') {
        modal.style.display = 'none';
    }
    else {
        modal.style.display = 'none';
    }
}

function map() {

    var map = document.getElementById('map');
    if (map.style.pointerEvents = 'none') {
        map.style.pointerEvents = 'auto';
    }
    else {
        map.style.pointerEvents = 'auto';
    }
}






let modal = document.getElementById("modal");
let btn = document.getElementsByClassName("open-button");
let span = document.getElementsByClassName("close-button");

btn.onclick = function click () {
	modal.style.display = "block";
}
span.onclick = function () {
	modal.style.display = "none";
}





$(document).ready(function () {
    $('.details-menu-li-a , .remove').click(function(e) {

        $('.details-menu-li-a').removeClass('active');

        var $this = $(this);
        if (!$this.hasClass('active')) {
            $this.addClass('active');
        }
        //e.preventDefault();
    });
});

$(document).ready(function () {
    $('.remove').click(function(e) {

        $('.remove').removeClass('active');
    });
});



$(document).ready(function(){
    $(".remove , .details-menu-li").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 500);
    });
});

$(document).ready(function(){
    $(".iphone_navigation_list_href").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id  = $(this).attr('href'),

        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 500);
    });
});


