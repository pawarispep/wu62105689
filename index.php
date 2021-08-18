<body>
<h1>Pawaris Kongjan 62105689 </h1>
<div class="container">
        <div class="row">
                <div class="col-sm-7">
                        <div class="container">
                                <div class="row">      
<h2>Humidity</h2>
<iframe src="https://thingspeak.com/channels/1458413/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
        style="border:none;" height="300px" width="500px"></iframe>
                                 </div>
                         <div class="row">
<h2>Temperature</h2>
<iframe src="https://thingspeak.com/channels/1458413/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
        style="border:none;" height="300px" width="500px"></iframe>                                 
                          </div>       
                         <div class="row">
<h2>Map</h2>
<iframe src="https://thingspeak.com/channels/1458413/maps/channel_show" 
        style="border:none;" height="300px" width="500px"></iframe>                                 
                         </div>
                                </div>
                        </div>
<?php
        $api=file_get_contents("https://api.thingspeak.com/channels/1458413/feeds.json?results=2");
        $json=json_decode($api);
        
        $humidity=$json->feeds[1]->field1;
        $temperature=$json->feeds[1]->field2;     
?>        
<div class="col-sm-5">
        <h3 align= "center">Data Lastest</h3>
        <div class="container">
        <h3 align= "center">Humidity: <?php echo $humidity; ?><br>
        Temperature: <?php echo $temperature; ?><br>
                </h3>
                </div>
                </div>
                </div>
        </div>


</body>

