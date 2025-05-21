<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Time In Kilometres</title>
    <script src="js/decimal-lib.min.js"></script>
    <script type="text/javascript">
        function display_c(){
            var refresh=1;
            mytime=setTimeout('display_ct()',refresh)
        }

        function display_ct() {
            var now = new Date()
            var timeInMS =  now.getHours() * 3600000 +
                            now.getMinutes() * 60000 +
                            now.getSeconds() * 1000 +
                            now.getMilliseconds();
            document.getElementById('ct').innerHTML = timeInMS;
            display_c();
        }
    </script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>

</body>
</html>
