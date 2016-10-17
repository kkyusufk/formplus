@extends('layout')

@section('content')
@extends('partials.header')
<div class="col-md-8 col-md-offset-2 dash">

<table class="table table-striped" style="margin-top: 3%">
  <thead>
    <tr>
      <th>Sr no</th>
      <th>Forms</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aadhar Card</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span><a href="#">View  </a> <span class="glyphicon glyphicon-arrow-right
"></span><a href="#">Fill form </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Driving License</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span><a href="#">View  </a> <span class="glyphicon glyphicon-arrow-right
"></span><a href="#">Fill form </a></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Marriage Certificate</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span><a href="#">View  </a> <span class="glyphicon glyphicon-arrow-right
"></span><a href="#">Fill form </a></td>
      
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>Telephone connection</td>
      <td><span class="glyphicon glyphicon-eye-open
"> </span><a href="#">View  </a> <span class="glyphicon glyphicon-arrow-right
"></span><a href="#">Fill form </a></td>
      
    </tr>
  </tbody>
</table>


</div>




@endsection