@extends('doctorpanel.headerfooter')
@section('content')
        <section class="vh-100">
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
              <div class="container h-100">
                        <h2 class="text-uppercase text-center mb-5 my-2"><b>Update Records Here</b></h2>
          
                        <form action="/updatedpatients" method="POST">
                          @csrf
                          <div class="form-outline mb-4">
                            <input type="hidden" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->id}}" name="patientid"/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->name}}" name="patientname"/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->email}}" name="patientemail"/>
                          </div>
                          
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->time}}" name="patienttime"/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->phone}}" name="patientphone"/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->service}}" name="patientservice"/>
                          </div>
          
                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->date}}" name="patientdate"/>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$fetchpatients->message}}" name="patientmessage"/>
                          </div>

                          <div class="d-flex justify-content-center">
                            <button type="submit"
                              class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body-light" style="color: aliceblue">Update Form</button>
                          </div>
                        </form>
                    </div>
                  </div>
              </section>
@endsection