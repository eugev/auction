<?php include('header.php');
$id = $_GET['id'];
 ?>

<script type="text/javascript" src="css/chart.js"></script>

<div id="dp-container" class="column content-column" style="top: 50px">
<div class="col-md-12" style="padding: 0px 0px 0px 0px !important">

<div style="background-color:#FBFBFB;" class="hidden-print">
<ul class="nav nav-tabs reports-nav">
<li><a data-ember-action="" data-ember-action-1382="1382"><i class="fa fa-print f13 icon"></i>Print</a></li>
<li><a data-ember-action="" data-ember-action-1383="1383"><i class="fa fa-upload f13 icon"></i>Export as CSV</a></li>
<!----><li class="pull-right">
      <a style="min-width:0;" data-ember-action="" data-ember-action-1384="1384"><svg class="icons resize-full" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><style>.st0{fill:#020202}</style><path class="st0" d="M170.7 270.9l-107.9 108-37.6-37.6L0 512l170.4-25.3-37.6-37.7 107.9-108-70-70.1zM341.6 25.3l37.6 37.6L271.3 171l70 70.2 107.9-108 37.6 37.6L512 0 341.6 25.3z"></path></svg><svg class="icons resize-small" id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><style>.st0{fill:#020202}</style><path class="st0" d="M107.9 333.8L0 441.8 70 512l107.9-108 37.6 37.6 25.2-170.7-170.4 25.3zM512 70.2L442 0 334.1 108l-37.6-37.6-25.2 170.7 170.4-25.3-37.6-37.6z"></path></svg></a>
    </li>
</ul>
 </div>

<div class="criteria hidden-print">
    <div class="col-md-12">
    <div class="row">
      <div class="pull-left col-md-2">
        <label class="control-label mLbl">Products</label>
          <div>
              <div id="ember1385" class="ember-view"><div class="ac-box ">
                <select  class="ac-selected form-control ">
                    <option>All</option>
                </select>
              </div>

      <!----></div>
          </div>
      </div>

    <div class="pull-left col-md-3">
      <label class="control-label mLbl">Date Range</label>
      <div>
        <select  class="ac-selected form-control ">
            <option>last 30 days</option>
            <option>Today</option>
        </select>
          </div>
    </div>
    <div style="margin-top:24px;" class="pull-left ml15">
            <button type="button" class="btn btn-primary" data-ember-action="" data-ember-action-1387="1387">Update</button>
    </div>
    </div>
    </div>
</div>

<div id="ember1388" class="scroll-y fill body scrollbox reports-list noscroll-x ember-view" style="height: 500px;overflow-y: scroll;"><div class="fill-container clearfix">
<div class="pt20 text-center"><h3>aafreem</h3><h4>Signups
<div style="margin-bottom:-3px" class="inline f13 hidden-print">
  <i id="ember1389" class="fa fa-question-circle pull-left form-control-static cursor-pointer popovercontainer ember-view" data-original-title="" title=""></i></div>
    
</h4>
</div>
<div class="text-center mb20">07/06/2017 - 07/07/2017</div>
  <div class="text-center">
    <div class="chart-container">
      <div id="chartContainer" style="height: 300px; width: 100%; position: relative"></div>
    </div>
  </div>
  <br>
    <div class="chart-container">

              <div showpagelengthoption="" id="ember1390" class="ember-view"><div class="pagination clearfix hidden-print">

<!---->
</div>
</div>
        </div>
        <div class="mt50">
          <table class="table zi-table">
            <thead>
              <tr>
                <th>Date</th>
                <th>Plane Name</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Amount</th>
              </tr>
            </thead>
        <tbody>
<?php
$sql = "SELECT * FROM `subscriptions`";
$new = $con->query($sql);
$count = mysqli_num_rows($new);
while ($rowsub = $new->fetch_assoc()) {


$sql1 = "SELECT * FROM `plan` WHERE `id` = '".$rowsub['plan_id']."'";
$new1 = $con->query($sql1);
$rowpln = $new1->fetch_assoc();

$sql2 = "SELECT * FROM `products` WHERE `id` = '".$rowpln['product_id']."'";
$new2 = $con->query($sql2);
$rowp = $new2->fetch_assoc();

$sql3 = "SELECT * FROM `customers` WHERE `id` = '".$rowsub['customer_id']."'";
$new3 = $con->query($sql3);
$rowcs = $new3->fetch_assoc();
?>
    <tr class="nobrdrtd">
      <td><?php echo date('d/m/Y', strtotime($rowsub['activated_on'])); ?></td>
      <td><?php echo $rowpln['name']; ?></td>
      <td><?php echo $rowcs['name']; ?></td>
      <td><?php echo $rowp['name']; ?></td>
      <td><?php echo $rowsub['amount']; ?></td>
<?php if($count == '0'){ ?>
      <td colspan="4" style="text-align:center;">
        <h4 class="empty-data">There's no data here yet.</h4>
      </td>
<?php } ?>
    </tr>
<?php $i++; } ?>
<?php 
$datefirst = date('Y-m-d', strtotime("+30 days"));
$datesecond = date('Y-m-d', strtotime("-6 days"));


$swls = "SELECT COUNT(id) AS total FROM subscriptions WHERE activated_on BETWEEN '".$datesecond."' AND '".$datefirst."'";
$news = $con->query($swls);
$row = $news->fetch_assoc();

$swls1 = "SELECT * FROM subscriptions WHERE activated_on BETWEEN '".$datesecond."' AND '".$datefirst."'";
$news1 = $con->query($swls1);
$row1 = $news1->fetch_assoc();
$dfa = $row1['activated_on'];
?>
<tr>
  <td><?php echo $row1['activated_on']; ?></td>
  <td><?php echo $row1['amount']; ?></td>
  <td><?php echo date("D", strtotime($dfa)); ?></td>
  <td><?php echo  date('D', strtotime("+3 days")); ?></td>
</tr>
</tbody>

          </table>
        </div>
        <div class="col-md-offset-9">
          <div showpagelengthoption="" id="ember1391" class="ember-view"><div class="pagination clearfix hidden-print">

<!---->
</div>
</div>
        </div>
  </div>
</div>

  </div>
</body>
</html>
<script type="text/javascript">
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",{            
    title:{
      text: "Weekly Report",              
    },
    axisY: {
      includeZero: false,
      suffix: " QTY",
      maximum: 100,
      minimum: 0,
      gridThickness: 0
    },
    toolTip:{
      shared: true,
      content: "{name} </br> <strong>Amount: </strong> </br> Rs.: {valuef}",
//      content: "{name} </br> <strong>Temperature: </strong> </br> Min: {y[0]}°C, Max: {y[1]}°C",
    },
    data: [
    {
      type: "rangeSplineArea",
      fillOpacity: 0,
      color: "#91AAB1",
      indexLabelFormatter: formatter,
      dataPoints: [
<?php
 // echo '<script>alert("'.$rowp['id'].'");</script>';
$datefirst = date('Y-m-d', strtotime("+0 days"));
$datesecond = date('Y-m-d', strtotime("-6 days"));
$swls = "SELECT COUNT(id) AS total FROM subscriptions WHERE activated_on BETWEEN '".$datesecond."' AND '".$datefirst."'";
$news = $con->query($swls);
$row = $news->fetch_assoc();
$swls1 = "SELECT * FROM subscriptions WHERE activated_on BETWEEN '".$datesecond."' AND '".$datefirst."'";
$news1 = $con->query($swls1);
$row1 = $news1->fetch_assoc();
$dfa = $row1['activated_on'];
$act_day = date("D", strtotime($dfa));
$amount = $row1['amount'];

?>
        { label: "Monday", y: [<?php if($act_day=='Mon'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Mon'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Mon'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Tuesday", y: [<?php if($act_day=='Tue'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Tue'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Tue'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Wednesday", y: [<?php if($act_day=='Wed'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Wed'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Wed'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Thursday", y: [<?php if($act_day=='Thu'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Thu'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Thu'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Friday", y: [<?php if($act_day=='Fri'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Fri'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Fri'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Saturday", y: [<?php if($act_day=='Sat'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Sat'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Sat'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
        { label: "Sunday", y: [<?php if($act_day=='Sun'){echo $row['total']; }else{echo '0';} ?>, <?php if($act_day=='Sun'){echo $row['total']; }else{echo '0';} ?>], name: "All Plans" , valuef: "<?php if($act_day=='Sun'){ echo $row1['amount']; }else{echo '0.00';} ?>" },
      ]
    }]
  });
  chart.render();

  var images = [];    

  addImages(chart);

  function addImages(chart){
    for(var i = 0; i < chart.data[0].dataPoints.length; i++){
    var dpsName = chart.data[0].dataPoints[i].name;
    if(dpsName == "cloudy"){
      images.push(
        $('<img>').attr('src', "img/trans.png")
      );
    }
    else if(dpsName == "rainy"){
      images.push(
        $('<img>').attr('src', "img/trans.png")
      );
    }
    else if(dpsName == "sunny"){
      images.push(
        $('<img>').attr('src', "img/trans.png")
      );
    }

  images[i].attr("class", dpsName)
  .appendTo($("#chartContainer>.canvasjs-chart-container"));

  positionImage(images[i], i);
  }
  } 
  function positionImage(image, index){
    var imageCenter = chart.axisX[0].convertValueToPixel(chart.data[0].dataPoints[index].x);
    var imageTop =  chart.axisY[0].convertValueToPixel(chart.axisY[0].maximum);

  image.width('40px')
    .css({ "left": imageCenter - 20 + "px",
      "position": "absolute","top":imageTop + "px",
      "position": "absolute"
    }
  );
  }

  $( window ).resize(function() {
    var cloudyCounter = 0, rainyCounter = 0, sunnyCounter = 0;    
    var imageCenter = 0;
    for(var i=0;i<chart.data[0].dataPoints.length;i++){
      imageCenter = chart.axisX[0].convertValueToPixel(chart.data[0].dataPoints[i].x) - 20;

  if(chart.data[0].dataPoints[i].name == "cloudy"){         
    $(".cloudy").eq(cloudyCounter++).css({ "left": imageCenter});
  }
  else if(chart.data[0].dataPoints[i].name == "rainy"){
    $(".rainy").eq(rainyCounter++).css({ "left": imageCenter});  
  }
  else if(chart.data[0].dataPoints[i].name == "sunny"){
    $(".sunny").eq(sunnyCounter++).css({ "left": imageCenter}); 
  }                
  }
  });
  function formatter(e) {
    if(e.index === 0 && e.dataPoint.x === 0) {
      return "  " + e.dataPoint.y[e.index];
    }
    if(e.index == 1 && e.dataPoint.x === 0) {
      return "QTY " + e.dataPoint.y[e.index];
    }
    else{
      return e.dataPoint.y[e.index];
    }
  } 
}
</script> 