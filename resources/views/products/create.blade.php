@extends('layouts.app')

@section('content')
<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ route('product.index') }}" class="text-breadcumb"><h3>Daftar Produk</h3></a>
          </li>
          <li class="breadcrumb-item text-black h3 active" aria-current="page">{{ isset($product) ? 'Edit produk' : 'Tambah Produk' }}</li>
        </ol>
      </nav>

      <form action="" method="POST" enctype="multipart/form-data"> @csrf
        <div class="row">
          <div class="col-4">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label fw-semibold">Kategori</label>
              <select class="form-select" name="category_id">
                <option value="">Pilih Kategori</option>

              </select>
              {{-- <input type="text" name="category" class="form-control" value="{{ old('category', isset($product->category->name) ? $product->category->name : '') }}" placeholder="name@example.com"> --}}
              {{-- @if ($errors->has('category_id'))
                <span class="text-danger">&diams;&ensp;{{ $errors->first('category') }}</span>
              @endif --}}
            </div>
          </div>
          <div class="col-8">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Barang</label>
              <input type="text" name="name" class="form-control">
              {{-- @if ($errors->has('name'))
                <span class="text-danger">&diams;&ensp;{{ $errors->first('name') }}</span>
              @endif --}}
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga Barang</label>
                <input type="number" name="buy_price" id="buy_price" class="form-control">
                {{-- @if ($errors->has('buy_price'))
                  <span class="text-danger">&diams;&ensp;{{ $errors->first('buy_price') }}</span>
                @endif --}}
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga Jual</label>
                <input type="number" name="sell_price" id="sell_price" class="form-control">
                {{-- @if ($errors->has('sell_price'))
                  <span class="text-danger">&diams;&ensp;{{ $errors->first('sell_price') }}</span>
                @endif --}}
              </div>
            </div>
            <div class="col-4">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok Barang</label>
                <input type="number" name="stock" id="buy_price" class="form-control">
                {{-- @if ($errors->has('stock'))
                  <span class="text-danger">&diams;&ensp;{{ $errors->first('stock') }}</span>
                @endif --}}
              </div>
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">Upload Image</label>
            <div id="container" class="form-upload-image d-flex justify-content-center flex-column rounded">
              <div class="mx-auto">
                {{-- <img src="{{ isset($product->image) ? '/assets/product/'.$product->image : '/assets/Image.png' }}" id="file-ip-1-preview" class="uploadImagePreview"> --}}
              </div>
              <label for="file-ip-1" id="labelUpload" class="mx-auto">
                <p class="fw-semibold">upload gambar disini</p>
              </label>
              <input type="file" name="image" id="file-ip-1" accept=".jpg, .jpeg, .png" onchange="showPreview(event);">
            </div>

          </div>
          <div class="d-flex justify-content-end gap-3">
            <button type="submit" class="btn btn-outline-primary px-5">Batalkan</button>
            <button class="btn btn-primary px-5">Simpan</button>
          </div>
        </form>

</div>
@endsection
