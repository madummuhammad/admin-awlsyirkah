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
                <form action="{{ route('nilai_tukar.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Kode</label>
                    </div>
                    <div class="col-md-4">
                      <select class="form-control" name="code">
                        @foreach ($comodities as $item)
                            <option value="{{$item->code}}">{{$item->name}}</option>
                        @endforeach
                      </select>
                      @if ($errors->has('code'))
                        <span class="text-danger">{{ $errors->first('code') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Tanggal</label>
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="date" placeholder="Tanggal"
                        value="{{ old('date') }}">{{ old('date') }}</input>
                      @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="selling_price">Harga Jual</label>
                    </div>
                    <div class="col-md-8">
                      <input type="number" class="form-control" name="selling_price" placeholder="Harga Jual"
                        value="{{ old('selling_price') }}"></input>
                      @if ($errors->has('selling_price'))
                        <span class="text-danger">{{ $errors->first('selling_price') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="purchase_price">Harga Beli</label>
                    </div>
                    <div class="col-md-8">
                      <input type="number" class="form-control" name="purchase_price" placeholder="Harga Beli"
                        value="{{ old('purchase_price') }}"></input>
                      @if ($errors->has('purchase_price'))
                        <span class="text-danger">{{ $errors->first('purchase_price') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <a class="btn btn-default mr-1" href="{{ route('nilai_tukar.index') }}">
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
