<html lang="en">
<head>
  <title>Filter for followers and following count</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<style type="text/css">
  .ui-widget-header{
    background: #6734eb;
  }
  .ui-state-default{
    background: #667561;
  }
  .table th {
    text-align: center;
  } 
</style>
<div class="card text-center" style="padding:20px;">
  <h3>Filter for followers and following count</h3>
</div><br>
  
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12">
        <p>
          <label for="amount">Follwing count:</label>
          <span id="amount" style="border:0; color:#00008B; font-weight:bold;"></span>
        </p>
      <div id="slider-range"></div><br>

      <table class="table table-striped" id="tableData">
        <thead>
          <tr>
            <th>Bio</th>
            <th>Followers</th>
            <th>Following</th>
            <th>user_id</th>
            <th>User_name</th>
            <th>City</th>
            <th>Contact</th>
            <th>Genre/Category</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){

    var v1 = 1000;
    var v2 = 30000;

    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 8000,
      values: [v1, v2],
      slide: function(event, ui) {
          $("#amount").html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
          v1 = ui.values[ 0 ];
          v2 = ui.values[ 1 ];
          loadRecords(v1, v2);
        }
    });

    $("#amount").html("$" + $("#slider-range" ).slider( "values", 0 ) + " - $" + $("#slider-range").slider("values", 1));

    function loadRecords(range1, range2){
      $.ajax({
        url : "action.php",
        type: "POST",
        data : {minAge : range1, maxAge : range2},
        cache:false,
        success:function(result){
          $("#tableData tbody").html(result);
        }
      });
    }
    loadRecords(v1, v2);
  });
</script>