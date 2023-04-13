<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function updatetime(){
            const xhttp = new XMLHttpRequest();

            console.log("UPDATED TIME");

            xhttp.onload = function(){
                //console.log("Time Updated");
                //document.getElementById("time").innerHTML = this.responseText;
                
                jsonData = JSON.parse(this.responseText);

                document.getElementById("time").innerHTML =jsonData.time;

                console.log("Favorite Color: " . jsonData.favColor);

            }

            xhttp.open("GET", "time.php");
            xhttp.send();
        }

    </script>
    

</head>
<body>

    <div id = time ><?php echo date("Y-m-d H:i:s"); ?></div>
    <br>
    <button onclick="updatetime(timezone)"> Update Time </button>

    <script>
        var interval =setInterval( updatetime, 1000);

    </script>

</body>
</html>