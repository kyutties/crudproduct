
@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Tambah Produk</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Kode Produk">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </form>