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
                  
                                <form action="/updateddoctors" method="POST">
                                  @csrf
                                  <div class="form-outline mb-4">
                                    <input type="hidden" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->id}}" name="docid"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctorname}}" name="docname"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctoremail}}" name="docemail"/>
                                  </div>
                                  
                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctorspecialist}}" name="docspecialist"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctorcontact}}" name="doccontact"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctoraddress}}" name="docaddress"/>
                                  </div>

                                  <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$upddoctors->doctorpassword}}" name="docpassword"/>
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
   