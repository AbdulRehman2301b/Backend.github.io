@extends('adminpanel.headerfooter')
@section('content')
<div class="container">
  @if(session()->has('success'))
  <div class="alert alert-success container" style="color: green;font-size:1rem;text-align:center;justify-content:center">
  <p><b>{{session()->get('success')}}</b></p>
  </div>
  @endif
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Time</th>
        <th scope="col">Phone</th>
        <th scope="col">Service</th>
        <th scope="col">Specialist</th>
        <th scope="col">Date</th>
        <th scope="col">Address</th>
        <th scope="col">Message</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
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
          <h6>{{$r->phone}}</h6>
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
              <form action="/delete/{{$r->id}}" method="post">
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td><form action="/upd/{{$r->id}}" method="post">
              @csrf
                <button type="submit" class="btn btn-success">Update</button>
              </form></td>
        </tr>
       
        @endforeach
    </tbody>
  </table>
</div>
@endsection