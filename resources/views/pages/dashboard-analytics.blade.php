@extends('layouts.contentLayoutMaster')

{{-- title --}}
@section('title','Dashboard Analytics')
{{-- venodr style --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/dragula.min.css')}}">
@endsection

{{-- page style --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-analytics.css')}}">
@endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
    <div class="row">
      <!-- Website Analytics Starts-->
      <div class="col-md-6 col-sm-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Website Analytics</h4>
            <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
          </div>
          <div class="card-content">
            <div class="card-body pb-1">
              <div class="d-flex justify-content-around align-items-center flex-wrap">
                <div class="user-analytics">
                  <i class="bx bx-user mr-25 align-middle"></i>
                  <span class="align-middle text-muted">Users</span>
                  <div class="d-flex">
                    <div id="radial-success-chart"></div>
                    <h3 class="mt-1 ml-50">601K</h3>
                  </div>
                </div>
                <div class="sessions-analytics">
                  <i class="bx bx-trending-up align-middle mr-25"></i>
                  <span class="align-middle text-muted">Sessions</span>
                  <div class="d-flex">
                    <div id="radial-warning-chart"></div>
                    <h3 class="mt-1 ml-50">92K</h3>
                  </div>
                </div>
                <div class="bounce-rate-analytics">
                  <i class="bx bx-pie-chart-alt align-middle mr-25"></i>
                  <span class="align-middle text-muted">Bounce Rate</span>
                  <div class="d-flex">
                    <div id="radial-danger-chart"></div>
                    <h3 class="mt-1 ml-50">72.6%</h3>
                  </div>
                </div>
              </div>
              <div id="analytics-bar-chart"></div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-xl-3 col-md-6 col-sm-12 dashboard-referral-impression">
        <div class="row">
          <!-- Referral Chart Starts-->
          <div class="col-xl-12 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body text-center pb-0">
                  <h2>$32,690</h2>
                  <span class="text-muted">Referral</span> 40%
                  <div id="success-line-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Impression Radial Chart Starts-->
          <div class="col-xl-12 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body donut-chart-wrapper">
                  <div id="donut-chart" class="d-flex justify-content-center"></div>
                  <ul class="list-inline d-flex justify-content-around mb-0">
                    <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Search</li>
                    <li> <span class="bullet bullet-xs bullet-info mr-50"></span>Email</li>
                    <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>Social</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-12 col-sm-12">
        <div class="row">
          <!-- Conversion Chart Starts-->
          <div class="col-xl-12 col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-xl-0 pt-xl-1">
                <div class="conversion-title">
                  <h4 class="card-title">Conversion</h4>
                  <p>60%
                    <i class="bx bx-trending-up text-success font-size-small align-middle mr-25"></i>
                  </p>
                </div>
                <div class="conversion-rate">
                  <h2>89k</h2>
                </div>
              </div>
              <div class="card-content">
                <div class="card-body text-center">
                  <div id="bar-negative-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-md-6 col-12">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-rgba-primary m-0 p-25 mr-75 mr-xl-2">
                        <div class="avatar-content">
                          <i class="bx bx-user text-primary font-medium-2"></i>
                        </div>
                      </div>
                      <div class="total-amount">
                        <h5 class="mb-0">$38,566</h5>
                        <small class="text-muted">Conversion</small>
                      </div>
                    </div>
                    <div id="primary-line-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-body d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-rgba-warning m-0 p-25 mr-75 mr-xl-2">
                        <div class="avatar-content">
                          <i class="bx bx-dollar text-warning font-medium-2"></i>
                        </div>
                      </div>
                      <div class="total-amount">
                        <h5 class="mb-0">$53,659</h5>
                        <small class="text-muted">Income</small>
                      </div>
                    </div>
                    <div id="warning-line-chart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Dashboard Analytics end -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/dragula.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/dashboard-analytics.js')}}"></script>
@endsection
