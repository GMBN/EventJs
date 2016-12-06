var php = {
    url: '/event-manager',
    type: 'POST',
    dataType: 'json',
    async:true,
    result: {},
    trigger: function (name, param, callback) {
        if(typeof param == 'function'){
            callback = param;
            param = [];
        }
        $.ajax({
            url: this.url,
            type: this.type,
            async: this.async,
            dataType: this.dataType,
            data: {event: name, param: param},
            success: function (data) {
                if (typeof callback !== 'undefined') {
                    callback(data);
                }
            }
        });

    }
};