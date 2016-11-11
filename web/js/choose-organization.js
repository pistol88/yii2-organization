if (typeof pistol88 == "undefined" || !pistol88) {
    var pistol88 = {};
}


pistol88.sendOrganization = {
    init: function() {
        $('.organizations-widget form').on('submit', this.sendOrganization);
    },
    sendOrganization: function() {
        var form = $(this);
		$(form).css('opacity', '0.3');
		$.post(
			$(form).attr('action'),
			$(form).serialize(),
            function(answer) {
				var json = $.parseJSON(answer);
                if(json.result == 'success') {
                    $(form).css('opacity', '1');
                    document.location = document.location;
                }
                else {
                    alert(json.error);
                }
            }
        );
        
        return false;
    }
}

pistol88.sendOrganization.init();
