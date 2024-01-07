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
                <form action="{{ route('nilai_tukar.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="name">Kode</label>
                    </div>
                    <div class="col-md-4">
                      <select name="code" class="form-control" id="">
                      @foreach ($comodities as $com)
                        <option {{$item->code == $com->code ? 'selected' : ''}} value="{{$com->code}}" >{{$com->name}}</option>
                      @endforeach
                      </select>
                      @if ($errors->has('code'))
                        <span class="text-danger">{{ $errors->first('code') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="date">Tanggal</label>
                    </div>
                    <div class="col-md-4">
                      <input type="date" class="form-control" name="date" placeholder="Tanggal"
                        value="{{ $item->date }}"></input>
                      @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                      @endif
                    </div>
                  </div>
                  <div class="row form-group my-2">
                    <div class="col-md-2">
                      <label for="sellig_price">Harga Jual</label>
                    </div>
                    <div class="col-md-8">
                      <input type="number" class="form-control" name="selling_price" placeholder="Harga Jual"
                        value="{{ $item->selling_price }}"></input>
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
                        value="{{ $item->purchase_price }}"></input>
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
