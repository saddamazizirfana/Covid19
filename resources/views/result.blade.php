@extends('layouts.app')

@section('content')
<div class="row" style="text-align: center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Hasil
                 </h2>
            </div>
        </div>
    </div>
   
    <div class="row" style="text-align: center;">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total Jawaban YA sebanyak :</strong>
                <label id="yes">{{ $covids->yes }}</label>
            </div>
        </div>

        @if($covids->yes>-1 & $covids->yes<8)         
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Status:</strong>
                      <label id="status">Resiko Rendah</label>
                  </div>
              </div>     
        @elseif($covids->yes>7 & $covids->yes<15)
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
@endsection