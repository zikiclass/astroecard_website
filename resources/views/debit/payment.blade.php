@extends('app')

@section('content')

<div class="container">
<div id="particles-js" class="particles-js" style="height: 50px!important; margin-top: 8rem!important;"></div>
   <div class="head-cont">
   <h2>WALLET ADDRESS</h2>
   
</div>
<div class="row_head" style="margin-top: 1.5rem;">
   

</div>
<div class="col-head">
    
    <div class="payment">
   
    <div class="pay-col">
    <h5>Bitcoin Payment System</h5>
  <div class="paygroup">
  <input type="text" value="bc1qv2ck5dcwr2gnwux4ftyuve9mplszls6477m3d6" id="btcInput"/><button onclick="btcCopy()" class="btn-pay">Copy</button>
</div>
  </div>

    <div class="pay-col">
    <h5>Etherum Payment System</h5>
  <div class="paygroup">
  <input type="text" value="0xED75D4B410733504E93cD8Da6396d6c4cdFf5614" id="ethInput"/><button onclick="ethCopy()" class="btn-pay">Copy</button>
</div>
    </div>
  
<a href="ordercomplete" class="btn-submit">Payment Completed</a>

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