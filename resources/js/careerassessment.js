//require('./bootstrap');

window.Vue = require('vue');
import Vue from "vue";
import jQuery from 'jquery';
import swal from 'sweetalert';
import axios from 'axios';
var Chart = require('chart.js');



const careerAssessment = new Vue({
	el : "#main-assessment",

	methods:{

		getclick(){
			alert("hellow rold");
		},

navigate(qno, question_code,noofquestions,assessmentCount,direction)

{

let forms = $('form').length;


if(assessmentCount == forms)
{
	$('#submitbtn').show();
}
if(qno == noofquestions)
{
	
	$('#'+assessmentCount).hide();
	$('#'+assessmentCount).next().show();
	let assessmentNamr = $('#'+assessmentCount).next().find('h3').text();
	//alert(assessmentNamr+"next assessment");
	swal('Your next assessmnent is of '+ assessmentNamr);

}
//let numberOfquestion = '<?php echo $numberofquestions;?>';

  if(direction == 'NEXT')

  {

  /*  if($("#hidQno").val() == $("#hidQuestionCount").val())

    {

$("#hidQno").append("#btn-default");
      //$("#btnSubmit").show();

      return;
      

    }*/

    $("#hidQuestionCode").val($("#"+question_code).next().attr('id'));

    

    //$("#"+question_code).delay("slow").fadeOut();

    //$("#"+question_code).next().delay("fast").fadeIn();

    $("#"+question_code).hide();

    $("#"+question_code).next().show();

    $("#btnPrev").show();

    $("#hidQno").val(parseInt($("#hidQno").val())+1);

   // calculate_progress();

    if($("#hidQno").val() == $("#hidQuestionCount").val())

    {
      //$("#btnPrev").hide();
      $("#btnSubmit").trigger("click");

      //$("#btnSubmit").show();

      return;

      $("#btnNext").hide();


    }

  }
  

},

	begintest(){
			$('#quiz-introduction').hide();
			$('#begintest').hide();
			$('.questonsoptions').show();
		},

	formsubmit(){
		let allForms = $('form');
		let mainObject = {};
		//$('#submitbtn').hide();
		for(let i=0;i<allForms.length;i++){
			
			//console.log($('#'+allForms[i].id).serializeArray());
			//allForms[i].id += $('#'+allForms[i].id).serialize();
			//mainObject += allForms[i].id;
			let formName = allForms[i].id;
			//console.log(formName);
			let formData = $('#'+allForms[i].id).serializeArray();
			mainObject[formName] =  formData;
		}
		axios.post('/carrer-assement-calculation',mainObject).
		then(function(respose){
			//console.log(respose.data);
			let data = respose.data;
			console.log(data);
			let graphCount = 0;
			
		// 	for (var key in data) {
		// 	var graphLabel = [];
		// 	var graphData = [];
				
		// 		let canvasEl = "<div class='col-md-4 col-lg-4 col-sm-4'><canvas id='myChart"+graphCount+"' width='100' height='100'></canvas></div>";
		// 		console.log(canvasEl);
		// 		$('#graphscontainer').append(canvasEl);
		// 	for(var lkey in data[key])
		// 	{
		// 		graphLabel.push(lkey);
		// 		graphData.push(data[key][lkey]);
		// 	//	console.log(graphLabel);
		// 	//	console.log(data[key][lkey]);
		// 	}
		// 	//console.log(graphLabel);
		// 	//console.log(graphData);
			
		// 	var conCatgraphCount = "myChart"+graphCount;
		// 	var ctx = document.getElementById(conCatgraphCount).getContext('2d');
		// 	console.log(ctx);
		// 	var myChart = new Chart(ctx, {
		//     type: 'bar',
		//     data: {
		//         labels: graphLabel,
		//         datasets: [{
		//             label: '# of Votes',
		//             data: graphData,
		//             backgroundColor: [
		//                 'rgba(255, 99, 132, 0.2)',
		//                 'rgba(54, 162, 235, 0.2)',
		//                 'rgba(255, 206, 86, 0.2)',
		//                 'rgba(75, 192, 192, 0.2)',
		//                 'rgba(153, 102, 255, 0.2)',
		//                 'rgba(255, 159, 64, 0.2)'
		//             ],
		//             borderColor: [
		//                 'rgba(255, 99, 132, 1)',
		//                 'rgba(54, 162, 235, 1)',
		//                 'rgba(255, 206, 86, 1)',
		//                 'rgba(75, 192, 192, 1)',
		//                 'rgba(153, 102, 255, 1)',
		//                 'rgba(255, 159, 64, 1)'
		//             ],
		//             borderWidth: 1
		//         }]
		//     },
		//     options: {
		//         scales: {
		//             yAxes: [{
		//                 ticks: {
		//                     beginAtZero: true
		//                 }
		//             }]
		//         }
		//     }
		// });









		// 	graphCount++;
				
		// }
			




		}).
		catch(function(reponse){
			//console.log(reponse);
		});
	}	
	},

	



});
// $('#begintest').click(function(){
// 	$('#quiz-introduction').hide();
// 	$('#begintest').hide();
// });