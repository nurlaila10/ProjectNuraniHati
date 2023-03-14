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
        <form method="post" action="/guru/update" autocomplete="off">
            @csrf
            $method('PUT')
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">Nama Guru</label>
                <input type="text" value="{{$guru->nama_guru}}"name="nama_guru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                <input type="text" value="{{$guru->agama}}" name="agama" class="form-control" id="exampleInputPassword1" placeholder="Masukan Agama">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Email</label>
                <input type="text" value="{{$guru->email}}" name="email" class="form-control" id="exampleInputPassword1" placeholder="Masukan Email">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Pendidikan</label>
                <input type="text" value="{{$guru->pendidikan}}" name="pendidikan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Pendidkan">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection