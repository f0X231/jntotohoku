
function updateText() {
    var i18n = $.i18n();
    //$(this).addClass('active');
    var language = $(this).data('options').lang;

    i18n.locale = language;
    i18n.load('./src/lang/' + language + '.json', language).done(function() {
        $('.result').text(localizedMessage);
    });
    
}

function switchLanguage() {
    $('.switch-lang').on('click', updateText);
}



$.i18n.debug = true;    // Enable|Disable debuging of switch language.
jQuery(document).ready(function() {
    switchLanguage();
});


