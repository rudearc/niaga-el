@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-6 col-lg-3">
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>150</h3>

          <p>Order Baru</p>
        </div>
        <div class="icon">
          <ion-icon size="large" name="bag"></ion-icon>
        </div>
        <a href="#" class="small-box-footer">More info <ion-icon name="arrow-forward-circle"></ion-icon></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-info">
        <div class="inner">
          <h3>150</h3>

          <p>Produk</p>
        </div>
        <div class="icon">
          <ion-icon size="large" name="pie-chart"></ion-icon>
        </div>
        <a href="#" class="small-box-footer">More info <ion-icon name="arrow-forward-circle"></ion-icon></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>150</h3>

          <p>Member</p>
        </div>
        <div class="icon">
          <ion-icon size="large" name="person-add"></ion-icon>
        </div>
        <a href="#" class="small-box-footer">More info <ion-icon name="arrow-forward-circle"></ion-icon></a>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="small-box bg-success">
        <div class="inner">
          <h3>150</h3>

          <p>Transaksi</p>
        </div>
        <div class="icon">
          <ion-icon size="large" name="stats-chart"></ion-icon>
        </div>
        <a href="#" class="small-box-footer">More info <ion-icon name="arrow-forward-circle"></ion-icon></a>
      </div>
    </div>
  </div>
  <!-- table produk baru -->
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Produk Baru</h4>
          <div class="card-tools">
            <a href="#" class="btn btn-sm btn-primary">
              More
            </a>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Qty</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>COVID-1</td>
                <td>Kaos</td>
                <td>Baju ukuran orang dewasa</td>
                <td>12 kodi</td>
                <td>50.000</td>
              </tr>
              <tr>
                <td>2</td>
                <td>COVID-2</td>
                <td>Kaos</td>
                <td>Baju ukuran orang dewasa</td>
                <td>20 kodi</td>
                <td>250.000</td>
              </tr>
              <tr>
                <td>3</td>
                <td>COVID-3</td>
                <td>Kaos</td>
                <td>Baju ukuran orang dewasa</td>
                <td>20 kodi</td>
                <td>250.000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection