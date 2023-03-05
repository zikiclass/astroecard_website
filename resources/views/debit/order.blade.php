@extends('app')

@section('content')

<div class="container">
<div id="particles-js" class="particles-js" style="height: 150px!important; margin-top: 8rem!important;"></div>
   <div class="head-cont">
   <h2>CHECK OUT</h2>
   <p>Please fill in your address
</div>
<div class="row_head" style="margin-top: 1.5rem;">
   <div class="col-top">
   <div class="colt active_cu"><a href="debitOrder">Address</a></div>
    <div class="colt"><a href="orderReview">Order Review</a></div>
    <div class="colt"><a href="payment">Payment</a></div>

</div>
<div class="col-head">
    
<form action="order_post" method="POST" class="frm">
    @csrf
    <div>
    <div class="form_group">
        <label for="firstname">FIRST NAME</label><br/>
<input type="text" name="firstname" placeholder="Kelvin Mark" value="{{ old('firstname') }}" required/>
<span style="color: red;">@error('firstname'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="surname">SURNAME</label><br/>
<input type="text" name="surname" placeholder="Kelvin Mark" value="{{ old('surname') }}" required/>
<span style="color: red;">@error('surname'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="othername">OTHER NAME</label><br/>
<input type="text" name="othername" placeholder="Kelvin Mark" value="{{ old('othername') }}" required/>
<span style="color: red;">@error('othername'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="street">STREET</label><br/>
<input type="text" name="street" placeholder="123 Main St." value="{{ old('street') }}" required/>
<span style="color: red;">@error('street'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="zip">ZIP</label><br/>
<input type="text" name="zip" placeholder="Postal Code" value="{{ old('zip') }}" required/>
<span style="color: red;">@error('zip'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="email">EMAIL ADDRESS</label><br/>
<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required/>
<span style="color: red;">@error('email'){{$message}}@enderror</span>
</div>

</div>
<div>
    <div class="form_group">
        <label for="phone">PHONE NUMBER</label><br/>
<input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required/>
<span style="color: red;">@error('phone'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="city">CITY</label><br/>
<input type="text" name="city" placeholder="City" value="{{ old('city') }}" required/>
<span style="color: red;">@error('city'){{$message}}@enderror</span>
</div>
    <div class="form_group">
        <label for="state">STATE</label><br/>
<input type="text" name="state" placeholder="State" value="{{ old('state') }}" required/>
<span style="color: red;">@error('state'){{$message}}@enderror</span>
</div>

<input type="submit" value="PROCEED >" class="btn-submit"/>

</div>
</form>
<div class="orderReview">
<h5>Order Summary</h5>
<p>Shipping and additional costs are calculated based on values you have entered.</p>
<table>
<tr>
    <td>Order Subtotal</td>
    <td class="rightItem">30,725.99 EUR</td>
</tr>
<tr>
    <td>Shipping and Handling</td>
    <td class="rightItem">$0.00</td>
</tr>
<tr>
    <td>Tax</td>
    <td class="rightItem">$0.00</td>
</tr>
<tr>
    <td>Total</td>
    <td class="rightItem"><b>30,725.99 EUR</b></td>
</tr>

</table>
</div>
</div>






</div>
<center><img src="img/visa1.png" width="250" height="200"/><img src="img/visa2.png" width="250" height="200"/></center>
</div>


@endsection