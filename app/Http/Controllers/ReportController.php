<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AssessmentAttempt as AssessmentAttempt;
use App\AssessmentCategory as AssessmentCategory;
use App\AssessmentDimension as AssessmentDimension;
use Auth;
//use PDF;
use Elibyy\TCPDF\Facades\TCPDF;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
      
    }
    public function index()
    {
        //
        $user = Auth::user();
        $userEmail = $user->email;
        
        $attemptAssesment = new AssessmentAttempt;
        $AssessmentCategory = new AssessmentCategory;
        $reportHtml = '';
        $reportArray = [];

        $getAssessmentCategory = $AssessmentCategory::where('assessment_category_name','CLASS_8_10')
                                                    ->where('assessment_code','!=','')
                                                    ->get();
         foreach($getAssessmentCategory as $assmntkey => $getAssessmentCategory)
         {

           $AssessmentCategoryName = $getAssessmentCategory->assessment_category_name;
           $assessmentSubcat = $getAssessmentCategory->assessment_subcategory;
           $assessmentName = $getAssessmentCategory->assessment_display_name;
           $assessmentCode = $getAssessmentCategory->assessment_code;
           
           $assmntarray[$assmntkey] = array(); 
           $assmntarray[$assmntkey]['assesmentname'] = $assessmentName; 
            $assmntarray[$assmntkey]['dimension'] = array();

         
            $getAssementScore = $attemptAssesment::where('assessment_code',$assessmentCode)
                                                    ->where('attempt_code','f9669840-72a1-5931-4cc3-8dcb6c88823a')
                                                    ->orderBy('final_score','DESC')
                                                    ->get();

            foreach($getAssementScore as $assmntCatkey => $assmentCatry)
            {    
                $dimenScore = array();
                
                $assmntarray[$assmntkey]['attemptCode'] = $assmentCatry->attempt_code;
                $assmntarray[$assmntkey]['assementCode'] = $assmentCatry->assessment_code;
                $assmntarray[$assmntkey]['attmptDatetime'] = $assmentCatry->attempt_date_time;
                $dimenScore = [
                                'dimensionCode' => $assmentCatry->dimension_code, 
                                'resultLabel' => $assmentCatry->result_label,
                                'resultTxt' => $assmentCatry->result_text,
                                'finalScore' => $assmentCatry->final_score
                                            ];
                                    // rsort($dimenScore);
                        array_push($assmntarray[$assmntkey]['dimension'], $dimenScore);                                        

                // $dimenScore =  $assmntarray[$assmntkey]['dimnsn'.$assmntCatkey];  
                //array_push($assmntarray[$assmntkey],$dimenScore);                                     
               // $assmntarray[$assmntkey]['dimensionCode'] = $assmentCatry->dimension_code;
               // $assmntarray[$assmntkey]['resultLabl'] = $assmentCatry->result_label;
               // $assmntarray[$assmntkey]['resulTxt'] = $assmentCatry->result_text;
                //$assmntarray[$assmntkey]['assesmntScore'] = $assmentCatry->final_score;
               
                
                // echo "<pre>";
                // print_r ($assmentCatry);
                // echo "</pre>";
               // $assmntarray[$assmntkey]['']  

                // echo "<pre>";
                // echo $assessmentName.'-'.$assmentCatry->dimension_code.'<br>';
                // print_r ($assmentCatry->result_text);
                // echo '<br>'.'-------------------------------';
                // echo "</pre>";

            }   

         }
         // echo "<pre>";
         // print_r ($assmntarray);
         // echo "</pre>";
        
        $distinctAttempt = $attemptAssesment::where('user_code','$userEmail')
                            ->get();
        
         //PDF
        //  $view = \View::make('repo',['report'=>$assmntarray]);
        //  $html = $view->render();
        //   $pdf = new TCPDF();
        //    $pdf::SetTitle('Hello World');
        // $pdf::AddPage();
        // $pdf::writeHTML($html, true, false, true, false, '');
        // $pdf::Output('hello_world.pdf');

         //                   


         // dd($assmntarray);                  
         return view('repo',['report'=>$assmntarray]);                  
       // echo "<pre>";
       // print_r ($distinctAttempt);
       // echo "</pre>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf()
    {
        // $view = \View::make('repo');
        // $html = $view->render();

        // echo "<pre>";
        // print_r ($html);
        // echo "</pre>";
    }
}
