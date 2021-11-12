@extends('master/master')
@section("content")

<div class="container">
<div class="container text-danger p-5">
    <h2>Payment</h2>
<p>
    You can make payments from your bKash Account to any “Merchant” who accepts “bKash Payment”. Now you can bKash your Payment at more than 47,000 outlets nationwide. To bKash your Payment follow the steps below.
    <br>
    01. Go to your bKash Mobile Menu by dialing *247#
    <br>
    02. Choose “Payment”
    <br>
    03. Enter the Merchant bKash Account Number you want to pay to
    <br>
    04. Enter the amount you want to pay
    <br>
    05. Enter a reference* against your payment (you can mention the purpose of the transaction in one word. e.g. Bill)
    <br>
    06. Enter the Counter Number* (the salesperson at the counter will tell you the number)
    <br>
    07. Now enter your bKash Mobile Menu PIN to confirm
    <br><br><br>
    Done! You will receive a confirmation message from bKash.
    <br>
    *If Reference or Counter No. or both are not applicable, you can skip them by entering \0\.
</p>
<br>
</div>


    <div class="container bg-info p-5">
        <form action="">
            <h3 class="bg-danger p-4 text-white">
                Merchant bKash Account Number : 01234567890
            </h3><br>
            <h4>Payble amount : 500 BDT</h4>
            <br><br>
            <input type="number" class="form-control mr-sm-2" placeholder="Transaction id">
            <br><br>
            <input type="text" class="form-control mr-sm-2" placeholder="Your Name">
            <br><br>
            <button class="btn btn-lg btn-danger">Submit</button>
            <br><br>
        </form>
    </div>

</div>


@endsection
