@php
    $nama = "alpian";
    $nilai = "90";

    // logic
@if ($nilai > 60)
    
    @php 
            $ket = 'lulus';
        @endphp
@else 
    @php
            $ket = 'gagal';
        @endphp



    Siswa {{ $nama }} keterangan {{ $ket }}
    
@endphp