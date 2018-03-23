<?php include('header.php'); 

if($_REQUEST['blog_id']){
  $blog_id = $_REQUEST['blog_id'];
}

if(isset($_POST['edit_blog'])){
 //echo "<script>alert();</script>";
$title = $_POST['title'];
$content = $_POST['content'];
$sqlup = "UPDATE `blog` SET `title` = '$title', `content` = '$content' WHERE `id` = '".$blog_id."'";
$con -> query($sqlup);
// echo '<script>window.location.href="user_edit.php?blog_id="'.$blog_id.'""</script>';
}

$sqsp = "SELECT * FROM `blog` WHERE `id` = '".$blog_id."'";
$newsp = $con->query($sqsp);
$rowblog = $newsp->fetch_assoc();



?>

<style type="text/css">
  .cd{
    display: none;
    color: #888;
  }
</style>

    <div id="dp-container" class="column content-column">

      <div class="col-md-12" style="padding: 0px 0px 0px 0px !important">


        <div class="col-md-12"  style="padding: 0px 0px 0px 0px !important;">

          <div class="header-small">
            <div class="cust-name pull-left">
              <span>Edit User</span>
            </div>
          <div class="clearfix"></div>            
          <br>
            <form action="" method="post">
            <div id="ember873" class="scroll-y fill body scrollbox noscroll-x ember-view" style="height: 700px"><div id="ember902" class="ember-view"><!----></div>
            <div style="max-width:1040px;" class="customer-create">
                <div class="row">
                    <div class="col-sm-12  label-left-align">

                      <div class="form-group row">
                          <label class="control-label col-sm-2">Title Name</label>
                      <div class="col-sm-10">
                          <input type="text" placeholder="Name" autofocus="" id="ember1034" class="form-control ember-text-field ember-view" name="title" value="<?php echo $rowblog['title']; ?>" required="">
                      </div>

                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2">Company Name</label>
                        <div class="col-sm-10">
                            <textarea class="form-control ember-text-field ember-view" name="content" rows="15"><?php echo $rowblog['content']; ?></textarea>
                        </div>
                    </div>


                  <div>
                <div>
            </div>
          </div>

                          
                        </div>
        
                       </div>
            <!---->



                <div class="col-sm-12 form-actions">
                    <div class="btn-toolbar cb">
                          <button type="submit" name="edit_blog" id="ember995" class="btn btn-default ember-view">    Save
            </button>
                         <a href="blog.php"> <button type="button" id="ember997" class="btn btn-default ember-view">Cancel</button></a>
                    </div>
                </div>

            </div>
            </div>
          </div>

        </div>
     
      </div>

    </div>
<!-- --------------------- --- MODEL BOX --- -------------------- -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>




<!-- --------------------- --- MODEL BOX --- -------------------- --></body>
</html>