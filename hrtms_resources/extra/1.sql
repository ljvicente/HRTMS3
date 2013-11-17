SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
CONCAT(first_name, ' ', last_name) AS full_name, permission  
FROM inbox 
INNER JOIN user_table 
ON receiver_id=id
AND ((receiver_id=11 AND sender_id=1) OR (receiver_id=1 AND sender_id=11))

SELECT sender_id
FROM inbox 
WHERE EXISTS (SELECT message FROM inbox) 
AND is_read=0
ORDER BY message_id LIMIT 1

SELECT message_id, sender_id, receiver_id, message, time_sent, is_read, 
CONCAT(first_name, ' ', last_name) AS full_name, permission  
FROM inbox 
INNER JOIN user_table 
ON receiver_id=id
AND ((receiver_id=(SELECT sender_id
FROM inbox 
WHERE EXISTS (SELECT message FROM inbox) 
AND is_read=0
ORDER BY message_id LIMIT 1) AND sender_id=1) 
OR (receiver_id=1 AND sender_id=(SELECT sender_id
FROM inbox 
WHERE EXISTS (SELECT message FROM inbox) 
AND is_read=0
ORDER BY message_id LIMIT 1)))

<div class="itemdiv dialogdiv">
	<div class="user">
		<img alt="" src="assets/avatars/user.jpg">
	</div>
	<div class="body">
		<div class="time">
			<i class="icon-time"></i>
			<span class="orange">2013-08-16 00:00:00</span>
		</div>
		<div class="name">
			<a href="#">Luo Feichi</a>
			<span class="label label-info arrowed arrowed-in-right">
			Trainee </span>
		</div>
		<div class="text">
			 Test Message 1000
		</div>
	</div>
</div>

http://jemnuine.com/elfinder/files/


/*return multiple val*/

var getObjectSize = function(obj) {
		var len = 0, key;
    for (key in obj) {
        if (obj.hasOwnProperty(key)) len++;
    }
    return len;
};

var form_data = {
	ajax: '1'
};

var request = $.ajax({
	url: "<?php echo base_url();?>messenger/load_messages",
	type: 'POST',
	data: form_data
});

request.done(function (response, textStatus, jqXHR) {

	$(".dialogs").html("");

	var obj = jQuery.parseJSON(response);

	var str = "";

	for (var i = 0; i < getObjectSize(obj); i++) {
		
		str += '<div class="itemdiv dialogdiv"><div class="user"><img alt="" src="assets/avatars/user.jpg"></div>';
		str += '<div class="body"><div class="time"><i class="icon-time"></i><span class="orange"> '+obj[i].time_sent+'</span></div>';
		str += '<div class="name"><a class="userchat" id="'+obj[i].id+'" href="#">'+obj[i].full_name+'</a> <span class="label label-info arrowed arrowed-in-right">'+obj[i].permission+'</span></div>';
		str += '<div class="text">'+obj[i].message+'</div></div></div>';
		$("#thewho").text("("+thewho+")");

	};

	

	//var str = str.replace(':)','<img src="<?php echo base_url();?>assets/images/emoticon/smile.jpg">');

	$(".dialogs").html(str);

	$('#chat_div').slimScroll({ scrollBy: $(".dialogs").height()});

});

/*return single val*/


var request = $.ajax({
	url: "<?php echo base_url();?>modules/list_files",
	type: 'POST',
	data: { ajax: '1' }
});

request.done(function (response, textStatus, jqXHR) {

	var obj = jQuery.parseJSON(response);

	var result = [];

	for (var key in obj) {

		result.push(obj[key]);
	}

	var str = "";
	
	for (var i = 0; i < result.length; i++) {
		
		str += "<option value='"+result[i]+"'>"+result[i]+"</option>";						

	};

	alert(str);

	$("#file_name").html(str);

});