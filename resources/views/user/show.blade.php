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
        <div class="col-md-3">

          <div class="card card-success card-success">
            <div class="card-header">
              <h3 class="card-title">Sekilas Tentang User</h3>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="/img/img-user.jpg" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">{{$item->nama_ktp}}</h3>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right">{{$item->email}}</a>
                </li>
                <li class="list-group-item">
                  <b>Pekerjaan</b> <span class="float-right">{{$item->pekerjaan}}</span>
                </li>
                <li class="list-group-item">
                  <b>Domisili</b> <span class="float-right">{{$item->provinsi}}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata Diri</a></li>
                <li class="nav-item"><a class="nav-link" href="#alamat" data-toggle="tab">Alamat</a></li>
                <li class="nav-item"><a class="nav-link" href="#keluarga" data-toggle="tab">Keluarga</a></li>
                <li class="nav-item"><a class="nav-link" href="#pekerjaan" data-toggle="tab">Pekerjaan</a></li>
                <li class="nav-item"><a class="nav-link" href="#informasipajak" data-toggle="tab">Informasi Pajak</a></li>
                <li class="nav-item"><a class="nav-link" href="#bank" data-toggle="tab">Akun Bank</a></li>
                <li class="nav-item"><a class="nav-link" href="#dokumenpendukung" data-toggle="tab">Dokumen Pendukung</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> --}}
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="biodata">
                  <div class="row">
                    <div class="col-md-12">
                      <strong>Foto KTP</strong>
                      <div>
                        @if ($item->foto_ktp)
                        <img src=" {{$storage.'/'.$item->foto_ktp}}" alt="" height="150px" width="auto">
                        @endif
                      </div>
                      
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>NIK</strong>
                      <p class="text-muted">
                        {{$item->no_ktp}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Nama Lengkap</strong>
                      <p class="text-muted">
                        {{$item->nama_ktp}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Tempat Lahir</strong>
                      <p class="text-muted">
                        {{$item->t_lahir}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Tanggal Lahir</strong>
                      <p class="text-muted">
                        {{$item->t_tempat}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Jenis Kelamin</strong>
                      <p class="text-muted">
                        {{$item->jk}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Tanggal Lahir</strong>
                      <p class="text-muted">
                        {{$item->agama}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No HP</strong>
                      <p class="text-muted">
                        {{$item->no_hp}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="alamat">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Provinsi</strong>
                      <p class="text-muted">
                        {{$item->provinsi}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Alamat</strong>
                      <p class="text-muted">
                        {{$item->alamat_ktp}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="keluarga">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Status Pernikahan</strong>
                      <p class="text-muted">
                        {{$item->status_pernikahan}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Nama Ibu Kandung</strong>
                      <p class="text-muted">
                        {{$item->ibu_kandung}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Nama Ahli Waris</strong>
                      <p class="text-muted">
                        {{$item->nama_ahli_waris}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>NIK Ahli Waris</strong>
                      <p class="text-muted">
                        {{$item->nik_ahli_waris}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No HP Ahli Waris</strong>
                      <p class="text-muted">
                        {{$item->no_ahli_waris}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Hubungan Ahli Waris</strong>
                      <p class="text-muted">
                        {{$item->hubungan_ahli_waris}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Alamat Ahli Waris</strong>
                      <p class="text-muted">
                        {{$item->alamat_ahli_waris}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="pekerjaan">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Pendidikan Terakhir</strong>
                      <p class="text-muted">
                        {{$item->pendidikan_terakhir}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Pekerjaan</strong>
                      <p class="text-muted">
                        {{$item->pekerjaan}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Bidang Pekerjaan</strong>
                      <p class="text-muted">
                        {{$item->bidang_pekerjaan}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Pendapatan Per Bulan</strong>
                      <p class="text-muted">
                        {{$item->pendapatan_per_bulan}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Alamat Pekerjaan</strong>
                      <p class="text-muted">
                        {{$item->alamat_pekerjaan}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Sumber Dana</strong>
                      <p class="text-muted">
                        {{$item->sumber_dana}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Pengalaman Kerja</strong>
                      <p class="text-muted">
                        {{$item->pengalaman_kerja}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="informasipajak">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Foto NPWP</strong>
                      <div>
                        @if ($item->foto_npwp)
                        <img src=" {{$storage.'/'.$item->foto_npwp}}" alt="" height="150px" width="auto">
                        @endif
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No NPWP</strong>
                      <p class="text-muted">
                        {{$item->no_npwp}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="bank">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>Nama Bank</strong>
                      <p class="text-muted">
                        {{$item->nama_bank}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No Rekening</strong>
                      <p class="text-muted">
                        {{$item->no_rek}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Nama Pemilik Rekening</strong>
                      <p class="text-muted">
                        {{$item->nama_pemilik}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>Foto Rekening Koran 3 Bulan Terakhir</strong>
                      <div>
                        @if ($item->rekening_koran)
                        <img src=" {{$storage.'/'.$item->rekening_koran}}" alt="" height="150px" width="auto">
                        @endif
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No Gopay</strong>
                      <p class="text-muted">
                        {{$item->no_gopay ? $item->no_gopay : '-'}}
                      </p>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>No Dana</strong>
                      <p class="text-muted">
                        {{$item->no_dana ? $item->no_dana : '-'}}
                      </p>
                      <hr>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="dokumenpendukung">
                  <div class="row">
                    <div class="col-md-6">
                      <strong>SKCK</strong>
                      <div>
                        @if ($item->skck)
                        <img src=" {{$storage.'/'.$item->skck}}" alt="" height="150px" width="auto">
                        @endif
                      </div>
                      <hr>
                    </div>
                    <div class="col-md-6">
                      <strong>SLIK OJK</strong>
                      <div>
                        @if ($item->slik_ojk)
                        <img src=" {{$storage.'/'.$item->slik_ojk}}" alt="" height="150px" width="auto">
                        @endif
                      </div>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

      </div>

    </div>
  </section>
  <!-- /.content -->
</div>
@endsection