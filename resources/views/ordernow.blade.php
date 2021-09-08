@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">

            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your address</label>
                    <textarea name="address" class="form-control" placeholder="Enter Your Address"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection