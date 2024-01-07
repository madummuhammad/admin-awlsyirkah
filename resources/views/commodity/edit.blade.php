@extends('adminlayout.index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{$title}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">{{$title}}</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <li class="fas fa-plus me-1"></li>
                Edit {{$title}}
              </div>
              <div class="card-body">
                <form action="{{ route('komoditas.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Kode</label>
                    </div>
                    <div class="col-md-4">
                      <input type="text" class="form-control" name="code" placeholder="Kode"
                        value="{{ $item->code }}"></input>
                      @if ($errors->has('code'))
                        <span class="text-danger">{{ $errors->first('code') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Nama Komoditas</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" class="form-control" name="name" placeholder="Judul"
                        value="{{ $item->name }}"></input>
                      @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <a class="btn btn-default mr-1" href="{{ route('komoditas.index') }}">
                      <i class="fa fa-arrow-left"></i>
                      Back
                    </a>
                    &nbsp;
                    <button type="submit" class="btn btn-success">
                      <i class="fa fa-save"></i>
                      Save
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
