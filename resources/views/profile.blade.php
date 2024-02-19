@extends('header&footer')
@section('content')
<div class="container my-5 mx-5">
    <center>
        <h1 class="my-3 mx-4">Your Appointment Request</h1>
        <hr>
    </center>
    <table class="table table-hover-responsive">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Time</th>
            <th scope="col">Doctor</th>
            <th scope="col">Specialist</th>
            <th scope="col">Date</th>
            <th scope="col">Address</th>
            <th scope="col">Message</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($records as $r)
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
                  <h6>{{$r->service}}</h6>
                </td>
                <td>
                  <h6>{{$r->specialist}}</h6>
                </td>
                <td>
                  <h6>{{$r->date}}</h6>
                </td>
                <td>
                  <h6>{{$r->address}}</h6>
                </td>
                <td>
                  <h6>{{$r->message}}</h6>
                </td>
                <td>
                  <h6>{{$r->status}}</h6>
                  </td>
                <td>
                  <form action="/delete/{{$r->id}}" method="post">
                  @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
            </tr>
           
            @endforeach
        </tbody>
      </table>
    </div>
@endsection