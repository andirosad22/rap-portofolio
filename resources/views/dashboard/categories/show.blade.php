@extends('dashboard.layouts.main')

@section('container')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> <a href="/dashboard/categories"><i class="bi bi-arrow-left-short"></i></a> Show Categori</h1>
  </div>

  <div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <tbody>
        <tr>
          <th scope="col">Nama Kategori : </th>
          <td>{{ $category->name }}</td>
        <tr>
        <tr>
          <th scope="col">Slug Kategori : </th>
          <td>{{ $category->slug }}</td>
        <tr>
        </tbody>

    </table>
  </div>

@endsection
