<!doctype html>
<html>
    <head>
        <title>long polling</title>
    </head>
    <body>
        <div id="main"></div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
        <script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.6.2.min.js"%3E%3C/script%3E'))</script>
        <script>
            function fetch() {
                $.ajax({
                    url: 'http://localhost/long_polling/server.php',
                    async: true,
                    type: 'get',
                    dataType: 'json',
                    success: function(ret, textStatus, jqXHR) {
                        $('#main').append('<p>' + ret.aaa + '</p>');
                        fetch();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        setTimeout(fetch, 5000);
                    }
                });
            }

            $(function(){
                fetch();
            });
        </script>
    </body>
</html>
