$(function () {
    // change language
    $('#selectLang').change(function () {
        let langVal = $(this).children("option:selected").val();
        
        $.post(
            'controller/SetLangSession.php',
            {
                value: langVal
            },
            function (res, status) {
                if (status === 'success') {
                    document.location.href="index.php";
                }
            }
        );
    })

    // $('option:selected').css('color', '#fff')
})