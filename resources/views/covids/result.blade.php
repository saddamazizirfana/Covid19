@extends('covids.layout')

@section('content')


   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

    

    <div class="card text-center">
  <div class="card-header">
    <div class="row" style="text-align: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Hasil
                 </h2>
            </div>
        </div>
    </div>
  </div>
  <div class="card-body">
    <div class="row" style="text-align: center;">
      <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Terima kasih kepada :</strong>
                <strong id="a1">{{ $covids->nama }}</strong>
                <strong>Karna telah menyelesaikan kuis covid-19 </strong>
                <strong>Dibuat Saddam Aziz Irfana </strong>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Jawaban YA sebanyak :</strong>
                <label id="a1">{{ $covids->a1 }}</label>
            </div>
        </div>


        @if($covids->a1>-1 & $covids->a1<8)         
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Status:</strong>
                      <label id="status">Resiko Rendah</label>
                  </div>
              </div>     
        @elseif($covids->a1>7 & $covids->a1<15)
              <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Status :</strong>
                        <label id="status">Resiko Sedang</label>
                    </div>
                </div>     
        @else
            <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Status :</strong>
                      <label id="status">Resiko Tinggi</label>
                  </div>
              </div>
        @endif
    </div>
  </div>
  <div class="card-footer text-muted">
     <a class="btn btn-primary" href="{{ route('covids.index') }}"> Kembali ke awal</a>
  </div>
</div>
@endsection