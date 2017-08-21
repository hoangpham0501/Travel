 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/info.css">
   <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
   <link rel="stylesheet" type="text/css" href="css/comment.css">
 </head>
  <body>
  <?php include('header.php') ?>
 <?php include('check.php');
 $name = $_GET['name'];
 $link = mysqli_connect('localhost:3306','root','','tourist') or die("Could not connect");
  mysqli_set_charset($link,"utf8");
  $sql = "select * from place where  name = '".$_GET['name']."'";
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
         $category = $row['category'];
         $quality = $row['quality'];
         $time = $row['time_open'];
         $phone = $row['phone'];
         if(!$phone) $phone ='Đang cập nhật';
         $city = $row['city'];
         $des = $row['description'];
         if($city=='DN') $city = 'Đà Nẵng';
        if($city=='QN') $city = 'Quảng Nam';
        if($city=='HN') $city = 'Hà Nội';
        if($city=='HUE') $city = 'Huế';
        if($city=='HCM') $city = 'Hồ Chí Minh';

        $_SESSION['ID'] = $ID;
 ?>

          <div class="container">
            <div class="info-content">
                  <div class="pic-left">                    
                        <img <?php echo 'src="image/'.$image.'"'?>>
                  </div>
                  <div class="info-right">
                    <div class="city-place"><?php echo $city?> > <?php echo $name?></div>
                    <h1><?php echo $name?></h1> 
                    <h3><?php echo $category?></h3>          
                    <div class="info-quality">
                      <h2><?php echo $quality?></h2>
                      <span>Chất lượng</span>
                    </div>
                    <p><span class="glyphicon glyphicon-share-alt"></span> <?php echo $address?></p>
                    <p><span class="glyphicon glyphicon-time"></span><span style="color: #03ae03;font-weight: 700;"> Giờ mở cửa </span><?php echo $time?></p>
                    <p style="font-weight: 700"><span class="glyphicon glyphicon-earphone"></span> <?php echo $phone?></p>
                    <?php if($checkrole=='admin'){ ?>
                    <button class="btn-edit" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> Edit place</button>
                    <?php } ?>
                  </div>

                  </div> 
<!--             <div class="panel-btn">
               <a href="" class="saved-btn"><span class="glyphicon glyphicon-tag"></span> Saved</a>
            </div> -->
            <div class="description">
            <h4>THÔNG TIN</h4>
            <p><?php echo $des ?></p>
            </div>
            <?php
                    $sql2 = "select * from comments where id_post = '".$ID."'";
                    $result2 = mysqli_query($link,$sql2);
                    if(mysqli_num_rows($result2)>0){
                      while($row = mysqli_fetch_assoc($result2)) {
                        $username = $row['username'];
                        $content = $row['content'];
                        ?>
                      <div class="comment">
                      <label id="lb2"><?php echo $username ?></label>
                      <textarea id="userCmnt" readonly><?php echo $content ?></textarea>
                      </div>
                <?php } ?>
              <?php } ?>

                  <?php if($checkrole=='user' || $checkrole=='admin'){ ?>
                  <form action="comment.php?name=<?php echo $name?>" method="POST"  class="form">
                    <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
                    <label id="lb1">Comment</label>
                    <textarea id="userCmnt" name="content" placeholder="Write your comment here" required></textarea>                       
                    <button type="submit" class="btn-submit" name="OK">Submit</button>            
                  </form>
                  <?php } ?>
                </div>
            
            </div>
                  <?php 
                        }
                  }
                  ?>


<!-- Modal            -->
<link rel="stylesheet" type="text/css" href="css/city-style.css">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit place</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="edit.php" accept-charset="UTF-8" class="form" enctype="multipart/form-data">
            <input type="text" name="ID" value="<?php echo $ID ?>" style="display: none;">
            <div class="right-modal">
            <div class="form-group main">
                <label for="Name" class="mylabel">Name</label>
                <input placeholder="" name="name" type="text" value="<?php echo $name?>">
            </div>

            <div class="form-group main">
                <label for="Address" class="mylabel">Address</label>
                <input placeholder="" name="address" type="text" class="addr-input" value="<?php echo $address?>">
                 <select name="city">
                  <option value="Đà Nẵng" <?php if($city=='Đà Nẵng') echo 'selected'?>>Đà Nẵng</option>
                  <option value="Quảng Nam" <?php if($city=='Quảng Nam') echo 'selected'?>>Quảng Nam</option>
                  <option value="Hà Nội" <?php if($city=='Hà Nội') echo 'selected'?>>Hà Nội</option>
                  <option value="Huế" <?php if($city=='Huế') echo 'selected'?>>Huế</option>
                  <option value="Hồ Chí Minh" <?php if($city=='Hồ Chí Minh') echo 'selected'?>>Hồ Chí Minh</option>
                </select>
            </div>

            <div class="form-group main">
                <label for="Open time" class="mylabel">Open time</label>
                <input placeholder="00:00 - 00:00" name="time_open" type="text" value="<?php echo $time?>">
            </div>

            <div class="form-group main">
                <label for="Quality" class="mylabel">Description</label>
                <textarea name="des"  rows="2" class="des-input" ><?php echo $des?></textarea> 
            </div>
            </div>

            <div class="left-modal">
            <div class="form-group">
              <img id="blah" src="image/<?php echo $image?>" alt="your image" />
                <input class="filestyle" type="file" name="image" data-input="false" id="imgInp">
            </div>
            </div>
         </div>
            <div class="modal-footer">
                <label for="Quality" class="mylabel">Quality</label>
                <input type="text" name="quality" placeholder="? / 10" class="quality-input" value="<?php echo $quality?>">
                <label for="Quality" class="phone-label"><span class="glyphicon glyphicon-earphone"></span></label>
                <input placeholder="" name="phone" type="text" class="phone-input" value="<?php echo $phone?>">
                <select name="category">
                  <option value="Khu nghỉ dưỡng" <?php if($category=='Khu nghỉ dưỡng') echo 'selected'?>>Khu nghỉ dưỡng</option>
                  <option value="Công viên vui chơi" <?php if($category=='Công viên vui chơi') echo 'selected'?>>Công viên vui chơi</option>
                  <option value="Du lịch sinh thái" <?php if($category=='Du lịch sinh thái') echo 'selected'?>>Du lịch sinh thái</option>
                  <option value="Chùa và Nhà thờ" <?php if($category=='Chùa và Nhà thờ') echo 'selected'?>>Chùa và Nhà thờ</option>
                  <option value="Thăm quan và Chụp ảnh" <?php if($category=='Thăm quan và Chụp ảnh') echo 'selected'?>>Thăm quan và Chụp ảnh</option>
                </select>
                <input type="submit" value="Save" class="submit">
           </form>
        </div>
      </div>
    </div>
    </div>
    <script type="text/javascript">
      function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$("#imgInp").change(function(){
    readURL(this);
});
    </script>
          <!-- ////////////////////////////////////// -->
 </body>
 </html>
