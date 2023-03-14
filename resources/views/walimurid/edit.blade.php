@extends('layouts-adminPage.master')
@section('content')
<div class="white_card card_height_100 mb_30">
    <div class="white_card_header">
        <div class="box_header m-0">
            <div class="main-title">
                <h3 class="m-0">Basic Form</h3>
            </div>
        </div>
    </div>
    <div class="white_card_body">
        <form method="post" action="/walimurid/update" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nama Wali</label>
                <input type="text" value="{{$wali_murid->nama_wali}}"name="nama_wali" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tempat Lahir</label>
                <input type="text" value="{{$wali_murid->tempat_lahir}}"name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tanggal Lahir</label>
                <input type="date" value="{{$wali_murid->tanggal_lahir}}"name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal Lahir">
            </div> 
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                <input type="text" value="{{$wali_murid->agama}}"name="agama" class="form-control" id="exampleInputPassword1" placeholder="Masukan Agama">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">No Handphone</label>
                <input type="text" value="{{$wali_murid->no_hp}}"name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukan No Handphone">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Email</label>
                <input type="text" value="{{$wali_murid->email}}"name="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Pekerjaaan</label>
                <input type="text"  value="{{$wali_murid->pekerjaan}}"name="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Pekerjaan">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Kewarganegaraan</label>
                <input type="text" value="{{$wali_murid->kewarganegaraan}}" name="kewarganegaraan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Kewarganegaraan">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Alamat</label>
                <textarea name="alamat" id="" class="form-control" cols="30" rows="5">{{$wali_murid->alamat}}</textarea>
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
