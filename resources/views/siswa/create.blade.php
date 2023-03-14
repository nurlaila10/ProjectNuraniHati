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
        <form method="post" action="/siswa/store" autocomplete="off">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="exampleInputEmail1">NIS</label>
                <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Masukan NIS">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Siswa">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Jenis Kelamin</label>
                <select name="jenkel" id="" class="form-control">
                    <option value="" selected disabled>Pilih</option>
                    <option value="laki-laki">Laki- Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tempat Lahir">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1" placeholder="Masukan Tanggal Lahir">
            </div> 
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Agama</label>
                <input type="text" name="agama" class="form-control" id="exampleInputPassword1" placeholder="Masukan Agama">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleInputPassword1">Alamat</label>
                <textarea name="alamat" id="" class="form-control" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
