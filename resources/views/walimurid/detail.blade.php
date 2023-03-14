@extends('layouts-adminPage.master')
@section('content')
<div class="white_card card_height_100 mb_30">
    <div class="white_card_header">
        <div class="box_header m-0">
            <div class="main-title">
                <h3 class="m-0">Detail Walimurid</h3>
            </div>
        </div>
    </div>
    <div class="white_card_body">
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nama Wali</label>
               :
               <label for="">{{$walimurid->nama_wali}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tempat Lahir</label>
                :
                <label for="">{{$walimurid->tempat_lahir}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tanggal Lahir</label>
                :
                <label for="\">{{$walimurid->tanggal_lahir}}</label>
            </div> 
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                :
                <label for="">{{$walimurid->agama}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">No Handphone</label>
               :
               <label for="">{{$walimurid->no_hp}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Email</label>
                :
                <label for="">{{$walimurid->email}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Pekerjaaan</label>
                :
                <label for="">{{$walimurid->pekerjaan}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Kewarganegaraan</label>
                :
                <label for="">{{$walimurid->kewarganegaraan}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Alamat</label>
                :
                <label for="">{{$walimurid->alamat}}</label>
            </div>
    </div>
</div>
@endsection
