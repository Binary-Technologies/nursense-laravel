@extends('layouts.admin')

@section('dashboardContent')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded min-height-124 d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Today Sales</p>
                    <h6 class="mb-0">USD 220000</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded min-height-124 d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Sales</p>
                    <h6 class="mb-0">USD 7700000</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded min-height-124 d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Today Revenue</p>
                    <h6 class="mb-0">USD 220000</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="bg-light rounded min-height-124 d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Revenue</p>
                    <h6 class="mb-0">USD 7700000</h6>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Sale & Revenue End -->

<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">

        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Sales</h6>
                    <a href="">Show All</a>
                </div>
                <canvas id="gas-sales"></canvas>
            </div>
        </div>

        <div class="col-sm-12 col-xl-6">
            <div class="bg-light text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Sales & Revenue</h6>
                    <a href="">Show All</a>
                </div>
                <canvas id="Sales-revenue"></canvas>
            </div>
        </div>

    </div>

</div>
<!-- Sales Chart End -->

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">

    <div class="bg-light text-center rounded p-4">

        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Recent Sales</h6>
            <a href="">Show All</a>
        </div>

        <div class="table-responsive">

            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead class="text-center">
                    <tr class="text-dark">
                        <th scope="col" class="item-flex-center"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Date</th>
                        <th scope="col">TNC</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td class="item-flex-center"><input class="form-check-input" type="checkbox"></td>
                        <td>14 Feb 2023</td>
                        <td>D000124</td>
                        <td>DC</td>
                        <td>USD 205000</td>
                        <td>Completed</td>
                        <td><a class="btn btn-sm btn-primary" href="">More Details</a></td>
                    </tr>
                    <tr>
                        <td class="item-flex-center"><input class="form-check-input" type="checkbox"></td>
                        <td>13 Feb 2023</td>
                        <td>D000123</td>
                        <td>ABC</td>
                        <td>USD 207000</td>
                        <td>Completed</td>
                        <td><a class="btn btn-sm btn-primary" href="">More Details</a></td>
                    </tr>
                    <tr>
                        <td class="item-flex-center"><input class="form-check-input" type="checkbox"></td>
                        <td>12 Feb 2023</td>
                        <td>D000122</td>
                        <td>JKL</td>
                        <td>USD 204000</td>
                        <td>Completed</td>
                        <td><a class="btn btn-sm btn-primary" href="">More Details</a></td>
                    </tr>
                    <tr>
                        <td class="item-flex-center"><input class="form-check-input" type="checkbox"></td>
                        <td>11 Feb 2023</td>
                        <td>D000121</td>
                        <td>RTY</td>
                        <td>USD 200700</td>
                        <td>Completed</td>
                        <td><a class="btn btn-sm btn-primary" href="">More Details</a></td>
                    </tr>
                    <tr>
                        <td class="item-flex-center"><input class="form-check-input" type="checkbox"></td>
                        <td>10 Feb 2023</td>
                        <td>D000120</td>
                        <td>UIO</td>
                        <td>USD 200250</td>
                        <td>Completed</td>
                        <td><a class="btn btn-sm btn-primary" href="">More Details</a></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>
<!-- Recent Sales End -->
@endsection