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
   <div class="colt"><a href="debitOrder">Address</a></div>
    <div class="colt active_cu"><a href="orderReview">Order Review</a></div>
    <div class="colt"><a href="payment">Payment</a></div>

</div>
<div class="col-head">
    <div>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">ITEM</th>
      <th scope="col">PRICE</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">TOTAL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
   
      <td>Visa Debit Card<br/><small>Type: Withdrawal Card</small></td>
      <td>30,725.99 EUR</td>
      <td>1</td>
      <td><b>30,725.99 EUR</b></td>
    </tr>
    
  </tbody>
</table> 
<div style="float: right;">
<a href="payment" class="btn-submit">PROCEED TO PAYMENT ></a>
</div>


</div>


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