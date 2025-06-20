@extends('layouts.app')

@section('tittle', 'Laporan Pesanan')

@section('content')

    <div class="card shadow">
        <div class="card-header">
            <h4 class="card-title">
                Laporan Pesanan
            </h4>

        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="">Dari</label>
                            <input type="date" name="dari" id="dari" class="form-control" 
                            value="{{ request()->input('dari') }}">
                        </div>

                        <div class="form-group">
                            <label for="">Sampai</label>
                            <input type="date" name="sampai" id="sampai" class="form-control"
                            value="{{ request()->input('sampai') }}">

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            @if (request()->input('dari'))
                
            <div class="table-responsive">
                <table class="table table-bordered table-hover tabel-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Pendapatan</th>
                            <th>Total QTY</th>
                            
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

            </div>
            @endif
        </div>

    </div>


@endsection

@push('js')
    <script>
        $(function() {

            const dari = '{{ request()->input('dari') }}'
            const sampai = '{{ request()->input('sampai') }}'

            function rupiah(angka) {

                const format = angka.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                return 'Rp ' + convert.join('.').split('').reverse().join('');
            }

            function date(date) {
                var date = new Date(date);
                var day = date.getDate();
                var month = date.getMonth();
                var year = date.getFullYear()

                return `${day}-${month}-${year}`;

            }
            const token = localStorage.getItem('token');

            $.ajax({
                url: `/api/report?dari=${dari}&sampai=${sampai}`,
                headers: {
                    "Authorization": 'Bearer ' + token,
                },
                success: function({
                    data
                }) {
                    let row = '';
                    data.map(function(val, index) {
                        row += `
                           <tr>
                                <td>${index+1}</td>
                                <td>${val.nama_barang}</td>
                                <td>${val.jumlah_dibeli}</td>
                                <td>${rupiah(val.harga)}</td>
                                <td>${rupiah(val.pendapatan)}</td>
                                <td>${val.total_qty}</td>
                            </tr>
                           
                           `;
                    });
                    $('tbody').append(row)
                }
            })

        

        });
    </script>
@endpush
