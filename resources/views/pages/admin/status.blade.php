@extends('layout/admin/sbadmin')




@section('content')

<h3 class="m-0 mb-3 font-weight-bold text-dark" style="text-decoration: underline">STATUS</h3>
{{-- search --}}
<form
class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
<div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
    aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-success" type="button">
            <i class="fas fa-search fa-sm"></i>
        </button>
    </div>
</div>
</form>

      
<table class="table table-sm-5 mt-4">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td colspan="2">Verification </td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td colspan="2">Testing</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">On Hold</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td colspan="2">Submission</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td colspan="2">Screening</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td colspan="2">Drop</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td colspan="2">Done</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td colspan="2">Deployment</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td colspan="2">Development</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td colspan="2">Live</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>

    </tbody>
  </table>
  
  
             
@endsection
