<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="css/index.css">
	  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<?php include('header.php') ?>
<div class="project">
  <ul class="project__list">
    <li class="project__item"><a href="city.php?city=DN" class="project__link">Đà Nẵng</a></li>
    <li class="project__item"><a href="city.php?city=QN" class="project__link">Quảng Nam</a></li>
    <li class="project__item"><a href="city.php?city=HN" class="project__link">Hà Nội</a></li>
    <li class="project__item"><a href="city.php?city=HUE" class="project__link">Huế</a></li>
    <li class="project__item"><a href="city.php?city=HCM" class="project__link">Hồ Chí Minh</a></li>
  </ul>

  <ul class="project__bg-list">
    <li class="project__bg-item active"></li>
    <li class="project__bg-item"></li>
    <li class="project__bg-item"></li>
    <li class="project__bg-item"></li>
    <li class="project__bg-item"></li>
  </ul>
</div>
	<?php $username = $_SESSION['username'];?>
	<script type="text/javascript">
	console.log(<?php $username?>);
		var project = $('.project');
var pLink = project.find('.project__link');
var pBg = project.find('.project__bg-item');

var changeBg = function() {
  var thisProject = $(this);
  var thisProjectIndex = thisProject.parent().index();
  var thisProjectBg = pBg.eq(thisProjectIndex);
  
  // hide all backgrounds and fade out project names
  pBg.removeClass('active');
  pLink.css('opacity', '0.4');
  
  // reveal the project bg you hovered over and increase opacity for that name
  thisProject.css('opacity', '1');
  thisProjectBg.addClass('active');
};

var showFirst = function() {
  // when the page loads reveal the first project
  pLink.css('opacity', '0.4');
  pLink.parent().first().children().css('opacity', '1');
  pBg.first().addClass('active');
}

var init = function() {
  $(document).on('ready', showFirst);
  pLink.on('mouseenter', changeBg);
};

init();

	</script>
</body>
</html>