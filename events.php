<?php include('header.php'); ?>
  


    <div id="dp-container" class="column content-column">

      <div class="col-md-12" style="padding: 0px 0px 0px 0px !important">


        <div id="event-list" class="fill events-header">
          <h3 class="mt10">Events</h3>
        </div>
        <div class="events-criteria fill">
                    <div style="padding-left:30px" class="col-sm-4 criteria-div"><label class="control-label mLbl">Event Type</label>
                        <div id="ember1628" class="ember-view"><div class="ac-box ">
                          <select  class="ac-selected form-control ">
                              <option>Credit Note Added</option>
                          </select>
                        </div>

                <!----></div>
                    </div>
                    <div class="criteria-div col-sm-2"><label class="control-label mLbl">Date Range</label>
                     <div><div id="ember1629" class="ember-view"><div class="ac-box ">
                            <select  class="ac-selected form-control ">
                                <option>Select Custom Date</option>
                                <option>Today</option>
                            </select>
                          </div>

                  <!----></div>
                        </div>
                         </div>
                            <div class="col-sm-2 criteria-div">
                                <label class="control-label mLbl">From Date</label>
                             <div>
                      <input id="ember1685" placeholder="" class="ember-text-field form-control ember-view" data-dropdown-opened="true" type="text">
                             <div class="hide f11 red">Please select the From Date.</div>
                             </div>
                         </div>
                         <div class="col-sm-2 criteria-div">
                             <label class="control-label mLbl">To Date</label>
                             <div>
                       <input id="ember1686" placeholder="" class="ember-text-field form-control ember-view" type="text">
                             </div>
                         </div>
                        <button style="margin-top:38px;" class="btn btn-primary ml10" data-ember-action="" data-ember-action-1630="1630">Update</button>
                    </div>
        <div class="clearfix"></div>
        <div class="scroll-y noscroll-x fill body scrollbox" style="top: 160px;padding: 0;height: 1000px">
            <table id="ember2349" class="table table-hover zi-table  ember-view">  
              <thead>
                <tr>
                  <th style="" id="ember2354" class="sortable text-left ember-view">
                    <div title="Name" class="pull-left over-flow"> Name</div>
                  </th>
                  <th style="" id="ember2354" class="sortable text-left ember-view">
                    <div title="Email" class="pull-left over-flow"> Email</div>
                  </th>
                  <th style="" id="ember2354" class="sortable text-left ember-view">
                    <div title="Role" class="pull-left over-flow"> Role</div>
                  </th>
                  <th style="" id="ember2354" class="sortable text-left ember-view">
                    <div title="Login Time" class="pull-left over-flow"> Login Time</div>
                  </th>
                  <th style="" id="ember2354" class="sortable text-left ember-view">
                    <div title="Status" class="pull-left over-flow"> Status</div>
                  </th>
                </tr>
              </thead>

              <tbody>
            <!---->
  <?php $sqp = "SELECT * FROM `admin` WHERE `email` = '".$session_email."'";
  $newp = $con->query($sqp);
  while ( $prd = $newp->fetch_assoc()) {

  $sqpul = "SELECT * FROM `user_log` WHERE `user_id` = '".$prd['id']."'";
  $newpul = $con->query($sqpul);
  $usrlg = $newpul->fetch_assoc();
  ?>
                <tr class="empty-list">
                  <td colspan="1" class="text-left">
                    <p class="text-muted text-left f14"><?php echo $prd['name']; ?></p>
                  </td>
                  <td colspan="1" class="text-left">
                    <p class="text-muted text-left f14"><?php echo $prd['email']; ?></p>
                  </td>
                  <td colspan="1" class="text-left">
                    <p class="text-muted text-left f14"><?php echo $prd['role']; ?></p>
                  </td>
                  <td colspan="1" class="text-left">
                    <p class="text-muted text-left f14"><?php echo $usrlg['login_time']; ?></p>
                  </td>
                  <td colspan="1" class="text-left">
                    <p class="text-muted text-left f14"><?php if($usrlg['status']=='1'){ echo 'Login'; }else{ echo 'Logout'; } ?></p>
                  </td>
                </tr>
<?php } ?>                
              </tbody>  
            </table>      
        </div>
  
      </div>
    </div>
  </div>
</body>
</html>