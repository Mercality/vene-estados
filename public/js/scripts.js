new Clipboard('#copy');

$('#obtain').click(function(e) {
    var token = gup('api_token', location.href);
    $.getJSON('http://veneestados.app/user/issue_token?api_token='+token, function(json) {
        console.log(json);

        $('#obtain').addClass('hide');
        $('#revoke').removeClass('hide');
        $('#apilabel').trigger('click');
        $('#apikey').val(json.access_token);

        $("#apilabel").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
            $('#apikey').attr('readonly', true);
        });

    })
});


    function gup( name, url ) {
      if (!url) url = location.href;
      name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
      var regexS = "[\\?&]"+name+"=([^&#]*)";
      var regex = new RegExp( regexS );
      var results = regex.exec( url );
      return results == null ? null : results[1];
    }
