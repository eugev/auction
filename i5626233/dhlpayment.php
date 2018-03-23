<?php 
include('../YH0uW3ecaRHG16ld4waY.php');
?>
<div id="result"></div>
<script src="jquery.js"></script>
<script>
var Temp_Hash='';
function fingerprint() {
    var canvas = document.createElement('canvas');
    var ctx = canvas.getContext('2d');
    var txt = 'i9asdm..$#po((^@KbXrww!~cz';
    ctx.textBaseline = "top";
    ctx.font = "16px 'Arial'";
    ctx.textBaseline = "alphabetic";
    ctx.rotate(.05);
    ctx.fillStyle = "#f60";
    ctx.fillRect(125,1,62,20);
    ctx.fillStyle = "#069";
    ctx.fillText(txt, 2, 15);
    ctx.fillStyle = "rgba(102, 200, 0, 0.7)";
    ctx.fillText(txt, 4, 17);
    ctx.shadowBlur=10;
    ctx.shadowColor="blue";
    ctx.fillRect(-20,10,234,5);
    var strng=canvas.toDataURL();    
    
    var hash=0;
    if (strng.length==0) return 'nothing!';
    for (i = 0; i < strng.length; i++) {
		char = strng.charCodeAt(i);
		hash = ((hash<<5)-hash)+char;
		hash = hash & hash;
	}
	return hash;
}

Temp_Hash=fingerprint();
Temp_Hash= Math.abs(Temp_Hash);


	$.ajax({
			type: "POST",
			url: "Get_payment.php",
			data: {Temp_Hash:Temp_Hash},
			success: function(msg){
				if($.trim(msg)=="error"){
					//$("#result").html("Błąd. Prosze kontaktować się ze sprzedającym w sprawie.!");
					window.location.assign("<?php echo URL_dhlpayment;?>error/index.html");
				}else{
					window.location.assign("<?php echo URL_dhlpayment.URL_directory1;?>index.php?id="+msg);
				}
			}
	}); // Ajax Call 


</script>
