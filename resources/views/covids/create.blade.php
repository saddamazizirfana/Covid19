@extends('covids.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 style="color: white">Silahkan mengerjakan </h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('covids.index') }}"> Back</a>

        </div>

    </div>

</div>

   

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

   <center>

    <form action="{{ route('covids.store') }}" method="POST">

    @csrf
    <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="center">

                <strong style="color: white">Masukan Nama :</strong>

                <input type="text" name="nama" id="nama" class="form-control" placeholder="Name" style="width: 700px" required>
                <br>
            </div>

        </div>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Ya/Tidak</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                        <td style="vertical-align:middle">1</td>
                        <td style="vertical-align:middle">Saya Pergi Keluar Rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q1" name="y1" value="1">
                         <label for="y1">Ya</label><br>
                         </div>
                        </td>
                    </tr>
            
                       <tr>
                        <td style="vertical-align:middle">2</td>
                        <td style="vertical-align:middle">Saya Menggunakan Transportasi umum</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q2" name="y2" value="1">
                         <label for="y2">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">3</td>
                        <td style="vertical-align:middle">Saya tidak memakai master pada saat berkumpul dengan orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q3" name="y3" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">4</td>
                        <td style="vertical-align:middle">Saya berjabat dengan orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q4" name="y4" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">5</td>
                        <td style="vertical-align:middle">Saya tidak membersihkan tangan dengan hand sanitizer</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q5" name="y5" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">6</td>
                        <td style="vertical-align:middle">Saya menyentuh benda/uang juga yang disentuh oleh orang lain</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q6" name="y6" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">7</td>
                        <td style="vertical-align:middle">Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q7" name="y7" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">8</td>
                        <td style="vertical-align:middle">Saya makan diluar rumah (warung/restaurant)</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q8" name="y8" value="1">
                         <label for="y8">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">9</td>
                        <td style="vertical-align:middle">Saya tidak minum & cuci tangan dengan sabun setelah tiba di tujuan</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q9" name="y9" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">10</td>
                        <td style="vertical-align:middle">Saya berada di wilayah keluharan tempat pasien tertular</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q10" name="y10" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">11</td>
                        <td style="vertical-align:middle">Saya tidak pasang hand sanitizer di depan pintuk masuk, untuk bersihkan tangan sebelum pegang gagang pintu</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q11" name="y11" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">12</td>
                        <td style="vertical-align:middle">Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q12" name="y12" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">13</td>
                        <td style="vertical-align:middle">saya tidak menyediakan : tissue basah/antiseptic, masker dan sabun antiseptic bagi keluarga dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q13" name="y13" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">14</td>
                        <td style="vertical-align:middle">Saya tidak merendam pakaian kedalam air panas/sabun setelah keluar dari rumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q14" name="y14" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">15</td>
                        <td style="vertical-align:middle">Saya tidak segera mandi keramas setelah saya tiba dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q15" name="y15" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">16</td>
                        <td style="vertical-align:middle">saya tidak mensosialisasikan check list penilaian resiko ini kepada keluarga dirumah</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q16" name="y16" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">17</td>
                        <td style="vertical-align:middle">Saya dalam sehari tidak kena cahaya matahari selama 15 menit</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q17" name="y17" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">18</td>
                        <td style="vertical-align:middle">saya tidak jalan kaki/berolahraga minimal 30 menit setiap hari</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q18" name="y18" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">19</td>
                        <td style="vertical-align:middle">saya jarang minum vitacimin C & E, dan kurang tidur</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q19" name="y19" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">20</td>
                        <td style="vertical-align:middle">usia saya di atas 60 tahun</td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q20" name="y20" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle">21</td>
                        <td style="vertical-align:middle">saya mempunyai penyakit :jantung/diabetes/gangguan pernapasan kronik </td>
                        <td>
                         <div style="display:inline-block">
                         <input type="radio" id="q21" name="y21" value="1">
                         <label for="y3">Ya</label><br>
                         </div>
                        </td>
                    </tr>
        </tbody>
    </table>

        




        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Cek Hasil</button>

        </div>

    </div>

   

</form>
 
</center>


@endsection