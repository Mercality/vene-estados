new Clipboard('#copy');

$(document).ready(function() {
    if ($('#key-page').attr('id') == 'key-page') {
        var token = gup('api_token', location.href);
        $.getJSON('http://veneestados.app/user/checkfortoken?api_token='+token, function(json) {
            if (json.access_token === null) {
                $('.obtener').removeClass('hide');
            } else {
                $('.revocar').removeClass('hide');
                obtenerKey();
            }
            console.log(json);

        });
    }

});

$('#obtain').click(obtenerKey());

function obtenerKey() {
    var token = gup('api_token', location.href);
    $.getJSON('http://veneestados.app/user/issue_token?api_token='+token, function(json) {
        console.log(json);

        $('#obtain').addClass('hide');
        $('#revoke').removeClass('hide');
        $('#apilabel').trigger('click');
        $('#apikey').val(json.access_token);
        var fecha = new Date(json.expiry)
        $('#vencimiento').html(fecha.toLocaleDateString() + ' ' + fecha.toLocaleTimeString());

        $("#apilabel").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
            $('#apikey').attr('readonly', true);
        });

    })
}
















    function gup( name, url ) {
      if (!url) url = location.href;
      name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
      var regexS = "[\\?&]"+name+"=([^&#]*)";
      var regex = new RegExp( regexS );
      var results = regex.exec( url );
      return results == null ? null : results[1];
    }
