<html>
<head>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="js/jquery.min.js"></script>
<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);	
body {
 font-family: 'Open Sans', sans-serif;
 
  padding-top: 15px;
  padding-bottom: 15px;
}
#chatborder {
    background-color: #FFF2E7;
    border-width: 3px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    margin-right: 20px;
    padding-top: 10px;
    padding-right: 20px;
    padding-left: 15px;
    border-radius: 4px;
    width: 270px;
    height: 470px;
}

.chatlog {
   font: 15px arial, sans-serif;
   height: 400px;
   width: 277px;
   
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
	background-color: #F5AC77;
	float: right;
	border-radius: 5px;
    padding: 13px;
    color: white;
	border: 5px solid transparent;
    right: auto;
	left: -10px;
    
    border-left-color: transparent;
	font-family: 'Open Sans', sans-serif;
	margin-left: 35%;
}
.bot
{
    background-color:white;
    float: left;
    border-radius: 5px;
    padding: 13px;
    opacity: 0.9;
    color: black;
    top: 10px;
    right: -10px;
    border: 5px solid transparent;
    
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
.txtopt{
	
	background-color: transparent;
    border-radius: 50px;
    border-style: solid;
    border-color: #3181f6;
	margin-bottom: 5%;
	height:auto;
	white-space: pre-line;
	width:100%;
	    padding-top: 2%;
    padding-bottom: 2%;
}
.btn{
	
	background-color: transparent;
    border-radius: 50px;
    border-style: solid;
    border-color: #3181f6;
	margin-bottom: 5%;
	height:6%;
	
	
	    padding-top: 2%;
    padding-bottom: 2%;
}
</style>
<script type="text/javascript">
 $(function () {
 	 $("#msg").focus();
 	 
 	 
 var initialmsg="<p class='chat-content bot'>Hi! Welcome to FHA 2018! I am Faye. Feel free to ask me any question and I will answer you instantly, but first I would need to know why you are here for?<br><input type='button' value='Exhibiting at FHA' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='Visiting FHA' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='Know more about the competition' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='Various activities @ FHA' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='Conference' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='Media' name='PASS' onClick='myfunction(this.value)' class='txtopt'/><br><input type='button' value='General Information' name='PASS' onClick='myfunction(this.value)' class='txtopt'/></p>";
 
 $("div#chat").append(initialmsg);
        $('form').bind('submit', function (event) {

		event.preventDefault();// using this page stop being refreshing 
         var msg=$("#msg").val();
         if(msg == "" || msg == " "){
		 $("#msg").val("");
		  
	 }
	 else{
	 	var html="";
          $.ajax({
            type: 'POST',
            url: 'find.php',
            data: $('form').serialize(),
            success: function (response) {
              //alert('form was submitted'+response);
              $("#msg").val("");
		    
			  var obj = jQuery.parseJSON(response);
			  
			if(typeof obj.chat.bot.text != "undefined"){
				 html+=obj.chat.bot.text["textb"];
			}
			   if(typeof obj.chat.bot.reply != "undefined"){
			  
					     for(var key in obj.chat.bot.reply) {
					    var value = obj.chat.bot.reply[key];
					  //  alert("value"+value);
					     html +=           
					                "<br><input type='button' value='"+value+"' name='PASS' onClick='myfunction(this.value)' class='txtopt'/>";
									var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+ html +"<\p>"; 
				}
				
			   
			   }else{
					var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+ obj.chat.bot +"<\p>";
				}	
			
			  //var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+ html +"<\p>";
			 //alert( obj.chat.user +"\n"+obj.chat.bot+"\n");
			 if(typeof obj.chat.cid != "undefined"){
			 	$("#Id").val(obj.chat.cid);
			 }
			 if(typeof obj.chat.uid != "undefined"){
			 	$("#UId").val(obj.chat.uid);
			 }
			 if(typeof obj.chat.nid != "undefined"){
			 	$("#id").val(obj.chat.nid);
			 }
			 if(typeof obj.chat.vid != "undefined"){
			 	$("#vid").val(obj.chat.vid);
			 }
			 if(typeof obj.chat.wid != "undefined"){
			 	$("#wid").val(obj.chat.wid);
			 }
			  if(typeof obj.chat.rid != "undefined"){
			 	$("#rid").val(obj.chat.rid);
			 }
			  if(typeof obj.chat.sid != "undefined"){
			 	$("#sid").val(obj.chat.sid);
			 }
			  if(typeof obj.chat.hid != "undefined"){
			 	$("#hid").val(obj.chat.hid);
			 }
			  if(typeof obj.chat.kid != "undefined"){
			 	$("#kid").val(obj.chat.kid);
			 }
			  if(typeof obj.chat.lid != "undefined"){
			 	$("#lid").val(obj.chat.lid);
			 }
			 if(typeof obj.chat.xid != "undefined"){
			 	$("#xid").val(obj.chat.xid);
			 }
			 
			  $("div#chat").append(txtval).html();
			  
			  $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);	
           
	    }
            
          });
	 }
         });
      });


function myfunction(str){
	//alert(str);
	var Id = $("#Id").val();
	var UId = $("#UId").val(); 
	var id = $("#id").val();
	var wid= $("#wid").val();
	var vid= $("#vid").val();
	var rid= $("#rid").val();
	var sid= $("#sid").val();
	var hid= $("#hid").val();
	var kid= $("#kid").val();
	var lid= $("#lid").val();
	var xid= $("#xid").val();
	var aid= $("#aid").val();
	var bid= $("#bid").val();
	var eid= $("#eid").val();
	var fid= $("#fid").val();
	var html1="";
	      $.ajax({
            type: 'POST',
            url: 'find.php',
            data: {msg: str,Id:Id,id:id,UId:UId,vid:vid,wid:wid,rid:rid,sid:sid,hid:hid,kid:kid,lid:lid,xid:xid,aid:aid,bid:bid,eid:eid,fid:fid},
            success: function (response) {
             $("#msg").val("");
		     // alert(response);
			  var obj = jQuery.parseJSON(response);	
			   var btntext ="";
			if(typeof obj.chat.bot.text != "undefined"){
				 html1+=obj.chat.bot.text["textb"];
			}
			//  alert(obj.chat.user+obj.chat.bot);
			  
			   if(typeof obj.chat.bot.reply != "undefined"){
			  
               for(var key in obj.chat.bot.reply) {
    var value = obj.chat.bot.reply[key];
    //alert("value"+value);
     html1 +=           
                "<br><input type='button' value='"+value+"' name='opt' class='txtopt' onClick='myfunction(this.value)' class='txtopt' />";
                
               
                
}
 var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+html1 +"<\p>";
  if(typeof obj.chat.cid != "undefined"){
				 	$("#Id").val(obj.chat.cid);
				 }
				 if(typeof obj.chat.uid != "undefined"){
				 	$("#UId").val(obj.chat.uid);
				 }
				 if(typeof obj.chat.nid != "undefined"){
				 	$("#id").val(obj.chat.nid);
				 }
				 if(typeof obj.chat.vid != "undefined"){
				 	$("#vid").val(obj.chat.vid);
				 }
				 if(typeof obj.chat.wid != "undefined"){
				 	$("#wid").val(obj.chat.wid);
				 }
				 if(typeof obj.chat.rid != "undefined"){
				 	$("#rid").val(obj.chat.rid);
				 }
				 if(typeof obj.chat.sid != "undefined"){
				 	$("#sid").val(obj.chat.sid);
				 }
				 if(typeof obj.chat.hid != "undefined"){
				 	$("#hid").val(obj.chat.hid);
				 }
				  if(typeof obj.chat.kid != "undefined"){
				 	$("#kid").val(obj.chat.kid);
				 }
				 if(typeof obj.chat.lid != "undefined"){
				 	$("#lid").val(obj.chat.lid);
				 }
				 if(typeof obj.chat.xid != "undefined"){
				 	$("#xid").val(obj.chat.xid);
				 }
				 if(typeof obj.chat.aid != "undefined"){
				 	$("#aid").val(obj.chat.aid);
				 }
				 if(typeof obj.chat.bid != "undefined"){
				 	$("#bid").val(obj.chat.bid);
				 }
				 if(typeof obj.chat.eid != "undefined"){
				 	$("#eid").val(obj.chat.eid);
				 }
				 if(typeof obj.chat.fid != "undefined"){
				 	$("#fid").val(obj.chat.fid);
				 }
 $("div#chat").append(txtval).html();
 $("#msg").focus();
			  $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);	
			  }
			  else{
			  	 var txtval= "<p class='user'>"+obj.chat.user +"</p><p class='bot'>"+ obj.chat.bot +"<\p>";
				 //alert( obj.chat.user +"\n"+obj.chat.bot+"\n");
				 if(typeof obj.chat.cid != "undefined"){
				 	$("#Id").val(obj.chat.cid);
				 }
				 if(typeof obj.chat.uid != "undefined"){
				 	$("#UId").val(obj.chat.uid);
				 }
				 if(typeof obj.chat.nid != "undefined"){
				 	$("#id").val(obj.chat.nid);
				 }
				 if(typeof obj.chat.vid != "undefined"){
				 	$("#vid").val(obj.chat.vid);
				 }
				 if(typeof obj.chat.wid != "undefined"){
				 	$("#wid").val(obj.chat.wid);
				 }
				 if(typeof obj.chat.rid != "undefined"){
				 	$("#rid").val(obj.chat.rid);
				 }
				 if(typeof obj.chat.sid != "undefined"){
				 	$("#sid").val(obj.chat.sid);
				 }
				 if(typeof obj.chat.hid != "undefined"){
				 	$("#hid").val(obj.chat.hid);
				 }
				 if(typeof obj.chat.kid != "undefined"){
				 	$("#kid").val(obj.chat.kid);
				 }
				 if(typeof obj.chat.lid != "undefined"){
				 	$("#lid").val(obj.chat.lid);
				 }
				  if(typeof obj.chat.xid != "undefined"){
				 	$("#xid").val(obj.chat.xid);
				 }
				 if(typeof obj.chat.aid != "undefined"){
				 	$("#aid").val(obj.chat.aid);
				 }
				  if(typeof obj.chat.bid != "undefined"){
				 	$("#bid").val(obj.chat.bid);
				 }
				 if(typeof obj.chat.eid != "undefined"){
				 	$("#eid").val(obj.chat.eid);
				 }
				 if(typeof obj.chat.fid != "undefined"){
				 	$("#fid").val(obj.chat.fid);
				 }
				  $("div#chat").append(txtval).html();
				  $("#msg").focus();
				  $(".msg_container_base").stop().animate({ scrollTop: $(".msg_container_base")[0].scrollHeight}, 1000);	
			  }
         }
		});
       
}

</script>
</head>
<body>
<form name="chatform">
<div id='chatborder'>
<div class="chatlog msg_container_base" id="chat">
<!--<textarea name="chat" id="chat" cols="60" rows="20"></textarea>-->

</div>
<div class="uinput">


<input type='button' value='Reset' name='opt' class='btn' onClick='myfunction(this.value)' class='txtopt' />
<div id="chtmsg" class="su"></div>
</div>	
</div>
<!--<input type="submit" name="submit" value="send"/>-->
<input type="hidden" name="Id" id="Id" />
<input type="hidden" name="UId" id="UId" />
<input type="hidden" name="id" id="id" />
<input type="hidden" name="vid" id="vid" />
<input type="hidden" name="wid" id="wid" />
<input type="hidden" name="rid" id="rid" />
<input type="hidden" name="sid" id="sid" />
<input type="hidden" name="hid" id="hid" />
<input type="hidden" name="kid" id="kid" />
<input type="hidden" name="lid" id="lid" />
<input type="hidden" name="xid" id="xid" />
<input type="hidden" name="aid" id="aid" />
<input type="hidden" name="bid" id="bid" />
<input type="hidden" name="eid" id="eid" />
<input type="hidden" name="fid" id="fid" />
</form>

</body>
</html>
