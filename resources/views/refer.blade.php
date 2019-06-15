@extends('common.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/career/dashboard.css') }}" />
<div class="container-fluid">
	<div class="top_refer">
		<div class="row">
			<div class="col-md-8">
				<div class="refer_left">
				<h3 class="text-center">BE GOOD TO SOMEONE. GET REWARDED</h3>
				<h4 class="text-center">Refer your friends and earn unlimited Amazon gift vouchers.</h4>
				<!-- <button type="button" class="btn btn-warning">Warning</button> -->
				<p><button type="button">Refer Now</button></p>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="refer_right">
					<img src="img/refer.png">
				</div>
				
			</div>
		</div>
		</div>
		<div class="row">
			<div class="top_refer2">
			<div class="col-md-4">
				<div class="Rbox1">
				<a href="#" id="modal-refer-invited" onclick="ga('send', 'event', 'Refer Friends', 'Invited', '');" class="view-btn"></a>	
				<p class="text-center"><img src="img/refer2.png">
				&nbsp;&nbsp;<strong>0&nbsp;&nbsp; </strong>INVITED
				</p>

				</div>
			</div>
			<div class="col-md-4">
				<div class="Rbox2">
			    <a href="#" id="modal-refer-invited" onclick="ga('send', 'event', 'Refer Friends', 'Invited', '');" class="view-btn"></a>
			    <p class="text-center"><img src="img/refer3.png">
			    &nbsp;&nbsp;<strong>0&nbsp;&nbsp; </strong>REGISTERED
			    </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="Rbox3">
				<a href="#" id="modal-refer-invited" onclick="ga('send', 'event', 'Refer Friends', 'Invited', '');" class="view-btn"></a>
				<p class="text-center"><img src="img/refer4.png">
					&nbsp;&nbsp;<strong>0&nbsp;&nbsp; </strong>ENROLLED
				</p>	
				</div>
			</div>	
			</div>
			
		</div>
		<div class="row" id="referal">
			<div class="have_a_refralcode">
				<h3 style="text-align:center">Help Your Friends Feel Happier too</h3>
			</div>
		</div>
		<div class="row">
			<h2 class="text-center" id="refer3">How it works</h2>
				<p class="text-center">Refer a friend and you both get INR 500</p>
			<div class="refer3">
				
				<div class="col-md-4">
					<p class="text-center"><img src="img/refer5.png"></p>
					<h5 class="text-center">Refer a Friend</h5>
					<p class="text-center">share your referral code </p>
				</div>
				<div class="col-md-4">
					<p class="text-center"><img src="img/refer6.png"></p>
					<h5 class="text-center">Your Friend Enrols</h5>
					<p class="text-center">Your friend enrols in any Carrer Buddy  guidance program using your referral code</p>
				</div>
				<div class="col-md-4">
					<p class="text-center"><img src="img/refer7.png"></p>
					<h5 class="text-center">You Both Earn Rewards</h5>
					<p class="text-center">Your friend gets INR 500 off on their fee, and you get an INR 500 Amazon voucher </p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="refer4">
				<h4 class="text-center">Refer your friends to use the TalktoAngel platform and get INR 200 wallet credit</h4>
               <h4>How it works?</h4>
               <p>1. Invite a friend to sign up on TTA.</p>
               <p>2. Friend signs up and completes a session with us; you earn INR 200 in your TTA e-wallet.</p>
               <p>3. You can use your TTA e-wallet credit for any of our services.</p>
               <p>4. You can refer your friends through your customized referral code. Please note that your friend must sign up using your referral code. Your TTA e-wallet credit will be valid for 15 months.</p>
               
            </div>
		</div>
		<div class="row" id="referal">
			<div class="have_a_refralcode">
				<h3 style="text-align:center">Your referral code is KGC32TMBFW</h3>
			</div>
		</div>

	
</div>
@endsection