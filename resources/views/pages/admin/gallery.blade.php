@extends('layout/admin/sbadmin')




@section('content')

<h3 class="m-0 mb-3 font-weight-bold text-dark" style="text-decoration: underline">SQUAD</h3>

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
        <th scope="col">SQUAD</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td colspan="2">Squad Big Data & Analytics</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td colspan="2">Squad Business Intilligence</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Squad Channeling Business Partneship</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td colspan="2">Squad Emas</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td colspan="2">Squad Mikro</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">6</th>
        <td colspan="2">Squad IMO</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">7</th>
        <td colspan="2">Squad Logistik & Support</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">8</th>
        <td colspan="2">Squad LOS</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">9</th>
        <td colspan="2">Squad Risk</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">10</th>
        <td colspan="2">Squad RKA</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">11</th>
        <td colspan="2">Squad Sales</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">12</th>
        <td colspan="2">Squad SPI</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">13</th>
        <td colspan="2">Squad Syariah (Rahn)</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">14</th>
        <td colspan="2">Squad Bullion Bank</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">15</th>
        <td colspan="2">Squad Digital Lending</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">16</th>
        <td colspan="2">Squad ERP</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">17</th>
        <td colspan="2">Squad Gadai</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">18</th>
        <td colspan="2">Squad Digital Konven</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">19</th>
        <td colspan="2">Squad Feedbased</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">20</th>
        <td colspan="2">Squad Digital Syariah</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">21</th>
        <td colspan="2">Squad HC</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">22</th>
        <td colspan="2">Squad Kelembagaan</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">23</th>
        <td colspan="2">Squad Keuangan</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">24</th>
        <td colspan="2">Squad Layanan</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">25</th>
        <td colspan="2">Squad Modernisasi TI</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">26</th>
        <td colspan="2">Squad Omni Channel</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
      <tr>
        <th scope="row">27</th>
        <td colspan="2">Squad Syariah (Non Rahn)</td>
        <td><button class="btn btn-primary" type="submit">Detail</button></td>
      </tr>
    </tbody>
  </table>
  
  
             
@endsection
