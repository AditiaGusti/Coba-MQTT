<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> MQTT </title>
        <link rel="stylesheet" href="/css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.2/mqttws31.min.js" type="text/javascript"></script>
        <script src="/js/main.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper">
            <h1 id="Main_heading"> <b>MQTT</b></h1>
            <form id="koneksi-form">
                <b>Hostname atau IP Address dan Port Number</b><br>
                <input id="host" name="host" type="text" value="" placeholder="broker address">
                <input id="port" name="port" type="text" value="8080"><br>

                <b>Username dan Password</b><br>
                <input id="username" name="username" type="text" placeholder="Username"><br>
                <input id="password" name="password" type="password" placeholder="Password"><br>
                
                <b>Subcription Topic</b><br>
                <input id="topic_s" name="topic_s" type="text" value="#"><br>
                <input type="button" onclick="StartConnect()" value="Connect">
                <input type="button" onclick ="StartDisconnect()" value="Disconnect"><br>

                <br><b>Publish Topic dan Message</b><br>
                <input id="topic_p" name="topic_p" type="text"  placeholder="Publish Topic">
                <input id="message" name="message" type="text"  placeholder="Message">
                <input type="button" onclick="publishMessage()" value="Publish">
            </form>
            <div id="messages"></div>
         </div>
    </body>
</html>
