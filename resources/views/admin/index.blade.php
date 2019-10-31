@extends('admin/layouts/main')
@section('content')
    
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Trang quản trị</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Trang quản trị</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- các Mục admin-->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>Quản lý sản phẩm</p>
                </div>
                <div class="icon">
                  <i class="fab fa-product-hunt"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>4</h3>

                  <p>Danh mục sản phẩm</p>
                </div>
                <div class="icon">
                  <i class="fas fa-clipboard-list"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
                  <p>Phản hồi sản phẩm</p>
                </div>
                <div class="icon">
                  <i class="far fa-comments"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Các đơn hàng</p>
                </div>
                <div class="icon">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- thống kê -->
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">????</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Tổng lượt truy cập</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Số sản phẩm đã bán</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Khách hàng mới</span>
                  <span class="info-box-number">30</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
          <!-- lịch & Doanh thu -->
          <div class="row">
            <div class="col-md-6">
              <div class="clock">
                <div class="clock__face">
                  <div class="clock__hand clock__hand--hour"></div>
                  <div class="clock__hand clock__hand--min"></div>
                  <div class="clock__hand clock__hand--second"></div>
                  <div class="clock__center"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Lịch
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->

                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%">
                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                      <ul class="list-unstyled">
                        <li class="show">
                          <div class="datepicker">
                            <div class="datepicker-days">
                              <table class="table table-sm">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous">
                                      <span class="fa fa-chevron-left" title="Previous Month"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                      title="Select Month">October 2019</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                        title="Next Month"></span></th>
                                  </tr>
                                  <tr>
                                    <th class="dow">Su</th>
                                    <th class="dow">Mo</th>
                                    <th class="dow">Tu</th>
                                    <th class="dow">We</th>
                                    <th class="dow">Th</th>
                                    <th class="dow">Fr</th>
                                    <th class="dow">Sa</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td data-action="selectDay" data-day="09/29/2019" class="day old weekend">29</td>
                                    <td data-action="selectDay" data-day="09/30/2019" class="day old">30</td>
                                    <td data-action="selectDay" data-day="10/01/2019" class="day">1</td>
                                    <td data-action="selectDay" data-day="10/02/2019" class="day">2</td>
                                    <td data-action="selectDay" data-day="10/03/2019" class="day">3</td>
                                    <td data-action="selectDay" data-day="10/04/2019" class="day">4</td>
                                    <td data-action="selectDay" data-day="10/05/2019" class="day weekend">5</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="10/06/2019" class="day weekend">6</td>
                                    <td data-action="selectDay" data-day="10/07/2019" class="day">7</td>
                                    <td data-action="selectDay" data-day="10/08/2019" class="day">8</td>
                                    <td data-action="selectDay" data-day="10/09/2019" class="day">9</td>
                                    <td data-action="selectDay" data-day="10/10/2019" class="day">10</td>
                                    <td data-action="selectDay" data-day="10/11/2019" class="day">11</td>
                                    <td data-action="selectDay" data-day="10/12/2019" class="day active today weekend">
                                      12</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="10/13/2019" class="day weekend">13</td>
                                    <td data-action="selectDay" data-day="10/14/2019" class="day">14</td>
                                    <td data-action="selectDay" data-day="10/15/2019" class="day">15</td>
                                    <td data-action="selectDay" data-day="10/16/2019" class="day">16</td>
                                    <td data-action="selectDay" data-day="10/17/2019" class="day">17</td>
                                    <td data-action="selectDay" data-day="10/18/2019" class="day">18</td>
                                    <td data-action="selectDay" data-day="10/19/2019" class="day weekend">19</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="10/20/2019" class="day weekend">20</td>
                                    <td data-action="selectDay" data-day="10/21/2019" class="day">21</td>
                                    <td data-action="selectDay" data-day="10/22/2019" class="day">22</td>
                                    <td data-action="selectDay" data-day="10/23/2019" class="day">23</td>
                                    <td data-action="selectDay" data-day="10/24/2019" class="day">24</td>
                                    <td data-action="selectDay" data-day="10/25/2019" class="day">25</td>
                                    <td data-action="selectDay" data-day="10/26/2019" class="day weekend">26</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="10/27/2019" class="day weekend">27</td>
                                    <td data-action="selectDay" data-day="10/28/2019" class="day">28</td>
                                    <td data-action="selectDay" data-day="10/29/2019" class="day">29</td>
                                    <td data-action="selectDay" data-day="10/30/2019" class="day">30</td>
                                    <td data-action="selectDay" data-day="10/31/2019" class="day">31</td>
                                    <td data-action="selectDay" data-day="11/01/2019" class="day new">1</td>
                                    <td data-action="selectDay" data-day="11/02/2019" class="day new weekend">2</td>
                                  </tr>
                                  <tr>
                                    <td data-action="selectDay" data-day="11/03/2019" class="day new weekend">3</td>
                                    <td data-action="selectDay" data-day="11/04/2019" class="day new">4</td>
                                    <td data-action="selectDay" data-day="11/05/2019" class="day new">5</td>
                                    <td data-action="selectDay" data-day="11/06/2019" class="day new">6</td>
                                    <td data-action="selectDay" data-day="11/07/2019" class="day new">7</td>
                                    <td data-action="selectDay" data-day="11/08/2019" class="day new">8</td>
                                    <td data-action="selectDay" data-day="11/09/2019" class="day new weekend">9</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-months" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Year"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                      title="Select Year">2019</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                        title="Next Year"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span
                                        data-action="selectMonth" class="month">Feb</span><span
                                        data-action="selectMonth" class="month">Mar</span><span
                                        data-action="selectMonth" class="month">Apr</span><span
                                        data-action="selectMonth" class="month">May</span><span
                                        data-action="selectMonth" class="month">Jun</span><span
                                        data-action="selectMonth" class="month">Jul</span><span
                                        data-action="selectMonth" class="month">Aug</span><span
                                        data-action="selectMonth" class="month">Sep</span><span
                                        data-action="selectMonth" class="month active">Oct</span><span
                                        data-action="selectMonth" class="month">Nov</span><span
                                        data-action="selectMonth" class="month">Dec</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-years" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Decade"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                      title="Select Decade">2010-2019</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                        title="Next Decade"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectYear" class="year old">2009</span><span
                                        data-action="selectYear" class="year">2010</span><span data-action="selectYear"
                                        class="year">2011</span><span data-action="selectYear"
                                        class="year">2012</span><span data-action="selectYear"
                                        class="year">2013</span><span data-action="selectYear"
                                        class="year">2014</span><span data-action="selectYear"
                                        class="year">2015</span><span data-action="selectYear"
                                        class="year">2016</span><span data-action="selectYear"
                                        class="year">2017</span><span data-action="selectYear"
                                        class="year">2018</span><span data-action="selectYear"
                                        class="year active">2019</span><span data-action="selectYear"
                                        class="year old">2020</span></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="datepicker-decades" style="display: none;">
                              <table class="table-condensed">
                                <thead>
                                  <tr>
                                    <th class="prev" data-action="previous"><span class="fa fa-chevron-left"
                                        title="Previous Century"></span></th>
                                    <th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th>
                                    <th class="next" data-action="next"><span class="fa fa-chevron-right"
                                        title="Next Century"></span></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td colspan="7"><span data-action="selectDecade" class="decade old"
                                        data-selection="2006">1990</span><span data-action="selectDecade" class="decade"
                                        data-selection="2006">2000</span><span data-action="selectDecade"
                                        class="decade active" data-selection="2016">2010</span><span
                                        data-action="selectDecade" class="decade" data-selection="2026">2020</span><span
                                        data-action="selectDecade" class="decade" data-selection="2036">2030</span><span
                                        data-action="selectDecade" class="decade" data-selection="2046">2040</span><span
                                        data-action="selectDecade" class="decade" data-selection="2056">2050</span><span
                                        data-action="selectDecade" class="decade" data-selection="2066">2060</span><span
                                        data-action="selectDecade" class="decade" data-selection="2076">2070</span><span
                                        data-action="selectDecade" class="decade" data-selection="2086">2080</span><span
                                        data-action="selectDecade" class="decade" data-selection="2096">2090</span><span
                                        data-action="selectDecade" class="decade old" data-selection="2106">2100</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </li>
                        <li class="picker-switch accordion-toggle"></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    
@endsection

