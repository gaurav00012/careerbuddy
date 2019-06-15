@extends('common.app')
@section('content')
<div class="breadcome-area">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="breadcome-list">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="breadcome-heading">
                           Career Assesments
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="breadcome-menu">
                           <!--  <li>Assessments
                              </li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Body -->
<main class="main">
   <div class = "container">
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sno</th>
        <th>Test Area</th>
        <th>Test Name</th>
        <th>Assessment Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
     
      
    </tbody>
  </table>
</div>
   


</main>
<script></script>
<script src="{{ asset('js/careerassessment.js')}}"></script>
 
@endsection