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
            const cMS = new Decimal('299.792458');
            var now = new Date()
            var timeInMS =  now.getHours() * 3600000 +
                            now.getMinutes() * 60000 +
                            now.getSeconds() * 1000 +
                            now.getMilliseconds();
            var timeInKM = new Decimal(timeInMS);
            document.getElementById('ct').innerHTML = timeInKM.mul(cMS).toFixed(5);
            display_c();
        }
    </script>
</head>
<body onload=display_ct();>
<h1>Current time is</h1>
<br><br><br><br>
<h2><span id='ct' ></span></h2>
<h3>kilometres</h3>
<a href="projects.php">Back</a>
<a href="index.php">Home</a>
</body>
<style>
    body{
        text-align: center;
    }
    h1 {
        font-size: 30px;
    }
    h2 {
        font-size: 100px;
    }
    h3 {
        font-size: 50px;
    }

    p {
        font-size: 20px;
    }
    a {
        color: black;
    }
</style>
</html>
