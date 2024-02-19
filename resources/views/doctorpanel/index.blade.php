@extends('doctorpanel.headerfooter')
@section('content')
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">         
                    <div class="row">
                      <div class="col-lg-12 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Patient Appointment Requests</h4>
                                   <p class="card-subtitle card-subtitle-dash">You have new requests</p>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        
                                        <th>Patients_Name</th>
                                        <th>Patients_Email</th>
                                        <th>Patients_Time</th>
                                        <th>Patients_Phone</th>
                                        <th>Patient_Service</th>
                                        <th>Patient_Date</th>
                                        <th>Patient_Message</th>
                                        <th>Action_Delete</th>
                                        <th>Action_Update</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($rec as $r)
                                      <tr>
                                        <td>
                                              <h6>{{$r->name}}</h6>
                                        </td>
                                        <td>
                                          <h6>{{$r->email}}</h6>
                                        </td>
                                        <td>
                                          <h6>{{$r->time}}</h6>
                                        </td>
                                        <td>
                                          <h6>{{$r->phone}}</h6>
                                        </td>
                                            <td>
                                              <h6>{{$r->service}}</h6>
                                            </td>
                                            <td>
                                              <h6>{{$r->date}}</h6>
                                            </td>
                                            {{-- <td>
                                              <h6>{{$r->time}}</h6>
                                            </td> --}}
                                            <td>
                                              <h6>{{$r->message}}</h6>
                                            </td>
                                            <td>
                                              <form action="/delpatient/{{$r->id}}" method="post">
                                                @csrf
                                                  <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                            <td>
                                              <form action="/updpatient/{{$r->id}}" method="post">
                                                @csrf
                                                  <button type="submit" class="btn btn-warning">Update</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row flex-grow">
                          <div class="col-md-6 col-lg-8 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body card-rounded">
                                <h4 class="card-title  card-title-dash">Recent Requests</h4>
                                <div class="list align-items-center border-bottom py-2">
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Other Events
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted"></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Quarterly Report
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted"></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="list align-items-center border-bottom py-2">
                                  <div class="wrapper w-100">
                                    <p class="mb-2 font-weight-medium">
                                      Change in Directors
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="d-flex align-items-center">
                                        <i class="mdi mdi-calendar text-muted me-1"></i>
                                        <p class="mb-0 text-small text-muted"></p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="list align-items-center pt-3">
                                  <div class="wrapper w-100">
                                    <p class="mb-0">
                                      <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 d-flex flex-column">
                            <div class="row flex-grow">
                              <div class="col-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                          <h4 class="card-title card-title-dash">Type By Amount</h4>
                                        </div>
                                        <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                        <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection