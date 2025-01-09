@extends('front.layouts.app')
@section('content')
<style>
      .card.mb-4.box-shadow {
            border: 1px solid #e8e7e7;
            transition: 1s all;
            /* transform: scale(1); */
        }

        .card:hover {
            transform: translateY(-7%);
        }

        .card-body {
            margin: 0px;
            padding: 0px;
            border: none !important;
        }

        .table.table-bordered.table-striped {
            margin: 0px !important;
        }
        
        .card-bottom{
                border: 1px solid #e8e7e7;
        }

        .card-header {
            border-top: 5px solid #1BBA14;
            background: #E8F7E7;
            border-radius: 0px !important;
        }

        .card-header:hover {
            background: white !important;
            pointer-events: all;

        }

        .border-x {
            border-top: 5px solid #FDCE33;
            background: #FDFACE;
        }

        .card-header-2.bg-white {
            border: none;
            height: 180px;
        }

        .card-title.pricing-card-title.text-center {
            font-size: 20px;
            font-weight: 600;
            line-height: 40px !important;
        }

        .title-price {
         text-align: center;
         font-size: 17px;
         text-decoration: line-through;
         color: rgb(253, 47, 47);
         line-height: 1;
        }

        .card-tile {
            text-align: center;
            font-weight: 800;
            font-size: 36px;
            line-height: 65px;
        }

        .date-title {
            text-align: center;
            color: #796e6e;
        }

        .btn.btn-md.btn-outline-primary {
            margin-left: 22%;
            background: rgb(253, 47, 47);
            ;
            color: snow;
            font-weight: 800;
            border: none;
            width: 120px;
            line-height: 2 !important;
            margin-bottom: 8px !important;
        }




        .card:hover {
            background: white !important;
            box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.37);
        }

        .fa-solid.fa-circle-xmark {
            color: rgb(253, 47, 47);
            ;
            font-size: 30px;
        }

        .fa-solid.fa-circle-check {
            color: rgb(59, 177, 13);
            font-size: 30px;
        }

        .btn.btn-md.btn-outline-primary {
            margin: 0 auto;
            display: block;
            background: #fff0;
            color: rgb(253, 47, 47);
            ;
            font-weight: 600;
            border: none;
            width: 120px;
            border: 1px solid rgb(253, 47, 47);
            ;
        }

        .btn.btn-md.btn-outline-primary:hover {
            background: rgb(253, 47, 47);
            color: snow;
            font-weight: 600;
            border: none;
            width: 120px;
        }

        .bg-color {
            border: 1px solid #00bd00;
            background: #e8f6e7;
            border-radius: 4px;
            text-align: center;
            float: left;
            font-size: 12px;
            color: #303030;
            padding-top: 50px;
            line-height: 20px;
            width: 100%;
        }

        .fa-solid.fa-phone {
            font-size: 36px;
            margin-bottom: 18px;
        }

        .title-talk {
            font-size: 24px;
            padding: 0px 45px;
            font-weight: 600;
        }

        .title-phone {
            font-size: 23px;
            font-weight: 800;
            margin-bottom: 69px;
        }
       .title-icon i {
            font-size: 30px;
            margin: 10px 0px -15px 0px;
             color: #E14436 !important;
        }
        
        h2.title-name {
            font-size: 18px;
       }
       
       .col-md-3.text-center {
    border-right: 2px dashed #d3cfcf;
}
div#last-border {
    border-right: 0px !important;
}

</style>
    <!-- flat-title -->
    <section class="flat-title ">
        <div class="tf-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-inner ">
                        <ul class="breadcrumb">
                            <li><a class="home fw-6 text-color-3" href="index.html">Home</a></li>
                            <li>packages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /flat-title -->

    <!-- .main-content -->
    <div class="main-content tf-spacing-6 header-fixed custom-pages">
        <!-- section-faq -->
        <section class="section-faq ">
            <div class="container">
                <div class="row mt-5">
                    <div class="col col-xs-12 p-0 m-0">
                        <div class="card-md">
                            <div class="card-header-2 bg-white">
                                <div style="height:232px;"></div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Number of listing Property's</td>
                                        </tr>
                                        <tr>
                                            <td>Validity of your Property ads</td>
                                        </tr>
                                        <tr>
                                            <td>No. of buyer's Contact</td>
                                        </tr>
                                        <tr>
                                            <td>Email Promotion</td>
                                        </tr>
                                        <tr>
                                            <td>Buyer inquiry against posted Property</td>
                                        </tr>
                                        <tr>
                                            <td>Verified tag on Property</td>
                                        </tr>
                                        <tr>
                                            <td>Priority customer Support</td>
                                        </tr>
                                        <tr>
                                            <td>Home loan Facility</td>
                                        </tr>
                                        <tr>
                                            <td>Notification to Buyer</td>
                                        </tr>
                                        <tr>
                                            <td>Response Rate</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 p-0 m-0">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header ">
                                <h1 class="card-title pricing-card-title text-center">SILVER</h1>
                                <h2 class="title-price">₹ 1200</h2>
                                <h4 class="card-tile">₹ 960</h4>
                                <!--<p class="date-title">180 Days validity</p>-->
                                <a href="selected-package/?pid=1" class="btn btn-md btn-outline-primary">Buy Now</a>
                                <!--<p class="date-title mt-2">View Sample</p>-->
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">60 Days</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Upto - 10</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Low</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 p-0 m-0">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header border-x">
                                <h1 class="card-title pricing-card-title text-center">GOLD</h1>
                                <h2 class="title-price">₹ 3500</h2>
                                <h4 class="card-tile">₹ 2625</h4>
                                <!--<p class="date-title">180 Days validity</p>-->
                                <a href="selected-package/?pid=2" class="btn btn-md btn-outline-primary">Buy Now</a>
                                <!--<p class="date-title mt-2">View Sample</p>-->
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">90 Days</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Upto - 15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Medium</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 p-0 m-0">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header ">
                                <h1 class="card-title pricing-card-title text-center">PLATINUM</h1>
                                <h2 class="title-price">₹ 5000</h2>
                                <h4 class="card-tile">₹ 3500</h4>
                                <!--<p class="date-title">180 Days validity</p>-->
                                <a href="selected-package/?pid=3" class="btn btn-md btn-outline-primary">Buy Now</a>
                                <!--<p class="date-title mt-2">View Sample</p>-->
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">120 Days</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Upto - 25</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">No</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">High</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 p-0 m-0">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header border-x">
                                <h1 class="card-title pricing-card-title text-center">DIAMOND</h1>
                                <h2 class="title-price">₹ 7500</h2>
                                <h4 class="card-tile">₹ 4500</h4>
                                <!--<p class="date-title">180 Days validity</p>-->
                                <a href="selected-package/?pid=4" class="btn btn-md btn-outline-primary">Buy Now</a>
                                <!--<p class="date-title mt-2">View Sample</p>-->
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">180 Days</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Upto - 40</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">Yes</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">High</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section-faq -->
    </div>
    <!-- /main-content -->
@endsection

@push('scripts') 
@endpush
