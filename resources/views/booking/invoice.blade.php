@extends('layouts.app')
@section('content')

<div class="navbar two-action no-hairline">
    <div class="navbar-inner d-flex align-items-center">
        <div class="left">
            <a href="#" class="link icon-only">
                <i class="custom-hamburger">
                    <span><b></b></span>
                </i>
            </a>
        </div>
        <div class="sliding custom-title">Invoice</div>
        <div class="right d-flex">
            <a href="notifications.html" class="link icon-only"><i class="material-icons">notifications</i></a>
            <a href="#" data-bs-toggle="dropdown" aria-expanded="true" class="link"><i class="material-icons">more_vert</i></a>
            @include('layouts.navigation')
        </div>
    </div>
</div>
		
<div class="page-content">
    <div class="container inv-section">
        <div class="top-inv-col">
            <div class="inv-logo">
                <img alt="" src="{{asset('assets/img/logo.svg')}}" alt="">
            </div>
            <div class="order-details">
                <p>Order: <span>#00124</span></p>
                <p>Issued: <span>20/07/2025</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h5>Invoice From</h5>
                <ul class="inv-receiver">
                    <li>Dr. Darren Elder<br> 806 Twin Willow Lane, Old Forge,<br> Newyork, USA</li>
                </ul>
                <h5>Invoice To</h5>
                <ul class="inv-receiver">
                    <li>Dr. Darren Elder<br> 806 Twin Willow Lane, Old Forge,<br> Newyork, USA</li>
                </ul>
            </div>
            <div class="col-6">
                <div class="payment-method">
                    <h5>Payment Method</h5>
                    <ul>
                        <li>Debit Card<br> XXXXXXXXXXXX-2541<br> HDFC Bank</li>
                    </ul>
                </div>
            </div>
        </div>
        <table class="inv-table">
            <tbody>
                <tr>
                    <th class="text-align-left">Description</th>
                    <th class="text-align-center">Quantity</th>
                    <th class="text-align-center">VAT</th>
                    <th class="text-align-center">Total</th>
                </tr>
                <tr>
                    <td>
                        Plumber Booking
                    </td>
                    <td class="text-align-center">1</td>
                    <td class="text-align-center">Rs.0</td>
                    <td class="text-align-center">Rs.50</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><b>Subtotal</b></td>
                    <td colspan="1">Rs.50</td>
                </tr>
                <tr>
                    <td colspan="3"><b>Discount</b></td>
                    <td colspan="1">-10%</td>
                </tr>
                <tr>
                    <td colspan="3"><b>Total Amout:</b></td>
                    <td colspan="1">Rs.45</td>
                </tr>
            </tfoot>
        </table>
        <div class="invoice-info">
            <h5>Other information</h5>
            <p class="text-muted">Text</p>
        </div>
    </div>
</div>

@endsection
@section('customScript')

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Bootstrap Datepicker JS -->
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.datepicker2.js')}}"></script>

	<!-- Swiper JS -->
    <script src="{{asset('assets/plugins/swiper/js/swiper.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}"></script>
@endsection

