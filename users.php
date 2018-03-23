<?php include('header.php'); 
?>

    <div id="dp-container" class="column content-column">

      <div class="col-md-12" style="padding: 0px 0px 0px 0px !important">

        <div class="list-header fill">
          <div class="list-filter clearfix">
           <div class="pull-right">
            <a href="user_new.php"><button id="ember2179" class="btn btn-primary popovercontainer ember-view" data-original-title="" title="">       <i class="fa fa-plus"></i>&nbsp;New</button></a>
             <div class="btn-group  list-sorter">

            </div>
            </div>
            <div>

            </div>
          </div>
        </div>

        <div id="ember1921" class="scroll-y fill body scrollbox noscroll-x ember-view" style="height: 1000px;padding: 0px 0px 0px 0px ">   
        <div id="ember1922" class="ember-view"><!----></div>
        <table id="ember1923" class="table table-hover zi-table  ember-view">  <thead>
            <tr>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Name</div>
                  </th>
                 <th style="" id="ember1926" class="sortable text-left ember-view">
                    <div title="Company Name" class="pull-left over-flow"> Company Name</div>
                  </th>
                 <th style="" id="ember1927" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> User Id</div>
                  </th>
                 <th style="" id="ember1928" class="text-left ember-view">
                    <div title="Work Phone" class="pull-left over-flow"> Work Phone</div>
                  </th>
                 <th style="" id="ember1929" class="text-left ember-view">
                    <div title="Receivables" class="pull-left over-flow"> Role</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Address</div>
                  </th>
                 <th style="" id="ember1930" class="text-left ember-view">
                    <div title="Unused Credits" class="pull-left over-flow"> Action</div>
                  </th>
                <th style="width: 50px;max-width:50px;" class="text-center"><i class="fa fa-search cursor-pointer" data-ember-action="" data-ember-action-1931="1931"></i></th>
            </tr>
          </thead>

        <tbody>
<?php 
if($session_email=='admin'){
$sql = "SELECT * FROM `admin`";
$new = $con->query($sql);
}else{
$sql = "SELECT * FROM `admin` WHERE `email` = '$session_email'";
$new = $con->query($sql);
}
while ($usra = $new->fetch_assoc()) {
?>
                <tr data-ember-action="" data-ember-action-1946="1946">
                <td id="ember1965" class="ember-view">
                  <?php echo $usra['name']; ?>
                </td>
                <td id="ember1960" class="ember-view">    
                  <?php echo $usra['company_name']; ?>
                </td>
                <td id="ember1961" class="ember-view">
                  <?php echo $usra['email']; ?>
                </td>
                <td id="ember1962" class="ember-view">
                  <?php echo $usra['contact']; ?>
                </td>
                <td id="ember1963" class="ember-view">
                  <?php echo $usra['role']; ?>
                </td>
                <td id="ember1964" class="ember-view">
                  <?php echo $usra['city'].','.$usra['state'].','.$usra['country']; ?>
                </td>
                <td id="ember1964" class="ember-view">
                 <a href="user_edit.php?user_id=<?php echo $usra['id']; ?>"><button class="btn btn-primary">Edit</button></a>
                </td>
                <td>
<?php if($usra['role']=='middle_man'){ ?>
                 <a href="delete.php?id=<?php echo $usra['id']; ?>&page_name=users.php&table_name=admin"><button class="btn btn-danger">Delete</button></a>
<?php } ?>
                </td>
            </tr>
<?php } ?>

        <!----></tbody>
        </table>
        <div>
        </div>
        </div>     
      </div>

    </div>
</body>
</html>


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
    <p class="text-uppercase"><b>Related Topics</b></p>
    <ul class="faq-list f12">
     <li>
       <a href="" target="_blank">
        How can I create a customer in Zoho Subscriptions?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        What is a contact person? How is it useful?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        What is a client portal? How can I enable it for my customers?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        Why there are duplicate customers?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        I have a plan associated with certain days of trial period. But, I want to exclude the trial period for this particular customer and bill them immediately. Can I achieve this?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        Where can I find transactions done between my customer and me?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        Difference between deleting and making a customer inactive?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        How can I sync my Zoho CRM contacts with Zoho Subscriptions?
       </a>
     </li>
     <li>
       <a href="" target="_blank">
        I'm moving from another subscription service to Zoho Subscriptions. How can I import my customers into Zoho Subscriptions?
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