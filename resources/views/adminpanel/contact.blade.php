@extends('adminpanel.headerfooter')
@section('content')
<div class="container">
  @if(session()->has('success'))
<div class="alert alert-danger container" style="color: red;font-size:1rem;text-align:center;justify-content:center">
<p><b>{{session()->get('success')}}</b></p>
</div>
@endif  
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      @foreach($records as $r)
      <tr>
        <td>
              <h6>{{$r->patient_name}}</h6>
        </td>
        <td>
          <h6>{{$r->patient_email}}</h6>
        </td>
        <td>
          <h6>{{$r->patient_subject}}</h6>
        </td>
            <td>
              <h6>{{$r->patient_message}}</h6>
            </td>
            <td>
              <form action="/del/{{$r->id}}" method="post">
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td><form action="/updatecon/{{$r->id}}" method="post">
                @csrf
                  <button type="submit" class="btn btn-success">Update</button>
                </form></td>
        </tr>
       
        @endforeach
    </tbody>
  </table>
</div>
@endsection