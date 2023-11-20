document.addEventListener("DOMContentLoaded", function (event){
    function WebSocketTest(){
      if ("WebSocket" in window){
        var ws = new WebSocket("ws://127.0.0.1:2020");
      
        ws.onopen = function()
        {
          ws.send("Message to send");//this doesn't work
        };
      
        ws.onmessage = function (evt) 
        { 
          var received_msg = evt.data;
          alert("Message is received...");
          document.getElementById("message").innerHTML += received_msg;
        };
      
        ws.onclose = function()
        { 
          alert("Connection is closed..."); 
        };
      
        ws.onerror = function(error){
          alert('Error detected: ' + error);
        }
      }
      else
      {
        // The browser doesn't support WebSocket
        alert("WebSocket NOT supported by your Browser!");
      }
}
})