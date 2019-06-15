@extends('common.app')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ URL::asset('css/career/quiz.css') }}" />
<div class="container-fluid">
   
   
<!-- Body -->
<main class="main_body">
   <!--  <canvas id="myChart" width="400" height="400"></canvas> -->

    <div id="main-assessment">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <div class="m-bt-20">
               <div class="row">
                  <div class="col-md-12" style="display: flex;justify-content: space-around;">
                     @foreach($allactiveCat as $allactiveCat)
                     <button type="button" class="btn btn-primary">{{$allactiveCat }}<span class="badge"></span></button> 
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div>
      <br>
      <div class="jumbotron" id="quiz-introduction">
         <center>
            <h4>Guidelines for giving career assessment</h4>
            <ul>
               <li>Attempt each question of every module</li>
               <li>No Negative marking</li>
            </ul>
         </center>
      </div>
      <div class="col-md-12">
         <center><button class="btn btn-danger" @click="begintest" id="begintest">Begin Test</button></center>
      </div>
   </div>
   <div class="questonsoptions"style="display:none">


      <?php 
    $assmentCount = '1';
    $display = 'block';
   
    foreach($allquestions as $alkey => $alvalue) {


      
            if($assmentCount !== '1')
            {
                $display = 'none';
            }
            
        ?>
      <div class="container" id="<?=$assmentCount; ?>" style="display:<?=$display?>">
         <div class="row">
     <form method="post" id="<?= $alkey; ?>">
            <div class="addiction_card col-md-6 offset-md-3">
               <h3 class="text-center"><?= $alkey; ?></h3>
            </div>
            <div id="assessmentPage">
               <div class="addiction_card_1">
                  <div class="progress">
                     <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        0%
                     </div>
                  </div>
                   <?php 
                        $questionDisplay = 'block';
                        $questionCount = '1';
                        $noOfQuestions =  sizeof($alvalue);
                        foreach($alvalue as $quesnkey => $quesnvalue){

                           // echo "<pre>";
                           // print_r ($quesnvalue);
                           // echo "</pre>";

                            if($questionCount !== '1')
                            {
                                $questionDisplay = 'none';
                            }
                             

                    ?> 
                  <div class="questionbox" id='<?= $quesnvalue['question_code'] ?>' style="display:<?= $questionDisplay?>">
                     <p class="w3-animate-left" id="questio_n"><?= $quesnvalue['question'] ?></p>
                     <?php
                     if($quesnvalue['imagepath'] !== ''){
                     echo '<img src="http://localhost:8000/img/testphoto/'.$quesnvalue['imagepath'].'" alt="Smiley face" height="42" width="">';
                     }
                    ?>
                     <div class="w3-animate-right">
                        <div class="row">
                           <div class="question">
                            
                              <p id="quiz_question">
                                <?php foreach($quesnvalue['options'] as $opkey => $qoptions){?>
                                 <input type="radio" name="rad<?= $quesnvalue['question_code'] ?>" id="rad<?= $quesnvalue['question_code'].$opkey ?>" value="<?= (int)$qoptions['optionvalue'] ?>" @click="navigate(<?= $questionCount?>,'<?= $quesnvalue['question_code']?>','<?= $noOfQuestions ?>','<?=$assmentCount; ?>', 'NEXT');"><label class="radiochk" for="rad<?= $quesnvalue['question_code'].$opkey ?>"><?=$qoptions['optiontext']?></label>
                              
                                <?php }?>
                              </p>
                       
                           </div>
                        </div>
                     </div>

                  </div>
              <?php 
              $questionCount++;
          }?>
               </div>
            </div>

        </form>
         </div>
      </div>
<?php $assmentCount++; }?>








    <center><button type="button" id="submitbtn" @click="formsubmit" class="btn btn-success" style="display:block">Submit</button></center>
   </div>
</div>

<div id="graphscontainer">
   </div>


</main>
<script></script>
<script src="{{ asset('js/careerassessment.js')}}"></script>
@endsection