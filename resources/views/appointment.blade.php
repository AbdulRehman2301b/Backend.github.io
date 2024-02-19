@extends('header&footer')
@if(session()->has('success'))
			<div class="alert alert-success" style="color: green;font-size:1rem;text-align:center;justify-content:center">
			<p><b>{{session()->get('success')}}</b></p>
			</div>
			@endif
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Appointment</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>	
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Consultation</span>
	            <h2 class="mb-4">Make An Appointment</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	          </div>
			  <form action="/insertappointment" class="appointment-form ftco-animate" method="post">
				@csrf
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Name" name="name" id="firstname" required>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
							<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
								<select name="time" id="timelist" class="form-control">
									<option value="" selected disabled>Select Your Time</option>
									<option value="11:00">11:00</option>
									<option value="01:00">01:00</option>
									<option value="02:00">02:00</option>
									<option value="05:00">05:00</option>
									<option value="07:00">07:00</option>
								  </select>
								</div>
		              		</div>
		    			</div>
							<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" required>
		    				</div>
	    				</div>
						<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="doctorlist" id="doctorlist" class="form-control" required>
                      	<option value="" selected disabled>Select Your Doctor</option>
						<option value="Neuro">Neuro</option>
                        <option value="Cardiology">Cardiology</option>
                        <option value="Dental">Dental</option>
                        <option value="Ophthalmology">Ophthalmology</option>
                        <option value="Other Services">Other Services</option>
                      </select>
                    </div>
		              </div>
		    				</div>
							<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Doctor Name" name="specialist" id="" required>
		    				</div>
							
	    				</div>
	    				<div class="d-md-flex">
							{{-- <div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="cities" id="cities" class="form-control">
                      	<option value="" selected disabled>Select Your Address</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                      </select>
                    </div>
		              </div>
		    				</div> --}}
							<div class="form-group ">
		    					<input type="text" class="form-control" placeholder="Address" name="address" id="" required>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
							<div class="icon"><span class="ion-md-calendar"></span></div>
							<input type="text" class="form-control appointment_date" placeholder="Date" name="date" id="date" required>
						</div>
							</div>
							<div class="form-group ml-md-4">
								<textarea id="message" cols="30" rows="2" class="form-control" placeholder="Message" name="message" required></textarea>
							</div>
	    				</div>
						<div class="form-group">
							<button type="submit" class="btn btn-warning py-3 px-3">Appointment</button>
						  </div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">About Dr.Care Facts</h3>
    				<div class="row pt-4 mt-1">
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Happy Patients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="84">0</strong>
		                <span>Number of Doctors</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Number of Staffs</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>

   @endsection