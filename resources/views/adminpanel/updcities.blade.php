@extends('adminpanel.headerfooter')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-900">Admin-Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div

                    <section class="vh-100">
                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                      <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;border-color: rgb(255, 210, 11);">
                              <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">UPDATE CITIES</h2>
                  
                                <form action="/updcities" method="POST">
                                  @csrf

                                  <div class="form-outline mb-4">
                                    <input type="hidden" id="form3Example1cg" class="form-control form-control-lg" value="{{$ucity->id}}" name="updid"/>
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" value="{{$ucity->cities}}" name="updcity"/>
                                    <label class="form-label" for="form3Example1cg">UPDATE CITIES HERE</label>
                                  </div>
                  
                                  <div class="d-flex justify-content-center">
                                    <button type="submit"
                                      class="btn btn-warning btn-block btn-lg gradient-custom-4 text-body-light">Update Record</button>
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