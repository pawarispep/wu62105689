<body>
<h1>Pawaris Kongjan 62105689 </h1>
<h2>Humidity</h2>
<iframe src="https://thingspeak.com/channels/1458413/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15" 
        style="border:none;" height="300px" width="500px"></iframe>

<?php
        $api_url="https://api.thingspeak.com/channels/1458413/feeds.json?results=2";
        $json_data=file_get_content($api_url);
        $response_data=json_decode($json_data);
        
        $humidity=$response_data->feeds[1]->field1;
        $temperature=$response_data->feeds[1]->field2;
        
        
        
        echo "Humidity: ".$humidity;
        echo "Temperature: ".$temperature;
?>
     
        
        
        
<h2>Temperature</h2>
<iframe src= "https://thingspeak.com/channels/1458413/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"
        style="border:none;" height="300px" width="500px"></iframe>
<h2>Map</h2>
<iframe src= "https://thingspeak.com/channels/1458413/maps/channel_show" style="border:none;" height="500px" width="500px"></iframe>  
</body>
  
   

