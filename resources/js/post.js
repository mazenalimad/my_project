// لارسال البيانات عبر الجافا سكريبت (الاجكس ) من صفحة ادخال السجلات
// عند الضغط على زر الاضافه

// سكريبت لاستقبال البيانات من صفحة اضافة السجلات وارسالها الى 
// insert
$(document).ready(function () {
    $("#submit").click(function () {

        var form_data = new FormData();
        var files = $('#file')[0].files;

        if (files.length > 0) {
            form_data.append('file', files[0]);
            form_data.append('bookname', $('#bookname').val());
            form_data.append('edition', $('#edition').val());
            form_data.append('author', $('#author').val());
            form_data.append('bookno', $('#bookno').val());
            form_data.append('year', $('#year').val());
            form_data.append('stute', 'insert');
        }

        $.ajax({
            url: "Template/insert.php",
            method: "POST",
            data: form_data,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#data').html("<label class='text-success'>Image Uploading...</label>");
            },
            success: function (data) {
                $('#data').html(data);
            }
        });
    });
});

// سكريبت لاستقبال البيانات من صفحة اضافة السجلات وارسالها الى 
// show
$(document).ready(function() {
    $('#search').keyup(function() {

        if($('#search').val() === "")
            return 1;

        var form_data = new FormData();
        form_data.append('search', $('#search').val());
        form_data.append('stute', 'show');
        
        $.ajax({
            url: 'Template/show.php',
            type: 'POST',
            data: form_data,
            contentType: false,
            processData: false,
            success: function(data){
                $('#data_show').html(data);
            } 
        });
    });
});