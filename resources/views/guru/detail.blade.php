@extends('layouts-adminPage.master')
@section('content')
<div class="white_card card_height_100 mb_30">
    <div class="white_card_header">
        <div class="box_header m-0">
            <div class="main-title">
                <h3 class="m-0">Detail Guru</h3>
            </div>
        </div>
    </div>
    <div class="white_card_body">
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nama Guru</label>
                :
                <label for="">{{$guru->nama_guru}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tempat Lahir</label>
                :
                <label for="">{{$guru->tempat_lahir}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tanggal Lahir</label>
                :
                <label for="">{{$guru->tanggal_lahir}}</label>
            </div> 
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Jenis Kelamin</label>
                :
                <label for="">{{$guru->jenkel}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                :
                <label for="">{{$guru->agama}}</label>               
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">No Handphone</label>
                :
                <label for="">{{$guru->no_hp}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Email</label>
                :
                <label for="">{{$guru->email}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Pendidikan</label>
                :
                <label for="">{{$guru->pendidikan}}</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Alamat</label>
                :
                <label for="">{{$guru->alamat}}</label>
            </div>
        </form>
    </div>
</div>
@endsection