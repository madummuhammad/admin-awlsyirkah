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
                <form action="{{ route('unit-uji.update', $unit->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="image">Gambar</label>
                    </div>
                    <div class="col-md-10">
                        @if ($unit->image)
                        <img src="{{ asset($unit->image) }}" style="width: 200px;" class="mb-3">
                      @endif
                      <input type="file" accept="image/*" class="form-control p-1" name="image">
                      <input type="hidden" name="old_image" value="{{ $unit->image }}">
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
                        value="{{ $unit->title }}">{{$unit->title}}</textarea>
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
                      <textarea type="text" class="form-control" name="kode" placeholder="Kode"
                        value="{{ $unit->kode }}">{{$unit->kode}}</textarea>
                      @if ($errors->has('kode'))
                        <span class="text-danger">{{ $errors->first('kode') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="description">Deskripsi/Konten</label>
                    </div>
                    <div class="col-md-10">
                      <textarea type="text" class="summernote" id="summernote" name="description" placeholder="Deskripsi">{{ $unit->description }}</textarea>
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
