@extends('adminlayout.index')
@section('content')
  <div class="content-wrapper p-2">
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
                <h3 class="card-title">Data {{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row justify-content-end">
                  {{-- <a class="btn btn-primary mr-2 mb-3" href="{{ url('user/create') }}">
                    <i class="fas fa-plus mr-2"></i> Add {{$title}}
                  </a> --}}
                </div>
                <table class="my-datatable table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Pekerjaan</th>
                      <th width="10%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($collection as $item)
                      <tr>
                        <td>
                          {{ $loop->iteration }}
                        </td>
                        <td>
                          {{ $item->nama_ktp }}
                        </td>
                        <td>
                          {{ $item->email }}
                        </td>
                        <td>
                          {{ $item->pekerjaan }}
                        </td>
                        <td>
                          <button class="btn btn-sm btn-success mr-1">
                            <a class="text-white" href="{{ route('user.show', $item->id) }}">
                              <i class="fas fa-clipboard-list"></i>
                            </a>
                          </button>
                          {{-- <button class="btn btn-sm btn-primary mr-1">
                            <a class="text-white" href="{{ route('user.edit', $item->id) }}">
                              <i class="fas fa-pen"></i>
                            </a>
                          </button> --}}
                          <form action="{{ route('user.destroy', $item->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-sm btn-danger" style="cursor: pointer;"
                              onclick="return confirm('Anda yakin?')">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                    @empty
                      <tr>
                        <td colspan="5">
                          Data tidak ditemukan
                        </td>
                      </tr>
                    @endforelse

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
