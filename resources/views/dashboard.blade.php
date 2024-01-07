@extends('adminlayout.index')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">

            <div class="small-box bg-success">
            <div class="inner">
            <h4>{{$totalUser}}</h4>
            <p>User</p>
            </div>
            <div class="icon">
            <i class="fas fa-user"></i>
            </div>
            <a href="/user" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <badge class="p-2 rounded" style="background: gold;"> Nilai Tukar Emas</badge>
              </div>
              <div class="card-body p-2">
                <canvas id="goldChart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <badge class="p-2 rounded" style="background: silver;"> Nilai Tukar Perak</badge>
              </div>
              <div class="card-body p-2">
                <canvas id="silverChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <!-- /.container-fluid -->
     
    </section>
    <!-- /.content -->
  </div>
@endsection

@push('custom-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const goldChart = document.getElementById('goldChart');
  const silverChart = document.getElementById('silverChart');
  var golds =  {{ Js::from($goldExchange) }};
  var silvers =  {{ Js::from($silverExchange) }};
  

  new Chart(goldChart, {
    type: 'line',
  data: {
    datasets: [
    {
      label: 'Harga Jual',
      data: golds.length > 1 ? golds.reverse().map(a => { return { x: a['date'], y: a['purchase_price']  } } ) : '',
    },
    {
      label: 'Harga Beli',
      data: golds.length > 1 ? golds.reverse().map(a => { return { x: a['date'], y: a['selling_price']  } }) : '',
    },
    ]
  },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  new Chart(silverChart, {
    type: 'line',
  data: {
    datasets: [
    {
      label: 'Harga Jual',
      data: silvers.length > 1 ? silvers.map(a => { return { x: a['date'], y: a['purchase_price']  } }) : '',
    },
    {
      label: 'Harga Beli',
      data: silvers.length > 1 ? silvers.map(a => { return { x: a['date'], y: a['selling_price']  } }) : '',
    },
    ]
  },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endpush
