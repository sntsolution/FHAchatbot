<html>
<head>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<style>
	body {
  font: 15px arial, sans-serif;
  background-color: #d9d9d9;
  padding-top: 15px;
  padding-bottom: 15px;
}
#chatborder {
      
    background-color: #f6f9f6;
    border-width: 3px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    margin-right: 20px;
    padding-top: 10px;
    padding-right: 20px;
    padding-left: 15px;
    border-radius: 15px;
    width: 21%;
    height: 470px;
}
.chatlog {
   font: 15px arial, sans-serif;
   height: 400px;
   width: 100%;
   
}
#msg {
     font: 17px arial, sans-serif;
    height: 38px;
    width: 100%;
    margin-top: 10px;
    border-radius: 10px;
    text-align: center;
}
.user
{
	background-color:#a2835e;
	float: right;
	border-radius: 25px;
    padding: 20px;
}
.bot
{
	background-color:#5c83a3;
	float: left;
	border-radius: 25px;
    padding: 20px;
}
#chat{
	overflow-y: auto;
}
.uinput{
	
}
</style>-->
<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);	
body {
 font-family: 'Open Sans', sans-serif;
  
  padding-top: 15px;
  padding-bottom: 15px;
}
#chatborder {
      
    background-image: url('img/bkg.jpg');
    border-width: 3px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    margin-right: 20px;
    padding-top: 10px;
    padding-right: 20px;
    padding-left: 15px;
    border-radius: 15px;
    width: 316px;
    height: 470px;
}
.chatlog {
   font: 15px arial, sans-serif;
   height: 400px;
   width: 298px;
   
}
#msg {
     font: 17px arial, sans-serif;
    height: 38px;
    width: 100%;
    margin-top: 10px;
    border-radius: 10px;
    text-align: center;
}
.user
{
	background-color: white;
	float: right;
	border-radius: 5px;
    	padding: 13px;
    	color: black;
	border: 5px solid transparent;
     	right: auto;
    	left: -10px;
    	border-right-color: #3588eb;
    	border-left-color: transparent;
	font-family: 'Open Sans', sans-serif;
	margin-left: 42%;
}
.bot
{
    background-color: #ffffe6;
    float: left;
    border-radius: 5px;
    padding: 13px;
    opacity: 0.9;
    top: 10px;
    right: -10px;
    border: 5px solid transparent;
    border-left-color: #3588eb;
    font-family: 'Open Sans', sans-serif;
}
#chat{
	overflow-y: auto;
}
#chat::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}
#chat::-webkit-scrollbar
{
	width: 5px;
	background-color: #F5F5F5;
}
#chat::-webkit-scrollbar-thumb
{
	background-color: #3588eb;
	border: 1px solid #555555;
	border-radius: 100px;
}
	ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:7px;  
           }
	
.su::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
}
.su::-webkit-scrollbar
{
	width: 5px;
	background-color: #F5F5F5;
}
.su::-webkit-scrollbar-thumb
{
	background-color: #3588eb;
	border: 1px solid #555555;
	border-radius:100px;
	
}
.su{
	height: 150px;
	overflow-y: auto;
}
</style>
<script type="text/javascript">
 $(function () {
 	 $("#msg").focus();
        $('form').bind('submit', function (event) {

		event.preventDefault();// using this page stop being refreshing 

          $.ajax({
            type: 'POST',
            url: 'find.php',
            data: $('form').serialize(),
            success: function (response) {
              alert('form was submitted'+response);
              $("#msg").val("");
			  var obj = jQuery.parseJSON(response);
			
			  var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+ obj.chat.bot +"<\p>";
			 alert( obj.chat.user +"\n"+obj.chat.bot+"\n");
			 if(typeof obj.chat.cid != "undefined"){
			 	$("#Id").val(obj.chat.cid);
			 }
			 if(typeof obj.chat.uid != "undefined"){
			 	$("#UId").val(obj.chat.uid);
			 }
			 if(typeof obj.chat.nid != "undefined"){
			 	$("#id").val(obj.chat.nid);
			 }
			  $("div#chat").append(txtval).html();
			  $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);	
            }
            
          });
         });
      });


</script>
</head>
<body>
<form name="chatform">
<div id='chatborder'>
<div class="chatlog msg_container_base" id="chat">
<!--<textarea name="chat" id="chat" cols="60" rows="20"></textarea>-->

</div>
<div class="uinput">
<input name="msg" id="msg" placeholder="Enter message here.." size="50" autocomplete="off" />
<div id="chtmsg" class="su"></div>
</div>	
</div>
<!--<input type="submit" name="submit" value="send"/>-->
<input type="hidden" name="Id" id="Id" />
<input type="hidden" name="UId" id="UId" />
<input type="hidden" name="id" id="id" />
</form>
</body>
</html>
