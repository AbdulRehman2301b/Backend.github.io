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
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;border-color: rgb(97, 97, 255);">
                              <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Update Records Here</h2>
                  
                                <form action="/updatecontact" method="POST">
                                  @csrf
                                  <div class="form-outline mb-4">
                                    <input type="hidden" value="{{$record->id}}" class="form-control" name="id">
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" value="{{$record->patient_name}}" class="form-control" name="patientname">
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" value="{{$record->patient_email}}" class="form-control" name="patientemail">
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <input type="text" value="{{$record->patient_subject}}" class="form-control" name="patientsubject">
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" value="{{$record->patient_message}}" class="form-control" name="patientmessage">
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <button type="submit" class="btn btn-warning">Update Record</button>
                                  </div>
                                </form>
                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
   
@endsection