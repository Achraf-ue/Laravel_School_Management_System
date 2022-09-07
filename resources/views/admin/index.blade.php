@extends('admin.admin_master')
@section('admin')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
      <div class="container-fluid">
          <div class="page-title-box">
              <div class="row align-items-center">
                  
                  <div class="col-sm-6">
                      <h4 class="page-title">Dashboard</h4>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                      </ol>

                  </div>
                  <div class="col-sm-6">
                  
                      <div class="float-right d-none d-md-block">
                          <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="mdi mdi-settings mr-2"></i> Settings
                              </button>
                              <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row">
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary text-white">
                      <div class="card-body">
                          <div class="mb-4">
                              <div class="float-left mini-stat-img mr-4">
                                  <img src="{{ asset('backend/assets/images/services-icon/01.png')}}" alt="" >
                              </div>
                              <h5 class="font-16 text-uppercase mt-0 text-white-50">Users</h5>
                              <h4 class="font-500">0</h4>
                              
                          </div>
                          <div class="pt-2">
                              <div class="float-right">
                                  <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                              </div>

                              <p class="text-white-50 mb-0">Since last month</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary text-white">
                      <div class="card-body">
                          <div class="mb-4">
                              <div class="float-left mini-stat-img mr-4">
                                  <img src="{{ asset('backend/assets/images/services-icon/02.png')}}" alt="" >
                              </div>
                              <h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                              <h4 class="font-500">52,368</h4>
                          </div>
                          <div class="pt-2">
                              <div class="float-right">
                                  <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                              </div>

                              <p class="text-white-50 mb-0">Since last month</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary text-white">
                      <div class="card-body">
                          <div class="mb-4">
                              <div class="float-left mini-stat-img mr-4">
                                  <img src="{{ asset('backend/assets/images/services-icon/03.png')}}" alt="" >
                              </div>
                              <h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                              <h4 class="font-500">15.8</h4>
                          </div>
                          <div class="pt-2">
                              <div class="float-right">
                                  <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                              </div>

                              <p class="text-white-50 mb-0">Since last month</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <div class="card mini-stat bg-primary text-white">
                      <div class="card-body">
                          <div class="mb-4">
                              <div class="float-left mini-stat-img mr-4">
                                  <img src="{{ asset('backend/assets/images/services-icon/04.png')}}" alt="" >
                              </div>
                              <h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                              <h4 class="font-500">2436</h4>
                          </div>
                          <div class="pt-2">
                              <div class="float-right">
                                  <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                              </div>

                              <p class="text-white-50 mb-0">Since last month</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- end row -->

          <div class="row">
              <div class="col-xl-9">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="mt-0 header-title mb-5">Monthly Earning</h4>
                          <div class="row">
                              <div class="col-lg-7">
                                  <div>
                                      <div id="ct-donut" class="ct-chart earning ct-golden-section"></div>
                                  </div>
                              </div>
                              <div class="col-lg-5">
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="text-center">
                                              <p class="text-muted mb-4">This month</p>
                                              <h4>$34,252</h4>
                                              <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                              <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">4/5</span>
                                          </div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="text-center">
                                              <p class="text-muted mb-4">Last month</p>
                                              <h4>$36,253</h4>
                                              <p class="text-muted mb-5">It will be as simple as in fact it will be occidental.</p>
                                              <span class="peity-donut" data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }' data-width="72" data-height="72">3/5</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- end row -->
                      </div>
                  </div>
                  <!-- end card -->
              </div>

             
          </div>
          <!-- end row -->
          
         
          <!-- end row -->

          
          <!-- end row -->
      </div>
      <!-- container-fluid -->

  </div>
  <!-- content -->
</div>
@endsection
