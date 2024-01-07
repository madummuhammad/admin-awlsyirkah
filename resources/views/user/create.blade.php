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
                Add {{$title}}
              </div>
              <div class="card-body">
                <form action="{{ route('unit-uji.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="image">Gambar</label>
                    </div>
                    <div class="col-md-10">
                      <input type="file" accept="image/*" class="form-control p-1" name="image">
                      @if ($errors->has('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Judul</label>
                    </div>
                    <div class="col-md-10">
                      <textarea type="text" class="form-control" name="title" placeholder="Judul"
                        value="{{ old('title') }}">{{ old('title') }}</textarea>
                      @if ($errors->has('title'))
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Kode</label>
                    </div>
                    <div class="col-md-10">
                      <input type="text" class="form-control" name="code" placeholder="Kode"
                        value="{{ old('code') }}"></input>
                      @if ($errors->has('code'))
                        <span class="text-danger">{{ $errors->first('code') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="description">Deskripsi/Konten</label>
                    </div>
                    <div class="col-md-10">
                      <textarea type="text" class="summernote" id="summernote" name="description" placeholder="Deskripsi">{{ old('description') }}</textarea>
                      @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <a class="btn btn-default mr-1" href="{{ route('unit-uji.index') }}">
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
