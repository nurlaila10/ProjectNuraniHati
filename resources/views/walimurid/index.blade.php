@extends('layouts-adminPage.master')
@section('content')
<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Data Wali Murid</h3>
                </div>
            </div>
        </div>
        <div class="white_card_body">
            <div class="QA_section">
                <div class="white_box_tittle list_header">
                    <h4>Table</h4>
                    <div class="box_right d-flex lms_block">
                        <div class="serach_field_2">
                            <div class="search_inner">
                                <form active="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search content here...">
                                    </div>
                                    <button type="submit"> <i class="ti-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="add_button ms-2">
                            <a href="/walimurid/create"  class="btn btn-info">Tambah Data</a>
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
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 139px;"
                                        aria-label="Category: activate to sort column ascending">Nama Wali</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 138px;"
                                        aria-label="Teacher: activate to sort column ascending">Tempat Lahir</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 134px;"
                                        aria-label="Lesson: activate to sort column ascending">Tanggal Lahir</th>
                                        <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 134px;"
                                        aria-label="Lesson: activate to sort column ascending">Aksi</th>
                                </tr>
                            </thead>
                            @foreach($walimurid as $no => $value)
                                <tbody>
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $value->nama_wali }}</td>
                                        <td>{{ $value->tempat_lahir }}</td>
                                        <td>{{ $value->tanggal_lahir }}</td>
                                        <td>
                                            <a href="/walimurid/edit/{{$value->id}}" class="btn btn-info">Edit</a>
                                            <a href="/walimurid/detail/{{$value->id}}" class="btn btn-info">Detail</a>
                                            <a href="/walimurid/hapus/{{$value->id}}" class="btn btn-danger">Hapus</a>
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
