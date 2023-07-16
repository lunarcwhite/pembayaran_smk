<!DOCTYPE html>
<html>
<head>
    <title>Cetak Kwitansi</title>
    <style>
        body {
            font-family: monospace;
            font-size: 12px;
            line-height: 1.4;
            color: #000;
            margin: 0;
            padding: 5px;
        }
        @media print {

            .invoice-container {
                margin: 0 auto;
                box-shadow: none;
                background-color: #fff;
                padding: 5px;
                border: none;
                max-width: 58mm;
            }

            h1 {
                text-align: center;
                font-size: 16px;
                margin-bottom: 10px;
            }

            .invoice-details {
                font-size: 14px;
            }

            .invoice-items {
                margin-bottom: 10px;
            }

              .invoice-item {
                display: flex;
                justify-content: space-between;
            }

            .item-description, .item-data {
                width: 25%;
            }

            .item-data{
                width: 60%;
            }

            .invoice-total {
                text-align: left;
                font-size: 10px;
                margin-top: 5px;
            }

            .invoice-total p {
                font-size: 12px; 
                margin: 0;
            }

            .print-button {
                display: none;
            }
        }

        /* Gaya tambahan */
        body {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>Kwitansi Pembayaran</h1>
        
        <div class="invoice-details">
            <table>
                <tr>
                    <td rowspan="2">No Kwitansi</td>
                    <td>:</td>
                    <td rowspan="2">{{$pembayaran->no_kwitansi}}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>{{$pembayaran->created_at->format('d-m-Y')}}</td>
                </tr>
            </table>
        </div>
        <br/>

        <div class="invoice-items">
            <div class="invoice-item">
                <div class="item-description">Lembar</div>
                <div class="item-data">Siswa</div>
            </div>
            <hr/>
            <div class="invoice-item">
                <div class="item-description">Nama Siswa</div>
                <div class="item-data">{{$pembayaran->siswa->nama_siswa}}</div>
            </div>
            <hr/>
            <div class="invoice-item">
                <div class="item-description">NISN</div>
                <div class="item-data">{{$pembayaran->siswa->nisn}}</div>
            </div>
            <hr/>
            <div class="invoice-item">
                <div class="item-description">Pembayaran</div>
                <div class="item-data">{{$pembayaran->biaya->nama_biaya}}</div>
            </div>
            <hr/>
            <div class="invoice-item">
                <div class="item-description">Keterangan</div>
                <div class="item-data">{{$pembayaran->keterangan}}</div>
            </div>
            <hr/>
        </div>

        <div class="invoice-total">
            <p>Jumlah Pembayaran: <br/> Rp. {{$pembayaran->jumlah_bayar}}</p>
        </div> 
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
