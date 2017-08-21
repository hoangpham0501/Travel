<?php 
session_start();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/header.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	    	<div class="header">
    		<div class="header-toolbar">
        <div class="icon">
        <a href="index.php"><img src="image/tripnow.vn.png"></a>
        </div>

          <div class="searchbar">
          <form method="GET" action="search.php" accept-charset="UTF-8">
          <input type="text" id="txt_search" name="search" class="searchbox" placeholder="Search.." required>
          <button type="submit" id="btn_search" class="alert button expand"><span class="glyphicon glyphicon-search"></span></button>
          </form>
          </div>
          <div class="dropdown-cate">
          <form name="myform" action="category.php" method="GET">
          <select name="category" onchange="this.form.submit()">
                  <option value="empty">--Category--</option> 
                  <option value="Khu nghỉ dưỡng">Khu nghỉ dưỡng</option>
                  <option value="Công viên vui chơi">Công viên vui chơi</option>
                  <option value="Du lịch sinh thái">Du lịch sinh thái</option>
                  <option value="Chùa và Nhà thờ">Chùa và Nhà thờ</option>
                  <option value="Thăm quan và Chụp ảnh">Thăm quan và Chụp ảnh</option>
                </select>
                </form>
          </div>
            <ul>
            <?php  if(isset($_SESSION['username'])){ ?>
                <li><div class="dropdown">
                <button class="btn dropdown-toggle user-disabled" type="button" data-toggle="dropdown" aria-expanded="false"> <?php echo $_SESSION['username']?></button>
                                   </div>
                                   </li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            <?php }
            else { ?>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-plus"></span> Register</a></li>
            <?php } ?>
                 
            </ul>
          </div>

    		</div>
    	</div>
<script type="text/javascript">
    
</script>