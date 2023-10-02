@extends('layouts.app')

@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('product.index') }}" class="text-black text-decoration-none"><h3>Daftar Produk</h3></a>
          </li>

        </ol>
      </nav>
    <div class="d-flex justify-content-between mb-4">
        <div class="d-flex gap-3">
          <form action="{{ route('product.index') }}" method="GET">
            <div class="wrapper">
              <input type="text" name="search" class="form-control input" placeholder="Cari Barang" value="{{ request('search') }}" style="width: 350px">
              <img src="{{ asset('') }}assets/img/magnifier.png" alt="icon" class="icon-lock" width="20">
            </div>
            <div class="wrapper">
                <select class="form-select input" name="category_id">
                    <option value="">Semua</option>
                      <option></option>
                  </select>
              <img src="{{ asset('') }}assets/img/Package.png" alt="icon" class="icon-lock icon-black">
            </div>
            <button type="submit" class="btn btn-sm btn-outline-dark">Cari</button>
          </form>
        </div>
        <div>
          <div class="d-flex gap-3">
            <a href="">
              <button type="button" class="btn btn-sm btn-success">
                <img src="{{ asset('') }}assets/img/MicrosoftExcelLogo.png" alt="ExportLogo" width="20px" height="20px">
                Export Excel
              </button>
            </a>
            <a href="{{ route('product.create') }}" class="text-decoration-none">
              <button type="button" class="btn btn-sm btn-danger d-inline">
                <img src="{{ asset('') }}assets/img/PlusCircle.png" alt="TambahLogo" width="20px" height="20px">
                Tambah Produk
              </button>
            </a>
          </div>
        </div>
      </div>

    <div class="rounded border py-2 px-3 mb-3">

            <table class="table table-borderless">
                <thead class="table-light" >
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col" class="text-center">Image</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Kategori Produk</th>
                      <th scope="col">Harga Barang (RP)</th>
                      <th scope="col">Harga Jual (RP)</th>
                      <th scope="col">Stok Produk</th>
                      <th scope="col" class="text-center">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
            </table>

    </div>
</div>
@endsection
