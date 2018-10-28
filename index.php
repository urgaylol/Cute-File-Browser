
<!DOCTYPE html>
<html> 
	<head lang="en">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />
		<title>files</title>
		<!-- Include our stylesheet -->
		<link href="assets/css/styles.css" rel="stylesheet"/> 
		
<style>
.button2 {
  border-radius: 4px;
  background-color: #177245;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 10px;
  width: 150px;
  transition: all 0.2s;
  cursor: pointer;
  margin: 5px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

coe{
  padding:12px 20px;
  background:#b30000;
  border:2px solid #800000;
  position: relative;
  color:#fff;
  border-radius:7px;
  text-align:center;
  float:center;
  cursor:pointer;
}

.hide_file {
    position: absolute;
    z-index: 1000;
    opacity: 0;
    cursor: pointer;
    right: 0;
    top: 0;
    height: 100%;
    font-size: 24px;
    width: 100%;
    
}

form { 
    display: inline-block;
    margin-top: 0em;
}

</style>

		<!-- FancyBox --> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

	</head> 
	<body>
			<div class="filemanager">

			<div class="search">
				<input type="search" placeholder="File name" />
			</div>
			<div class="breadcrumbs"></div>
</div>
				
				<center><img src="assets/logo.png"></img></center>				

				
				<center><a class="button" href="/"><i class="fa fa-home" aria-hidden="true"></i>Home ( / )</a> 
				<button class="button" onclick="goBack()"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</button>
			</center>

			<div class="filemanager">
			<ul class="data"></ul>
			<div class="nothingfound">
				<div class="nofiles"></div>
				<span>No files here</span>
			</div>
				
			</div>

<script>
function goBack() {
    window.history.back();
}
</script>

		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/fancybox-master/dist/jquery.fancybox.js"></script>



<script>
$('.fancybox-media').fancybox({
    type: 'iframe',
    width: 800,
    height: 580,
    // add
    fitToView: false,
    iframe : {
      preload : false
    }
});

</script>


	</body>
</html>
