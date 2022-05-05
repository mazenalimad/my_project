// سكريبت يعمل مع الهيد لتبديل الصفحات دون الحاجه
// لتحميل الموقع
$(document).ready(function () {
    $("#menu").click(function (event) {
        var name = 'home';
        var pages = ['home', 'insert', 'select', 'show'];


        if (event.target.tagName === 'LI' || event.target.tagName === 'IMG') {

            name = event.target.innerText;

            $("header ul LI").css("color", "white");
            $(event.target).css("color", "#01B0D3");

            if (event.target.tagName === 'IMG') {
                name = 'home';
                $("#list_1").css("color", "#01B0D3");
            } else {
                for (var i = 0; i < pages.length; i++) {
                    if (typeof (pages[i]) !== typeof (name)) {
                        name = 'apologize';
                    }
                }
            }

            var ajax = new XMLHttpRequest();

            ajax.onreadystatechange = function () {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    $('#main').html(ajax.responseText);
                }
            };

            ajax.open('GET', `Template/${name}.php`, true);
            ajax.send();
        }
    });
});

