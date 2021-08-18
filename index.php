<body>
<h1>Pawaris Kongjan 62105689 </h1>
<h2>Humidity</h2>
<iframe src="https://thingspeak.com/channels/1458413/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
        style="border:none;" height="300px" width="500px"></iframe>
<h2>Temperature</h2>
<iframe src="https://thingspeak.com/channels/1458413/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
        style="border:none;" height="300px" width="500px"></iframe>
<h2>Map</h2>
<iframe src="https://thingspeak.com/channels/1458413/maps/channel_show" 
        style="border:none;" height="300px" width="500px"></iframe>
</body>
<?php
        $api=file_get_contents("https://api.thingspeak.com/channels/1458413/feeds.json?results=2");
        $json=json_decode($api);
        
        $humidity=$json->feeds[1]->field1;
        $temperature=$json->feeds[1]->field2;

        echo $humidity;
        echo $temperature;
?>
