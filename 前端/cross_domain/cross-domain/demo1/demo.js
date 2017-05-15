$(
    function() {
        $("#btnTest").click(function(event) {
            // $.getJSON("http://localhost:8080/data.php?callback=?", function(data) {
            //     $('#res').html(data.join(','));
            // });


            $.ajax({
                    url: 'http://localhost:8080/data.php',
                    type: 'get',
                    dataType: 'json',
                    data: { callback: "getdata" }
                })
                .done(function(data) {
                    console.log("success:" + data);
                })
                .fail(function(data) {
                    console.log("error:" + data);
                })
                .always(function(data) {
                    //console.log("complete:" + data);
                });
        });

    }
)
