@extends('adminpanel.headerfooter')
@section('content')
                    <section class="vh-100">
                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                      <div class="container h-100">
                        @if(session()->has('success'))
                        <div class="alert alert-success container" style="color: green;font-size:1rem;text-align:center;justify-content:center">
                        <p><b>{{session()->get('success')}}</b></p>
                        </div>
                        @endif
      
                                <h2 class="text-uppercase text-center mb-5">Update Records Here</h2>
                  
                                <form action="/updrecords" method="POST">
                                  @csrf
                                  <div class="form-outline mb-4">
                                    <input type="hidden" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->id}}" name="patientid"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->name}}" name="patientname"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->email}}" name="patientemail"/>
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->time}}" name="patienttime"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->phone}}" name="patientphone"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->service}}" name="patientservice"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->specialist}}" name="patientspe"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->address}}" name="patientaddress"/>
                                  </div>
                  
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->date}}" name="patientdate"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$updrecords->message}}" name="patientmessage"/>
                                  </div>

                                  <div class="d-flex justify-content-center">
                                    <button type="submit"
                                      class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body-light">Update Form</button>
                                  </div>
                                </form>
                      </div>
                    </div>
                  </section>
   
@endsection
   