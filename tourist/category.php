<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/city-style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.css">
		     <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
		     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/4.0.4/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/sweetalert2/4.0.4/sweetalert2.min.js"></script>
</head>
<body>
<?php include('header.php') ?>
<?php
 include('check.php');
 $category = $_GET['category'];
// parse_str($parts['query'], $query);
?>


<h2 style="text-align: center;color: #444;">Thể loại <?php echo $category ?> gồm</h2>
<div class="content">
	<div class="panel-bar">

	<?php if($checkrole=='admin'){ ?>
		<a class="btn add_items" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Add</a>
	<?php } ?>
	</div>
	 <div class="panel-content">
	 <?php
	$link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
	mysqli_set_charset($link,"utf8");
	$sql = "select * from place where category = '".$_GET['category']."'";
	// echo $sql;
	$result = mysqli_query($link,$sql);
	if (mysqli_num_rows($result) > 0) 
	{
	    // Sử dụng vòng lặp while để lặp kết quả
	    while($row = mysqli_fetch_assoc($result)) {
	    	$ID = $row['ID'];
	       $name = $row['name'];

	       $address = $row['address'];
	       $image = $row['image'];
	?>
	 	<div class="content-item">
                      <div class="avatar">
                       <a href="info.php?name=<?php echo $name ?>">
                       <div class="image">
                            <img src="image/<?php echo $image ?>">
                        </div>
                        </a>
                      </div>
                      <div id="item-data">
                       <div class="item-title">
                      <div class="title-text">
                          <a href="info.php?name=<?php echo $name ?>" ><?php echo $name?></a>
                          </div>
                      <div class="item-addr"><?php echo $address?></div>
                  </div>
                  <?php if($checkrole=='admin'){ ?>
                  <div class="delete">
                  <button id="btn-delete" name="<?php echo $name ?>" value="<?php echo $ID ?>" ><span class="glyphicon glyphicon-remove"></span></button>
                  </div>
                  <?php } ?>
                  </div>
	 	</div>
	 	<?php       
	    }
	}
	include('popup.php');
	?>
</div>

</body>
 <script type="text/javascript">
                      $(".delete").on('click','#btn-delete',function(e)
                      {
                      // console.log(e);
                      var placeID = document.getElementsByName(e.target.name)[0].value;
                      console.log(placeID);
                      swal({
							  title: "Are you sure?",
							  text: "You will not be able to recover this imaginary file!",
							  type: "warning",
							  showCancelButton: true,
							  confirmButtonColor: "#DD6B55",
							  confirmButtonText: "Yes, delete it!",
							  cancelButtonText: "No, cancel plx!",
							  closeOnConfirm: false,
							  closeOnCancel: false
							}).then(function() {
								  swal(
								    'Deleted!',
								    'Your imaginary file has been deleted.',
								    'success'
								  );
								  $.get('delete.php?id='+placeID, function (data) { 
			                        console.log(data);
			                        // location.reload();  
			                        setTimeout(function()
			                              {document.location.reload()},
			                            1000);
			                      }); 
								});
							});
					
</script>
</html>