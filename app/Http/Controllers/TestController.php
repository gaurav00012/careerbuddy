<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssessmentCategory as AssessmentCategory;
use App\AssessmentsQuestions as AssessmentQuestions;
use App\AssessmentScore as AssessmentScore;
use App\AssessmentResponse as AssessmentResponse;
use App\AssessmentAttempt as AssessmentAttempt;
use Carbon\Carbon;
use Auth;
use DB;

class TestController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	

	    	return view('quiz');
    }

    public function getGUID(){

    if (function_exists('com_create_guid')){

        return com_create_guid();

    }else{

        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.

        $charid = strtolower(md5(uniqid(rand(), true)));

        $hyphen = chr(45);// "-"

        $uuid = substr($charid, 0, 8).$hyphen

            .substr($charid, 8, 4).$hyphen

            .substr($charid,12, 4).$hyphen

            .substr($charid,16, 4).$hyphen

            .substr($charid,20,12);

        return $uuid;

    }

}

    public function loadTest($value){

         
    	$assmentCategory = new AssessmentCategory;
        $assessmentQuestions = new AssessmentQuestions;
    	$allActiveAssemtent = $assmentCategory::where('assessment_category_name',"$value")
    						  ->get();

                            //  dd($allActiveAssemtent);

        $allQuestions = array();   
         $questionCat = array();                    
                            
        foreach($allActiveAssemtent as $catgrykey => $activeAssessment)
        {

           
             if(!in_array($activeAssessment->assessment_display_name, $questionCat))
                {
                    array_push($questionCat,$activeAssessment->assessment_display_name);
                }

            $key;
            $assementCatergory = $activeAssessment->assessment_category_name;
            $assessmentSubcatgry = $activeAssessment->assessment_subcategory;
            $assessmentLinks = $activeAssessment->assessment_links;
            $assessmentCode = $activeAssessment->assessment_code;
            $questionsCat = $assessmentQuestions::where('question_category',"$assessmentSubcatgry")
                            ->get();
                         
             // echo "<pre>";
             // print_r ($questionsCat);
             // echo "</pre>";           
            foreach($questionsCat as $key => $questionsCat){
               

                $questionOptions = array();
                for($i=1; $i<=5; $i++)
                {
                    $optionText =  'option_'.$i.'_text';
                    $optionValue = 'option_'.$i.'_value';



                    if($questionsCat->$optionText != '')
                    {
                       //echo $assessmentSubcatgry.'-'.$questionsCat->$optionValue;
                        $questionOptions[$i]['optionvalue'] = $questionsCat->$optionValue;
                        $questionOptions[$i]['optiontext'] = $questionsCat->$optionText;
                     
                    }
                    else{
                       // echo "no options";
                    }
                }
                // $allQuestions[$assessmentSubcatgry] = $assessmentCode;

                $allQuestions[$assessmentSubcatgry][$key]['question'] = $questionsCat->question;
                $allQuestions[$assessmentSubcatgry][$key]['question_code'] = $questionsCat->question_code;
                $allQuestions[$assessmentSubcatgry][$key]['options'] = $questionOptions;
                $allQuestions[$assessmentSubcatgry][$key]['imagepath'] = '';

                if($questionsCat->image_path != '')
                    {
                         $allQuestions[$assessmentSubcatgry][$key]['imagepath'] = $questionsCat->image_path;
                    }
               // $allQuestions[$assessmentSubcatgry][1] = $assessmentCode;


            }


           

        }               
         						  
    	if(empty($allActiveAssemtent)){
    		abort(403, 'Unauthorized action.');
    	}					  
       // dd($questionCat);
    	return view('quiztest')->with('allActiveAssemtent', $allActiveAssemtent)
                               ->with('allquestions',$allQuestions)     
                               ->with('allactiveCat',$questionCat);
    	  
    	

    }

    public function calculateScore(Request $request)

    {

        

        $user = Auth::user();

        $userEmail = $user->email;

       

        $allAssessments = $request->post();
        unset($allAssessments['logout-form']);
        unset($allAssessments['search']);
        $assmentCategory = new AssessmentCategory;

        $assessmentQuestions = new AssessmentQuestions;

        // $assessMentResponse = new AssessmentResponse;

        //dd($allAssessments);

         $mainarray = array();

        $assesmentDimesions = array();

        $questionDimensions = array();

        $questionDetail = array();

        $attemptCode = $this->getGUID();



        

        //Loop through all attempt question catergory wise

        foreach($allAssessments as $key => $value)

        {

            //$dimensionInLoop

           

            $getQuestionOfAssessment = $assessmentQuestions::where('question_category',"$key")

                                         ->get();



                //Getting data accoring to catergory or question code                         

                foreach($getQuestionOfAssessment as $questionGet => $questionValue)

                 {

                   $questionCode[] = $questionValue->question_code;

                   $question =  $questionValue->question;

                   $reverse = $questionValue->reverse;

                   $dimesion_code = $questionValue->dimesion_code;

                   $assessmentCode = $questionValue->assessment_code;

                   $option_1_value = $questionValue->option_1_value;

                   $option_1_text = $questionValue->option_1_text;

                   $option_2_value = $questionValue->option_2_value;

                   $option_2_text = $questionValue->option_2_text;

                   $option_3_value = $questionValue->option_3_value;

                   $option_3_text = $questionValue->option_3_text;

                   $option_4_value = $questionValue->option_4_value;

                   $option_4_text = $questionValue->option_4_text;

                   $option_5_value = $questionValue->option_5_value;

                   $option_5_text = $questionValue->option_5_text;

                   $dimensionCode = $questionValue->dimension_codee;

                   $questionCategory = $questionValue->question_category;

                   $correctAnswer = $questionValue->answers;



                  // If dimension is GENERAL then dimension code will be question name else dimension code

                  if($dimensionCode == 'GENERAL')

                  {

                    $dimensionCode = $question;

                  }

                   $questionDimensions += [$questionValue->question_code => $dimensionCode];



                   // If dimension is not in array than push to array and assign 0

                   if(!in_array($dimensionCode,$assesmentDimesions,true))

                    {

                    $assesmentDimesions[$questionCategory][$dimensionCode] = 0;

                    }

                 }

                 // all attempt question of category

                  foreach($value as $akey => $avalue)

                    {



                      $questionExplode = explode('rad', $avalue['name']); 

                      $questionName = $questionExplode[1]; // questionid 

                      $answerValue = $avalue['value'];  // answer value



                      // here we match attempt question from question from database

                        foreach($questionDimensions as $qdkey => $qdValue)

                        {



                            // if database questionId and attempt questionID match here

                            if($qdkey == $questionName)

                            {

                                

                             // Loop all dimension with there questions

                                $reponseId = $attemptCode;   

                                $assessMentResponse = new AssessmentResponse;

                                $assessMentResponse->attempt_code = $reponseId;

                                $assessMentResponse->assessment_code = $assessmentCode;

                                $assessMentResponse->question_code = $qdkey;

                                $assessMentResponse->user_code = $userEmail;

                                $assessMentResponse->response_value = $answerValue;

                                $assessMentResponse->response_date_time = Carbon::now();

                                $assessMentResponse->created_by = $userEmail;

                                $assessMentResponse->created_on = Carbon::now();

                                $assessMentResponse->modified_by = $userEmail;

                                $assessMentResponse->record_status = '1';

                                $assessMentResponse->save();





                                foreach($assesmentDimesions as $askey => $asValue)

                                {

                                    if($askey == 'GENERAL_MENTAL_ABILITY')

                                    {

                                        foreach($asValue as $qDkey => $qDvalue)

                                        {

                                            if($qDkey == $qdValue)

                                            {



                                                $getQuestionOfAssessment = $assessmentQuestions::where('question_code',"$qdkey")

                                                 ->get();

                                                // echo "<pre>";

                                                // print_r ($getQuestionOfAssessment);

                                                // echo "</pre>";

                                                $answer = $getQuestionOfAssessment[0]->answers;

                                                if($answer == $answerValue)

                                                {



                                                    if($qDkey == 'BIOLOGYREASONING' || $qDkey == 'MECHANICALREASONING')

                                                    {

                                                         $assesmentDimesions[$key][$qDkey] += 2; 

                                                    }

                                                    else

                                                    {

                                                        $assesmentDimesions[$key][$qDkey] += 1;  

                                                    }

                                                  

                                                }

                                                else{

                                                    // echo $qdkey.'--'.$qDkey.'--'.$answerValue.'--NOOO';

                                                    // echo '<br>';

                                                }

                                            }

                                        }

                                    }

                                    else

                                    {

                                    foreach($asValue as $qDkey => $qDvalue)

                                    {

                                         // If dimensions of question match here 

                                        if($qDkey == $qdValue)

                                        {

                                        $assesmentDimesions[$key][$qDkey] += $answerValue;

                                        }

                                    }

                                  }

                                    

                                }



                            }

                        } 



                    }



                           

                                           

        }

         //dd($assesmentDimesions);

        foreach($assesmentDimesions as $asskey => $assessmentDimension)

                {

                        

                //arsort($assessmentDimension);

                  foreach($assessmentDimension as $askey => $asDimisons)

                  {

                   // echo $askey.'<br>';

                    if($asskey == 'PERSONAL_ORIENTATION')

                    {
               
                        $numberQuestion = DB::select("SELECT count(*) as qcount FROM `career_assessments_questions` where dimesion_code = '$askey'"); 
                         $asDimisons = round($asDimisons / $numberQuestion[0]->qcount);
                        
                        

                    }

                    //echo $asskey.'-'.$askey.'-'.$asDimisons.'<br>';

                    if($asskey !== 'CAREER_ORIENTATION' && $asskey !== 'GENERAL_MENTAL_ABILITY'){

                    $selectScore = DB::select("SELECT * FROM career_assessment_scores WHERE dimension_code = '$askey' AND $asDimisons BETWEEN score_from AND score_to");





                 

                    $sno = $selectScore[0]->sno;

                    $assesmntCode = $selectScore[0]->assessment_code;

                    $dimensionCode = $selectScore[0]->dimension_code;

                    $finalScore = $asDimisons;

                    $resultLabel = $selectScore[0]->result_label;

                    $resultText = $selectScore[0]->result_text;



                 $assmntAttmpt = new AssessmentAttempt;

                 $assmntAttmpt->attempt_code = $attemptCode;

                 $assmntAttmpt->assessment_code = $assesmntCode;

                 $assmntAttmpt->user_code = $userEmail;

                 $assmntAttmpt->attempt_date_time = Carbon::now();

                 $assmntAttmpt->attempt_from_ip = $request->ip();

                 $assmntAttmpt->dimension_code = $dimensionCode;

                 $assmntAttmpt->final_score = $finalScore;

                 $assmntAttmpt->result_label = $resultLabel;

                 $assmntAttmpt->result_text = $resultText;

                 $assmntAttmpt->created_by = $userEmail;

                 $assmntAttmpt->created_on = Carbon::now();

                 $assmntAttmpt->modified_by = $userEmail;

                  $assmntAttmpt->modified_on = Carbon::now();

                  $assmntAttmpt->record_status = '1';

                  $assmntAttmpt->save();



                  }  

                  elseif($asskey == 'CAREER_ORIENTATION'){

                    $selectScore = DB::select("SELECT * FROM `career_assessment_category` where assessment_subcategory = 'CAREER_ORIENTATION'");

                   

                 

                  $assesmntCode = $selectScore[0]->assessment_code;

                    

                 $assmntAttmpt = new AssessmentAttempt;

                 $assmntAttmpt->attempt_code = $attemptCode;

                 $assmntAttmpt->assessment_code = $assesmntCode;

                 $assmntAttmpt->user_code = $userEmail;

                 $assmntAttmpt->attempt_date_time = Carbon::now();

                 $assmntAttmpt->attempt_from_ip = $request->ip();

                 $assmntAttmpt->dimension_code = $askey;

                 $assmntAttmpt->final_score = $asDimisons;

                 $assmntAttmpt->result_label = '';

                 $assmntAttmpt->result_text = '';

                 $assmntAttmpt->created_by = $userEmail;

                 $assmntAttmpt->created_on = Carbon::now();

                 $assmntAttmpt->modified_by = $userEmail;

                  $assmntAttmpt->modified_on = Carbon::now();

                  $assmntAttmpt->record_status = '1';

                  $assmntAttmpt->save();



                  }

                  else if($asskey == 'GENERAL_MENTAL_ABILITY'){

                    $selectScore = DB::select("SELECT * FROM `career_assessment_category` where assessment_subcategory = 'GENERAL_MENTAL_ABILITY'");

                   

                    $assesmntCode = $selectScore[0]->assessment_code;

                $assmntAttmpt = new AssessmentAttempt;

                 $assmntAttmpt->attempt_code = $attemptCode;

                 $assmntAttmpt->assessment_code = $assesmntCode;

                 $assmntAttmpt->user_code = $userEmail;

                 $assmntAttmpt->attempt_date_time = Carbon::now();

                 $assmntAttmpt->attempt_from_ip = $request->ip();

                 $assmntAttmpt->dimension_code = $askey;

                 $assmntAttmpt->final_score = $asDimisons;

                 $assmntAttmpt->result_label = '';

                 $assmntAttmpt->result_text = '';

                 $assmntAttmpt->created_by = $userEmail;

                 $assmntAttmpt->created_on = Carbon::now();

                 $assmntAttmpt->modified_by = $userEmail;

                  $assmntAttmpt->modified_on = Carbon::now();

                  $assmntAttmpt->record_status = '1';

                  $assmntAttmpt->save();              

                  }

                }

                 

                 // $assmntAttmpt = new AssessmentAttempt;

                 // $assmntAttmpt->attempt_code = '';

                 // $assmntAttmpt->assessment_code = '';

                 // $assmntAttmpt->user_code = '';

                 // $assmntAttmpt->user_code = '';

                 // $assmntAttmpt->attempt_date_time = '';

                 // $assmntAttmpt->attempt_from_ip = '';

                 // $assmntAttmpt->final_score = '';

                 // $assmntAttmpt->result_text = '';

                 // $assmntAttmpt->created_by = '';

                 // $assmntAttmpt->created_on = '';

                 // $assmntAttmpt->modified_by = '';

                 //  $assmntAttmpt->record_status = '';

                 }  

  

         $assessmentResponse = json_encode($assesmentDimesions);



 



   

    }




}
