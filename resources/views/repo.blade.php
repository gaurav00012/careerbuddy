<?php 

// echo "<pre>";
// print_r ($report);
// echo "</pre";

foreach($report as $rpkey => $repoVal)
{
	
	// echo $repoVal['assesmentname'];
	// echo '<br>'.'------------------------'.'<br>';
	
	foreach($repoVal['dimension'] as $rpDimkey => $rpDimVal)
	{
		
		// echo $rpDimVal['dimensionCode'].'<br>'.'-'.$rpDimVal['resultLabel'].'-'.$rpDimVal['resultTxt'].'-'.$rpDimVal['finalScore'].'<br>';
		// echo $rpDimVal['resultLabel'];
		// echo $rpDimVal['resultTxt'];
		// echo $rpDimVal['finalScore'];
		
	}
	//echo '------------------------'.'<br>';
}
?>
<?php
$htmlToPdf = '
<!DOCTYPE html>
<html>
<head>
	<title>Assessment Report</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
canvas {
    width: 800px !important;
    height: 30em !important;
    display: flex;
    /* margin-left: 4%; */
}
</style>
</head>
<body>
<!-- <div class="row"> -->
	
		
		<div class="container" style="page-break-before:always">
			<div class="row">
			 <div class="col-md-12 col-lg-12 col-sm-12">
			 	<div class="col-md-6 col-lg-6 col-sm-6">
					<img src="http://localhost:8000/img/carrerbuddylogo2.png" alt="Card">
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6">
					<img src="http://localhost:8000/img/ttafulllogo.png" style="width:50%" alt="Card">
				</div>
				</div>
			</div>
			<div class="row" style="page-break-before:always">
			<h3>Introduction</h3>
			<hr style="border-top: 2px solid red;">
			<h4>Dear Gaurav,</h4>
			<p>Thank you for your being associated with the Career Guidance Program at Career Buddy.</p>

			<p>You must have been eagerly awaiting the result and interpretation of the assessment that you took on 29/04/2019 at Psychowellness Center, Janakpuri, New Delhi.</p>

			<p>The broad findings are presented here now. These have been understood, analyzed and interpreted to comprise this report. You will find an elaborate explanation of your Personal Orientation, Decision style, Career orientation, career Interest Personality profile, and Aptitude in the pages that follow. Your assessment results have been understood and put through the Career Fitment Analytics system, to identify the most suited career profiles for you.</p>

			<p>We recommend that you and your parents familiarize yourselves with the report before the one-on-one interaction with our counselors. They shall guide you through your further education and career planning process, so as to facilitate systematic and informed academic and career decision making.</p>
			<p>We wish you the very best,</p>

			<p>Team Career Buddy</p>
		</div>

			<div class="row" style="page-break-before:always">
			<h3>ABOUT THE PSYCHOMETRIC REPORT</h3>
			<hr style="border-top: 2px solid red;">
			<p>This psychometric report provides an in-depth description of your responses to the Career Guidance Program Assessment by <b>Career Buddy</b>, your <b>Career Angel</b>. Designed to help you identify and understand your dominant styles, potential, personality and career interests, aptitude and emotional intelligence, this report can start you on the journey of matching your attributes with your academic and career goals. To guide you through the career planning process and help you set goals, a variety of career recommendations that correspond with your personal attributes are provided. This report is designed to expand your options, rather than limit them, thereby providing you many avenues to explore. While reading the report you should keep the following into mind.</p>

			<ul>
				<li>This report is primarily based on your introspection to the information & data provided by you on the Career Guidance Program Assessment tools.</li>
				<li>This report is primarily based on your introspection to the information & data provided by you on the Career Guidance Program Assessment tools.</li>
				<li>When you are making career decisions, you are advised to gather as much information as possible so that you take informed decision; your Career Angel will provide support and solutions.</li>
				<li>The analyses drawn in this report are based on some evidence and hence must be supplemented with other information such as academic grades, etc. The results of this report should be used with caution.</li>
			</ul>	

			<h3><b>BENEFITS OF THIS REPORT</b></h3>
			<ul>
				<li>Understanding your abilities, personal characteristics and interests and preferences</li>
				<li>Identifying career options that are consistent with your personal profile</li>
				<li>Directing your career exploration and planning based on informed and accurate results</li>
				<li>Charting out action plan to advance your career goals</li>
				<li>Gaining extensive insights about different careers</li>
			</ul>
			<h3><b>STRUCTURE OF THIS REPORT</b></h3>
			<p>STRUCTURE OF THIS REPORT</p>
			<p>Section - I - Psychometric Analysis: Orientation, Interest, Personality and Aptitude,</p>
			<p>Section - II - Summary and Recommendations</p>	

		</div>

		<div class="row" style="page-break-before:always">
			<h3>ASSESSMENT REPORT</h3>
			<hr style="border-top: 2px solid red;">
			<table style="width:100%">
			  <tr>
			    <th>Report Number</th>
			    <td>CB/pwc01/1001</td>
			  </tr>
			  <tr>
			    <th>Name</th>
			    <td>Gaurav</td>
			  </tr>
			  <tr>
			    <th>Parent Name</th>
			    <td>ABC</td>
			  </tr>
			  <tr>
			    <th>Sex</th>
			    <td>Male</td>
			  </tr>
			  <tr>
			    <th>Contact Number</th>
			    <td>9711376425</td>
			  </tr>
			  <tr>
			    <th>Email id</th>
			    <td>aggarwal.gaurav611@gmail.com</td>
			  </tr>
			  <tr>
			    <th>Address</th>
			    <td>FA - 331, Mansarover Garden, New Delhi - 110015</td>
			  </tr>
			  <tr>
			    <th>City</th>
			    <td>New Delhi</td>
			  </tr>
			  <tr>
			    <th>State</th>
			    <td>New Delhi</td>
			  </tr>
			   <tr>
			    <th>Date</th>
			    <td>29.04.2019</td>
			  </tr>

			</table>

			<p><span>Request for Parents/Teachers:	</span>The contents of the report should be reviewed and understood by the parents/ teachers before any discussion with their children. It is our sincere request that you use the report and its findings to make the life of your child stress free and help him discover his true inner potential and talents. We wish you and your child the very best…!</p>

			<h3><b>Note:-</b></h3>
			<ul>
				<li>Do not compare your findings with others. God has made each of us u	unique!!!</li>
				<li>These results are based on the honest participation during the test for Career Guidance.</li>
				<li>The results are only indicative and the company shall in no case be liable for failure in any particular course of study or activity recommended in the report.</li>
			</ul>	
		</div>
		<div class="row" style="page-break-before:always">
			<h3>INTRODUCTION TO THE "WORLD OF CAREERS" </h3>
			<hr style="border-top: 2px solid red;">
			<img src="http://localhost:8000/img/careerpic2.jpg" style="width: 100%;" alt="Card image cap">

		</div>
		<div class="row" style="page-break-before:always">
			<h3>INTRODUCTION</h3>
			<hr style="border-top: 2px solid red;">
			<p>Individuals behave in different ways, these are circumstance driven, nevertheless each one has a personality that remains identifiable. If this were not true, it would be impossible for people to anticipate reactions of individual’s; the very fact that there are aspects of individual which are predictable testifies to your personality.</p>
			<p>This doesn’t mean personality never change. It may well do so, especially if you make efforts to become aware of your potential and give yourself experiences which are developing. However, it seems practical to take your personality as it is now in order to see how it may relate more successfully to one career than another.</p>
			<p>If you work at something which ‘suits you’ then you avoid frustration, while your continuing satisfaction and enjoyment are more likely to be assured. CAREERBUDDY  believes that most careers can be done equally enjoyable by people with widely varying characteristics.</p>
			<p>Self-Awareness is the foundation of professional development & growth. Gain insight into your work personality by carefully reviewing this report, which will help you to develop a:</p>
			<ul>
				<li>Deeper understanding of your strengths and growth opportunities,</li>
				<li>Clear picture of how your behavior impacts others</li>
				<li>Better appreciation for people’s personal styles and how to interact with them effectively.</li>
			</ul>	
			<p>This Psychometric report provides an in-depth description of your responses to the Career Guidance Program Assessment. <b>CAREER BUDDY </b>has designed <b>STREAMOMETER</b> to help you identify and understand your personal orientation, career orientation, career interests, personality and potential, this report can help you to kick start you on the journey of matching your attributes with your academic and career goals.</p>

			';

			 $htmlToPdf;
			 $assMntCOunt = 1;
?>

			@foreach($report as $rpkey => $repoVal)
				

				<?php 

				$htmlToPdf.= "<div class='assessmetgraphs' style='page-break-before:always'>";
				if($assMntCOunt == 1)
					$htmlToPdf.= '<h3><b>Section 1 - PSYCHOMETRIC ANALYSIS</b></h3>
								  <h3>A. Dominant Personal Orientations Approach to Decisions </h3>
								 <p>The response of Mr. Gaurav on Personal Orientation & decision is shown below:</p>';

				$htmlToPdf.= '<h2>'.$repoVal['assesmentname'].'</h2>';
				$htmlToPdf.= "<div class='col-md-12 col-sm-12 col-lg-12'>

						<canvas id='".str_replace(' ', '', $repoVal['assesmentname'])."' style='min-width:50px;height:auto'></canvas>
					</div>";
				//echo ;
				$asscount = 1;	
				foreach($repoVal['dimension'] as $rpDimkey => $rpDimVal)
				{
				 $htmlToPdf.= "<h5><b>".$rpDimVal['dimensionCode']."</b></h5>";
				
				$htmlToPdf.= "<p>".$rpDimVal['resultTxt']."</p>";
				if($asscount == 3 && ($repoVal['assesmentname'] == 'CAREER INTEREST INVENTORY' || $repoVal['assesmentname'] == 'CAREER ORIENTATION')) break;
				$asscount++;	
				}

				$htmlToPdf.= "</div>";
				$assMntCOunt++;

				?>
					
					

				


			@endforeach
		<?php
			$htmlToPdf.= '</div>';
		?>
		<?php echo $htmlToPdf; ?>




		
	
<!-- </div> -->
</body>
<script>
	function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
        }

 // console.log(getRandomColor()); 
     
$(document).ready(function(){
var reportJson = <?php echo json_encode($report);?>;

for (var key in reportJson) {
	var graphElement = reportJson[key].assesmentname.replace(/ /g,'');
	//console.log(graphElement);
	var graphLabel = [];
	var graphData = [];	
	var barColor = [];
	for(dimKey in reportJson[key].dimension)
	{
		graphLabel.push(reportJson[key].dimension[dimKey].dimensionCode);
		graphData.push(reportJson[key].dimension[dimKey].finalScore);
		barColor.push(getRandomColor());
	}
	
var ctx = document.getElementById(graphElement).getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        labels: graphLabel, 
        datasets: [{
            label: reportJson[key].assesmentname,
            data: graphData,
            backgroundColor: barColor,
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});


// var canvasGraph = document.getElementById(graphElement);
// var canvasimg = canvasGraph.toDataURL('image/png');

// canvasGraph.innerHTML = '<img src="'+canvasimg+'"/>';




// var canvasimg = canvasGraph.toDataURL('image/png');
// canvasGraph.innerHTML = '<img src="'+canvasimg+'"/>';
// document.write('<img src="'+canvasimg+'"/>');
// console.log(canvasGraph);

}	


});
setTimeout(function(){
let repostJson = 
console.log("hey");

for (var key in repostJson) {
	var graphElement = repostJson[key].assesmentname.replace(/ /g,'');
	console.log(graphElement);
	var canvasGraph = document.getElementById(graphElement);
	var canvasimg = canvasGraph.toDataURL('image/png');
	//canvasGraph.replaceNode('<img src="'+canvasimg+'"/>');
	canvasGraph.innerHTML = '<img src="'+canvasimg+'"/>';

	}

},2000);

</script>
</html>

