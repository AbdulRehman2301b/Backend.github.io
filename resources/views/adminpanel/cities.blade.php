@extends('adminpanel.headerfooter')
@section('content')
<div class="container">
  @if(session()->has('success'))
  <div class="alert alert-success container" style="color: green;font-size:1rem;text-align:center;justify-content:center">
  <p><b>{{session()->get('success')}}</b></p>
  </div>
  @endif
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">City_Names</th>
        <th scope="col">Delete_City</th>
        <th scope="col">Update_City</th>
      </tr>
    </thead>
    <tbody>
      @foreach($getcity as $c)
      <tr>
            <td scope="col">
              <h6>{{$c->cities}}</h6>
            </td>
            <td>
              <form action="/delcity/{{$c->id}}" method="post">
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td><form action="/updatecity/{{$c->id}}" method="post">
                @csrf
                  <button type="submit" class="btn btn-success">Update</button>
                </form></td>
        </tr>
       
        @endforeach
    </tbody>
  </table>
</div>
@endsection