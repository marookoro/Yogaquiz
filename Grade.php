<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Yoga Quiz</h1>
		
        <?php
	   if(isset($_POST['question-1-answers'])){
	   $answer1 = $_POST['question-1-answers'];
            }


           if(isset($_POST['question-2-answers'])){
	   $answer2 = $_POST['question-2-answers'];
            } 

          if(isset($_POST['question-3-answers'])){
	   $answer3 = $_POST['question-3-answers'];
            }

	   if(isset($_POST['question-4-answers'])){
	   $answer4 = $_POST['question-4-answers'];
            }

	  if(isset($_POST['question-5-answers'])){
	   $answer5 = $_POST['question-5-answers'];
            }
        
            $totalCorrect = 0;
            
            if(isset($_POST['question-1-answers'])){ 
		if($answer1 == "A"){ $totalCorrect++; }
              }

            if (isset($_POST['question-2-answers'])) {
		if($answer2 == "C"){ $totalCorrect++; }
		}

            if (isset($_POST['question-3-answers'])){
		if($answer3 == "B") { $totalCorrect++; }
		}
            if (isset($_POST['question-4-answers'])){
		if($answer4 == "C"){ $totalCorrect++; }
		}
	     if (isset($_POST['question-5-answers'])){
            if ($answer5 == "B") { $totalCorrect++; }
}
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";

            
	   
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>
