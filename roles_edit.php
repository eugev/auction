<?php include('header.php'); 
if($_REQUEST['role_id']){
  $role_id = $_REQUEST['role_id'];
}
?>
<body id="bdy">

    <div id="dp-container" class="column content-column">

      <div class="col-md-12" style="padding: 0px 0px 0px 0px !important">

        <div class="list-header fill">
        <div id="show" style="text-align: center;color: green;">
        </div>
            <div>

            </div>
          </div>
        </div>

        <div id="ember1921" class="scroll-y fill body scrollbox noscroll-x ember-view" style="height: 1000px;padding: 0px 0px 0px 0px ">   
        <div id="ember1922" class="ember-view"><!----></div>
        <table  class="table table-hover zi-table  ember-view">  <thead>
            <tr>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Name</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Read</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Write</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Edit</div>
                  </th>
                  <th style="" id="ember1925" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Delete</div>
                  </th>
            </tr>
          </thead>

        <tbody >

<?php 
$sql = "SELECT * FROM `roles` WHERE `id` = '".$role_id."'";
$new = $con->query($sql);
while ($role = $new->fetch_assoc()) {
?>
              <tr data-ember-action="" data-ember-action-1946="1946">
                <td id="ember1965" class="ember-view">
                  <?php echo $role['role_name']; ?>
                </td>
                <td id="ember1964" class="ember-view">
<?php if($role['read'] == '0'){ ?>
                 <input type="checkbox" name="" value="<?php echo $role['read']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'read', <?php echo $role['read']; ?>)" style="cursor: pointer;" id="role_value" >
<?php }else{ ?>
                 <input type="checkbox" checked="" value="<?php echo $role['read']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'read', <?php echo $role['read']; ?>)" style="cursor: pointer;" id="role_value" >
<?php } ?>
                </td>
                <td id="ember1964" class="ember-view">
<?php if($role['write'] == '0'){ ?>
                 <input type="checkbox" name=""  value="<?php echo $role['write']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'write', <?php echo $role['write']; ?>)" style="cursor: pointer;" id="role_value">
<?php }else{ ?>
                 <input type="checkbox" checked="" name=""  value="<?php echo $role['write']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'write', <?php echo $role['write']; ?>)" style="cursor: pointer;" id="role_value">
<?php } ?>
                </td>
                <td id="ember1964" class="ember-view">
<?php if($role['edit'] == '0'){ ?>
                 <input type="checkbox" name=""  value="<?php echo $role['edit']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'edit', <?php echo $role['edit']; ?>)" style="cursor: pointer;" id="role_value">
<?php }else{ ?>
                 <input type="checkbox" checked="" value="<?php echo $role['edit']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'edit', <?php echo $role['edit']; ?>)" style="cursor: pointer;" id="role_value">
<?php } ?>
                </td>
                <td id="ember1964" class="ember-view">
<?php if($role['delete'] == '0'){ ?>
                 <input type="checkbox" name=""  value="<?php echo $role['delete']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'delete', <?php echo $role['delete']; ?>)" style="cursor: pointer;" id="role_value">
<?php }else{ ?>
                 <input type="checkbox" checked=""  value="<?php echo $role['delete']; ?>" onclick="update_role(<?php echo $role['id']; ?>, 'delete', <?php echo $role['delete']; ?>)" style="cursor: pointer;" id="role_value">
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


<script>
function update_role(a,b,role_value) {
  // alert(a+"-"+b);
  // var write = document.getElementById('write').value;
  // var edit = document.getElementById('edit').value;
  // var deletes = document.getElementById('deletes').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("txtHint").innerHTML = 
                 // alert(this.responseText);
                // $('#bdy').load(document.URL +  '#bdy');
                document.getElementById('show').innerHTML= '<h2>UPDATED SUCCESSFULLY</h2>';
}
        }
        xmlhttp.open("GET", "ajax/role_update.php?role_id="+a+"&role_value="+role_value+"&name="+b, true);
        xmlhttp.send();
}
</script>