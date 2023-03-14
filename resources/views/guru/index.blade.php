@extends('layouts-adminPage.master')
@section('content')
<div class="col-lg-12">
    <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
            <div class="box_header m-0">
                <div class="main-title">
                    <h3 class="m-0">Data table</h3>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#addcategory" class="btn_1">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="QA_table mb_30">

                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <div class="table-responsive">
                       
                        <table class="table lms_table_active dataTable no-footer dtr-inline" id="DataTables_Table_0"
                            role="grid" aria-describedby="DataTables_Table_0_info" style="width: 968px;">
                            <thead>
                                <tr role="row">
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 68px;"
                                        aria-label="Price: activate to sort column ascending">Nama Guru</th> 
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 106px;"
                                        aria-label="Status: activate to sort column ascending">Email</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 106px;"
                                        aria-label="Status: activate to sort column ascending">Agama</th>
                                    <th scope="col" class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                        rowspan="1" colspan="1" style="width: 106px;"
                                        aria-label="Status: activate to sort column ascending">Pendidikan</th>

                                </tr>
                            </thead>
                            @foreach($guru as $no => $value)
                                <tbody>
                                    <tr>
                                        <td>{{ $value->nama_guru}}</td>
                                        <td>{{ $value->email}}</td>
                                        <td>{{ $value->agama}}</td>
                                        <td>{{ $value->pendidikan}}</td>
                                        <td>
                                            <a href="/guru/edit/{{$value->id}}" class="btn btn-info">Edit</a>
                                            <a href="/guru/detail/{{$value->id}}" class="btn btn-info">Detail</a>
                                            <a href="/guru/hapus/{{$value->id}}" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection
