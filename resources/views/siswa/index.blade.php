@extends('layouts-adminPage.master')
@section('content')
<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Data Siswa</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <h4></h4>
                    <div class="box_right d-flex lms_block">
                        <div class="serach_field_2">
                            <div class="search_inner">
                                <form active="/siswa/cari" method="get">
                                    <div class="search_field">
                                        <input type="text" name="cari" placeholder="Cari Data...">
                                    </div>
                                    <button type="submit"> <i class="ti-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="add_button ms-2">
                            <a href="/siswa/create" class="btn btn-info">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="QA_table mb_30">

                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_0"
                            role="grid" aria-describedby="DataTables_Table_0_info" style="width: 968px;">
                            <thead>
                                <tr role="row">
                                    <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 92px;" aria-sort="ascending"
                                        aria-label="title: activate to sort column descending">No</th>
                                    <th scope="col" class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 92px;" aria-sort="ascending"
                                        aria-label="title: activate to sort column descending">NIS</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 139px;"
                                        aria-label="Category: activate to sort column ascending">Nama Siswa</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 106px;"
                                        aria-label="Status: activate to sort column ascending">Aksi</th>
                                </tr>
                            </thead>
                            @foreach($siswa as $no => $value)
                                <tbody>
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $value->nis }}</td>
                                        <td>{{ $value->nama_siswa }}</td>
                                        <td>
                                            <a href="/siswa/edit/{{$value->id}}" class="btn btn-info">Edit</a>
                                            <a href="/siswa/detail/{{$value->id}}" class="btn btn-info">Detail</a>
                                            <a href="/siswa/hapus/{{$value->id}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection
