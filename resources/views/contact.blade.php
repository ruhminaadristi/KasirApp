@extends('layouts.homenav')
@section('containersatu')
<div class="container-fluid">
    <div class="row min-vh-100">
        <div class="col-lg-6 col-md-12 d-flex align-items-center">
            <div class="container" style="max-width: 400px;">
                <p class="text-dark" style="font-size:30px;">
                    Contact Us :
                </p>
                <p class="text-dark" style="font-size:20px;">
                    <i class="fab fa-instagram text-primary"></i> Instagram: 
                    <a href="https://www.instagram.com/akun_anda" class="text-primary">instagram.com/akun_anda</a>
                </p>
                <p class="text-dark" style="font-size:20px;">
                    <i class="fab fa-whatsapp text-primary"></i> WhatsApp: 
                    <a href="https://wa.me/nomor_anda" class="text-primary">+62 812-3456-7890</a>
                </p>
                <p class="text-dark" style="font-size:20px;">
                    <i class="fas fa-envelope text-primary"></i> Email: 
                    <a href="mailto:email@anda.com" class="text-primary">email@anda.com</a>
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 d-flex align-items-center justify-content-center">
            <img src="/assets/contact.jpg" alt="Contact" class="img-fluid rounded shadow" style="max-width: 80%; object-fit: cover;">
        </div>
    </div>
</div>
@endsection