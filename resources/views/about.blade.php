@extends('layouts.homenav')
@section('containersatu')
<div class="container-fluid">
    <div class="row min-vh-100">
        <div class="col-lg-6 col-md-12 d-flex align-items-center">
            <div class="container ml-5">
                <p class="text-dark text-justify mb-4" style="font-size:25px;">
                    Website kasir ini adalah Sebuah website yang dirancang untuk membantu pengelolaan transaksi dan 
                    keuangan dalam bisnis secara efisien.
                </p>
                <p class="text-dark text-justify" style="font-size:25px;">
                    Website ini dapat digunakan pada smartphone, tablet, laptop, 
                    dan pc sehingga memungkinkan pemilik usaha untuk mengelola transaksi secara real-time, mengelola stok 
                    barang, menerima pembayaran, dan membuat laporan keuangan transaksi.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
            <img src="/assets/cash_desk_07.jpg" alt="Kasir" class="img-fluid rounded shadow" style="max-width: 80%; object-fit: cover;">
        </div>
    </div>
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s; position: fixed; bottom: 0; left: 0; width: 100%; height: auto; z-index: -1;" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(19, 62, 135, 1)" offset="0%"></stop>
                <stop stop-color="rgba(96, 139, 193, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,160L40,136.7C80,113,160,67,240,60C320,53,400,87,480,106.7C560,127,640,133,720,123.3C800,113,880,87,960,93.3C1040,100,1120,140,1200,160C1280,180,1360,180,1440,166.7C1520,153,1600,127,1680,103.3C1760,80,1840,60,1920,56.7C2000,53,2080,67,2160,60C2240,53,2320,27,2400,23.3C2480,20,2560,40,2640,70C2720,100,2800,140,2880,136.7C2960,133,3040,87,3120,73.3C3200,60,3280,80,3360,96.7C3440,113,3520,127,3600,126.7C3680,127,3760,113,3840,100C3920,87,4000,73,4080,83.3C4160,93,4240,127,4320,136.7C4400,147,4480,133,4560,106.7C4640,80,4720,40,4800,20C4880,0,4960,0,5040,23.3C5120,47,5200,93,5280,123.3C5360,153,5440,167,5520,160C5600,153,5680,127,5720,113.3L5760,100L5760,200L5720,200C5680,200,5600,200,5520,200C5440,200,5360,200,5280,200C5200,200,5120,200,5040,200C4960,200,4880,200,4800,200C4720,200,4640,200,4560,200C4480,200,4400,200,4320,200C4240,200,4160,200,4080,200C4000,200,3920,200,3840,200C3760,200,3680,200,3600,200C3520,200,3440,200,3360,200C3280,200,3200,200,3120,200C3040,200,2960,200,2880,200C2800,200,2720,200,2640,200C2560,200,2480,200,2400,200C2320,200,2240,200,2160,200C2080,200,2000,200,1920,200C1840,200,1760,200,1680,200C1600,200,1520,200,1440,200C1360,200,1280,200,1200,200C1120,200,1040,200,960,200C880,200,800,200,720,200C640,200,560,200,480,200C400,200,320,200,240,200C160,200,80,200,40,200L0,200Z"></path>
        <defs>
            <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(19, 62, 135, 1)" offset="0%"></stop>
                <stop stop-color="rgba(96, 139, 193, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,120L40,106.7C80,93,160,67,240,66.7C320,67,400,93,480,103.3C560,113,640,107,720,96.7C800,87,880,73,960,56.7C1040,40,1120,20,1200,16.7C1280,13,1360,27,1440,46.7C1520,67,1600,93,1680,110C1760,127,1840,133,1920,130C2000,127,2080,113,2160,100C2240,87,2320,73,2400,56.7C2480,40,2560,20,2640,23.3C2720,27,2800,53,2880,56.7C2960,60,3040,40,3120,56.7C3200,73,3280,127,3360,143.3C3440,160,3520,140,3600,123.3C3680,107,3760,93,3840,96.7C3920,100,4000,120,4080,106.7C4160,93,4240,47,4320,23.3C4400,0,4480,0,4560,20C4640,40,4720,80,4800,80C4880,80,4960,40,5040,46.7C5120,53,5200,107,5280,113.3C5360,120,5440,80,5520,83.3C5600,87,5680,133,5720,156.7L5760,180L5760,200L5720,200C5680,200,5600,200,5520,200C5440,200,5360,200,5280,200C5200,200,5120,200,5040,200C4960,200,4880,200,4800,200C4720,200,4640,200,4560,200C4480,200,4400,200,4320,200C4240,200,4160,200,4080,200C4000,200,3920,200,3840,200C3760,200,3680,200,3600,200C3520,200,3440,200,3360,200C3280,200,3200,200,3120,200C3040,200,2960,200,2880,200C2800,200,2720,200,2640,200C2560,200,2480,200,2400,200C2320,200,2240,200,2160,200C2080,200,2000,200,1920,200C1840,200,1760,200,1680,200C1600,200,1520,200,1440,200C1360,200,1280,200,1200,200C1120,200,1040,200,960,200C880,200,800,200,720,200C640,200,560,200,480,200C400,200,320,200,240,200C160,200,80,200,40,200L0,200Z"></path>
    </svg>
</div>
@endsection