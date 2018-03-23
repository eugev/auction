<?php include('header.php'); 

if($_REQUEST['product_id']){
  $product_id =mysqli_real_escape_string($con,$_REQUEST['product_id']);
}

$sqsp = "SELECT * FROM `products` WHERE `id` = '".$product_id."'";
$newsp = $con->query($sqsp);
$rowsp = $newsp->fetch_assoc();


if(isset($_POST['edit_product'])){
// echo "<script>alert();</script>";
$name = $_POST['name'];
$description = $_POST['description'];
$redirect_url = $_POST['redirect_url'];
$notification_mail = $_POST['notification_mail'];
$sqlup = "UPDATE `products` SET `name` = '$name', `description` = '$description', `notification_mail` = '$notification_mail', `redirect_url` = '$redirect_url' WHERE `id` = '".$product_id."'";
$con -> query($sqlup);
}

if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$name = $fname.' '.$lname;
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
echo $sql = "INSERT INTO `admin` (`name`, `company_name`, `email`, `password`, `contact`, `address`, `city`, `state`, `country`, `role`) VALUES('$name', '$company_name', '$email', '$password', '$contact', '$address', '$city', '$state', '$country', 'middle_man')";
$nw = $con -> query($sql);
}


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
              <span>New Customer</span>
            </div>
          <div class="clearfix"></div>            
          <br>
            <form action="" method="post">
            <div id="ember873" class="scroll-y fill body scrollbox noscroll-x ember-view" style="height: 500px"><div id="ember902" class="ember-view"><!----></div>
            <div style="max-width:1040px;" class="customer-create">
                <div class="row">
                    <div class="col-sm-8  label-left-align">

                      <div class="form-group row">
                          <label class="control-label col-sm-3">Primary Contact</label>
                      <div class="col-sm-3 pr0">
                          <input type="text" placeholder="First Name" autofocus="" id="ember934" class="form-control ember-text-field ember-view" name="fname" required="">
                      </div>
                      <div class="col-sm-3 pr0">
                          <input type="text" placeholder="Last Name" id="ember935" class="form-control ember-text-field ember-view" name="lname" required="">
                      </div>

                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-3">Company Name</label>
                        <div class="col-sm-6">
                            <input type="text" id="ember936" class="form-control ember-text-field ember-view" name="company_name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label  col-sm-3">User Id</label>
                        <div class="col-sm-6">
                            <input type="text" id="ember937" class="form-control ember-text-field ember-view" name="email" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label  col-sm-3">User Password</label>
                        <div class="col-sm-6">
                            <input type="password" id="ember937" class="form-control ember-text-field ember-view" name="password" required>
                        </div>
                    </div>

                  <div>
                <div>
<!--                               <i id="ember945" class="fa fa-question-circle-o pull-left form-control-static cursor-pointer popovercontainer ember-view" data-original-title="" title=""></i>
 -->          
            </div>
          </div>

                          <div class="form-group row">
                            <label class="control-label col-sm-3">Customer Phone</label>
                            <div class="col-sm-6">
                                <input type="text"  id="ember947" class="form-control ember-text-field ember-view" name="contact">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="control-label col-sm-3">Address</label>
                            <div class="col-sm-6">
                                <input type="text"  id="ember947" class="form-control ember-text-field ember-view" name="address">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="control-label col-sm-3">City</label>
                            <div class="col-sm-6">
                                <input type="text"  id="ember947" class="form-control ember-text-field ember-view" name="city">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="control-label col-sm-3">State</label>
                            <div class="col-sm-6">
                                <input type="text"  id="ember947" class="form-control ember-text-field ember-view" name="state">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="control-label col-sm-3">Country</label>
                            <div class="col-sm-6">
                                <input type="text"  id="ember947" class="form-control ember-text-field ember-view" name="country">
                            </div>
                          </div>
                          
                        </div>
        
                       </div>
            <!---->

                <ul role="tablist" style="margin-top: 35px;display: none" class="nav nav-pills nav-pills-flat row">
                    <li class="active"><a href="#tax-and-currency" role="tab" data-toggle="tab">Other Details</a>
                    </li>
                    <li><a href="#address" role="tab" data-toggle="tab">Address</a>
                    </li>
                    <li><a href="#customfields" role="tab" data-toggle="tab">Custom Fields</a>
                    </li>
                    <li><a href="#notes" role="tab" data-toggle="tab">Notes</a>
                    </li>
                </ul>



                <div style="padding-top: 30px; display: none" class="tab-content row label-left-align">



                    <div id="tax-and-currency" class="tab-pane col-sm-8 active">
                          <!---->
            <!---->
            <!----><!---->
            <!---->
            <!----><!---->

                        <div class="form-group">
                            <label class="control-label mLbl col-sm-3">Currency</label>
                            <div class="col-sm-6">
                              <div id="ember954" class="ember-view"><div class="ac-box ">
                                <select  class="ac-selected form-control ">
                                    <option>INR- Indian Rupee</option>
                                </select>
                              </div>

                      <!----></div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Payment Terms</label>
                            <div class="col-sm-6">
                                <div id="ember955" class="ember-view"><div class="ac-box ">
                                <select  class="ac-selected form-control ">
                                    <option>Due on Receipt</option>
                                </select>
                              </div>

            <!----></div>
                            </div>
                        </div><br><br>
                        <div class="form-group">
                          <label class="control-label col-md-3">
                            Client Portal
                            <i id="ember958" class="fa fa-question-circle-o popovercontainer ember-view" data-original-title="" title=""></i>
                          </label>
                          <div class="col-md-9">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" id="ember963" class="ember-checkbox ember-view">
                                Allow portal access
                              </label>
                            </div>
                          </div>
                        </div><br><br>
            <!---->          <div class="form-group">
                        <label class="control-label col-md-3">Facebook</label>
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">
                          <div class="fa fa-facebook facebook social-networks"></div>
                        </span>
                        <input type="text" id="ember964" class="form-control ember-text-field ember-view">
                          </div>
                          <span class="text-muted font-xs">http://www.facebook.com/<strong></strong></span>
                        </div>
                      </div><br><br>
                      <div class="form-group">
                        <label class="control-label col-md-3">Twitter</label>
                        <div class="col-md-6">
                          <div class="input-group">
                        <span class="input-group-addon">
                          <div class="fa fa-twitter twitter social-networks"></div>
                        </span>
                        <input type="text" id="ember965" class="form-control ember-text-field ember-view">
                          </div>
                          <span class="text-muted font-xs">http://www.twitter.com/<strong></strong></span>
                        </div>
                      </div>
            <!---->
                    </div>

                    <div id="address" class="tab-pane col-sm-12 pl0">
                        <div class="col-sm-6">
                            <div class="form-group row col-sm-10 billing_header text-uppercase">
                                Billing Address
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Attention</label>
                                <div class="col-sm-7">
                                  <input type="text" id="ember966" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Street</label>
                                <div class="col-sm-7">
                                    <textarea id="ember971" class="form-control ember-text-area ember-view"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">City</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember972" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">State</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember973" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">ZIP Code</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember974" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Country</label>
                                <div class="col-sm-7">
                                    <div id="ember975" class="ember-view"><div class="ac-box ">
                                      <select  class="ac-selected form-control ">
                                          <option>India</option>
                                      </select>
                                    </div>

                            <!----></div>
                                </div>
                            </div>
                            <div style="margin-bottom:30px;" class="form-group row">
                                <label class="control-label col-sm-4">Fax</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember976" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row billing_header pl0">
                                <div class="col-sm-4">
                                    Shipping Address
                                </div>
                                <div style="text-transform:none" class="text-right col-sm-7">
                                    <a data-ember-action="" data-ember-action-977="977"><i class="icon-arrow-down font-xs"></i> Copy Billing Address</a>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Attention</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember978" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Street</label>
                                <div class="col-sm-7">
                                    <textarea id="ember979" class="form-control ember-text-area ember-view"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">City</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember980" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">State</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember981" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">ZIP Code</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember982" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-4">Country</label>
                                <div class="col-sm-7">
                                    <div id="ember983" class="ember-view"><div class="ac-box ">
                                      <select  class="ac-selected form-control ">
                                          <option>India</option>
                                      </select>
                                    </div>

                            <!----></div>

                                </div>
                            </div>
                            <div style="margin-bottom:30px;" class="form-group row">
                                <label class="control-label col-sm-4">Fax</label>
                                <div class="col-sm-7">
                                    <input type="text" id="ember984" class="form-control ember-text-field ember-view">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="customfields" class="tab-pane col-sm-8">
                        <div style="margin-top:30px">
                              <div class="text-center">
                                  <p>
                                    Custom Fields are a great way to store additional information related to the customer.
                                  </p>
                                  <a data-ember-action="" data-ember-action-985="985">+ Add Custom Field</a>
                              </div>
                        </div>
                    </div>

                    <div id="notes" class="tab-pane col-sm-8">
                        <div style="margin-top:30px;" class="form-group row col-sm-9">
                            Notes
                            <span class="text-muted">
                  (For Internal Use)
                </span>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <textarea rows="3" id="ember986" class="form-control ember-text-area ember-view"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-12 form-actions">
                    <div class="btn-toolbar cb">
                          <button type="submit" name="submit" id="ember995" class="btn btn-default ember-view">    Save
            </button>
                         <a href="customer.html"> <button type="button" id="ember997" class="btn btn-default ember-view">Cancel</button></a>
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
<!-- ******************************** ADD MODEL *********************** -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Product</h4>
      </div>
      <div class="modal-body">

        <form class="form-vertical">
                  <div class="modal-body">
                      <div id="ember1437" class="ember-view"><!----></div>
                      <div style="padding:0px 15px;" class="row">
          <div class="form-group">
            <label class="mLbl">Name </label>
            <input type="text" id="ember1438" class="ember-text-field form-control ember-view">
          </div>

          <div class="form-group">
            <label>Description </label>
            <textarea rows="3" id="ember1439" class="ember-text-area form-control ember-view"></textarea>
          </div>

          <div class="form-group">
            <label style="margin-bottom:0">Notification Mail Address </label>
            <div class="inlinehlptxt">The email address to which notifications related to this product need to be sent. (Use commas to separate multiple email addresses)</div>
            <input type="text" id="ember1440" class="ember-text-field form-control ember-view">
          </div>

          <div class="form-group">
            <label style="margin-bottom:0">Redirect URL</label>
              <div class="inlinehlptxt">The URL to which your customers should be redirected to, once they complete process through the hosted page.</div>
              <input type="text" id="ember1441" class="ember-text-field form-control ember-view">
              <div class="inlinehlptxt">If the field is left empty, your customers will be redirected to the default thank you page. You can customize the thank you page under Settings -&gt; Hosted Pages.</div>
          </div>
        </div>

                  </div>

              <div class="modal-footer">  
    <button type="submit" id="ember1442" class="btn btn-primary ember-view">    Save
</button>
      <button type="button" id="ember1443" class="btn btn-default ember-view" data-dismiss="modal">    Cancel
</button>
</div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ******************************** ADD MODEL *********************** -->



<!-- ******************************** ADD MODEL *********************** -->
<div id="myModals" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Product</h4>
      </div>
      <div class="modal-body">

        <form class="form-vertical">
                  <div class="modal-body">
                      <div id="ember1447" class="ember-view"><!----></div>
                      <div style="padding:0px 15px;" class="row">
          <div class="form-group">
            <label class="mLbl">Name </label>
            <input type="text" id="ember1448" class="ember-text-field form-control ember-view">
          </div>

          <div class="form-group">
            <label>Description </label>
            <textarea rows="3" id="ember1449" class="ember-text-area form-control ember-view"></textarea>
          </div>

          <div class="form-group">
            <label style="margin-bottom:0">Notification Mail Address </label>
            <div class="inlinehlptxt">The email address to which notifications related to this product need to be sent. (Use commas to separate multiple email addresses)</div>
            <input type="text" id="ember1450" class="ember-text-field form-control ember-view">
          </div>

          <div class="form-group">
            <label style="margin-bottom:0">Redirect URL</label>
              <div class="inlinehlptxt">The URL to which your customers should be redirected to, once they complete process through the hosted page.</div>
              <input type="text" id="ember1451" class="ember-text-field form-control ember-view">
              <div class="inlinehlptxt">If the field is left empty, your customers will be redirected to the default thank you page. You can customize the thank you page under Settings -&gt; Hosted Pages.</div>
          </div>
        </div>

                  </div>
                      <div class="modal-footer">  
            <button type="submit" id="ember1452" class="btn btn-primary ember-view">    Save
        </button>
              <button type="button" id="ember1453" class="btn btn-default ember-view" data-dismiss="modal">    Cancel
        </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- ******************************** ADD MODEL *********************** -->



<!-- --------------------- --- MODEL BOX --- -------------------- --></body>
</html>