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
        <th scope="col">Doctor_Names</th>
        <th scope="col">Doctor_email</th>
        <th scope="col">Doctor_contact</th>
        <th scope="col">Doctor_Specialist</th>
        <th scope="col">Doctor_Address</th>
        <th scope="col">Doctor_Password</th>
        <th scope="col">Doctor_Delete</th>
        <th scope="col">Doctor_Update</th>
      </tr>
    </thead>
    <tbody>
      @foreach($fetchdoctor as $fd)
      <tr>
            <td scope="col">
              <h6>{{$fd->doctorname}}</h6>
            </td>
            <td scope="col">
                <h6>{{$fd->doctoremail}}</h6>
              </td>
              <td scope="col">
                <h6>{{$fd->doctorcontact}}</h6>
              </td>
              <td scope="col">
                <h6>{{$fd->doctorspecialist}}</h6>
              </td>
              <td scope="col">
                <h6>{{$fd->doctoraddress}}</h6>
              </td>
              <td scope="col">
                <h6>{{$fd->doctorpassword}}</h6>
              </td>
            <td>
              <form action="/deldoc/{{$fd->id}}" method="post">
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
            <td><form action="/updatedoc/{{$fd->id}}" method="post">
                @csrf
                  <button type="submit" class="btn btn-success">Update</button>
                </form></td>
        </tr>
       
        @endforeach
    </tbody>
  </table>
</div>
@endsection