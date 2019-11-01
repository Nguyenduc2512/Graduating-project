@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Danh mục sản phẩm</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh mục sản phẩm</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                    aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                          aria-sort="ascending" aria-label="ID: activate to sort column descending">
                          ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Tên sản phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Danh mục
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Giá
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Giá khuyến
                          mãi
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Ảnh sản
                          phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Mô tả
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Lượt xem
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"> <a
                            href="/admin1/product/add" class="btn btn-xs btn-success">
                            <i class="fa fa-plus"></i> Thêm mới
                          </a>
                        </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>sản phẩm 1</td>
                        <td>Danh mục 1</td>
                        <td>120.000</td>
                        <td>111</td>
                        <td> <img name="" id="" src="../../dist/img/photo1.png" width="150" required=""></td>
                        <td>111</td>
                        <td>111</td>
                        <td>
                          <a href="/admin1/product/edit" class="btn btn-xs btn-info">
                            <i class="fa fa-pencil"></i> Cập nhật
                          </a>
                          <a href="#" class="btn btn-xs btn-danger btn-remove">
                            <i class="fa fa-trash"></i> Xoá
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                    <ul class="pagination">
                      <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#"
                          aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                      <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1"
                          tabindex="0" class="page-link">1</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2"
                          tabindex="0" class="page-link">2</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3"
                          tabindex="0" class="page-link">3</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4"
                          tabindex="0" class="page-link">4</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5"
                          tabindex="0" class="page-link">5</a></li>
                      <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6"
                          tabindex="0" class="page-link">6</a></li>
                      <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2"
                          data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>

    
@endsection

