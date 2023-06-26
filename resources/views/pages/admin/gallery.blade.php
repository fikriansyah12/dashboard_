@extends('layout/admin/sbadmin')




@section('content')
      
<table class="table table-sm">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">SQUAD</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td><button class="btn btn-primary" type="submit">Button</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td><button class="btn btn-primary" type="submit">Button</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td><button class="btn btn-primary" type="submit">Button</button></td>
      </tr>
    </tbody>
  </table>
  
  
             
@endsection
