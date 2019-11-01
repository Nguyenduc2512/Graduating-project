@extends('admin/layouts/main')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Chi tiết đơn hàng</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="listorder.html">Danh sách đơn hàng</a></li>
                <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
                        <th> Mã sản phẩm</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Sản phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Số lượng
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Giá/1 sản
                          phẩm
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Thành tiền
                          mãi
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"> <a
                            href="listorder.html" class="btn btn-xs btn-success">
                            <i class="fas fa-long-arrow-alt-left"></i> Quay lại
                          </a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr role="row" class="odd">
                        <td>1</td>
                        <td>Giày số 1</td>
                        <td>2</td>
                        <td>160000</td>
                        <td>320000</td>
                        <td></td>
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

