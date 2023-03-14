@extends('layouts-adminPage.master')
@section('content')
<div class="white_card card_height_100 mb_30">
    <div class="white_card_header">
        <div class="box_header m-0">
            <div class="main-title">
                <h3 class="m-0">Detail Siswa</h3>
            </div>
        </div>
    </div>
    <div class="white_card_body">
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">NIS</label>
                :
                <label for="">{{$siswa->nis}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Nama Siswa</label>
                :
                <label for="">{{$siswa->nama_siswa}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Jenis Kelamin</label>
                :
                <label for="">{{$siswa->jenkel}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tempat Lahir</label>
                :
                <label for="">{{$siswa->tempat_lahir}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tanggal Lahir</label>
                :
                <label for="">{{$siswa->tanggal_lahir}}</label>
            </div> 
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                :
                <label for="">{{$siswa->agama}}</label>               
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Alamat</label>
                :
                <label for="">{{$siswa->alamat}}</label>
            </div>
    </div>
</div>
@endsection
