@extends('frontend.frontendmaster')
@section('content')

            <!-- main -->
            <section id="main" class="clearfix home-default">
              <div class="container">

                <!-- main-content -->
                <div class="main-content">
                  <!-- row -->
@php
  $page_id = session('page_id');
@endphp
                  <div class="row">
                    <!-- product-list -->
                    <div class="col-md-9">
                      <!-- categorys -->

                        <div class="row" id="bit_exchange_box2">
                          <div id="bit_exchange_results"></div>


                          <div class="col-md-12" >
                              <h5 class="heading">You Need to pay :</h5>

                          </div>
                          <div class="col-md-8 ">
                            <div class="form-group">
                              <input type="text" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" disabled value="{{$full_ar[13]}}">
                            </div>
                          </div>
                          <div class="col-md-12">

                            <center>
                              <button id="next_btn" type="submit" class="btn btn-primary btn-lg w-100" >NEXT  <i style="margin-left : 5px;" class="fa fa-forward"></i></button>
                            </center>
                          </div>




                        </div>

                        <div class="row bit_exchange_box3" id="bit_exchange_box3 "   >

  					<div class="col-md-2"></div>
  					<div class="col-md-8">
  						<h3><i class="fa fa-user"></i> Additional information</h3>
  						<form id="bit_exchange_form" action="{!! route('order.submit') !!}" method="post">
                @CSRF
  							<div class="form-group">
  								<label>Your email address</label>
  								<input type="text" class="form-control input-lg form_style_1" value="{{old('customer_name')}}" name="customer_name">
  							</div>
  							<div class="form-group">
  								<label>{{$full_ar[17]}} Email Address</label>
  								<input type="text" class="form-control input-lg form_style_1" value="{{old('customer_email')}}" name="customer_email">
  							</div><div class="form-group">
  								<label>Active Mobile Number</label>
  								<input type="text" class="form-control input-lg form_style_1" value="{{old('customer_phone')}}" name="customer_phone">
  							</div>

  							<input type="hidden" name="send_currency_buying_price" value="{{$full_ar[1]}}">
  							<input type="hidden" name="send_currency_selling_price" value="{{$full_ar[3]}}">
  							<input type="hidden" name="receive_currency_buying_price" value="{{$full_ar[5]}}">
  							<input type="hidden" name="receive_currency_selling_price" value="{{$full_ar[7]}}">
  							<input type="hidden" name="taka_ditase" value="{{$full_ar[9]}}">
  							<input type="hidden" name="taka_ditase_rate" value="{{$full_ar[11]}}">
  							<input type="hidden" name="tk_dimu" value="{{$full_ar[13]}}">
  							<input type="hidden" name="send_cur_name" value="{{$full_ar[15]}}">
  							<input type="hidden" name="recive_cur_name" value="{{$full_ar[17]}}">
  							<input type="hidden" name="exchange_id" value="{{$full_ar[19]}}">
  							<center>
  								<button type="submit" class="btn btn-primary btn-lg" <i class="fa fa-refresh"></i> Process exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  							</center>
  						</form>
  					</div>
  					<div class="col-md-2"></div>
  				</div>


                      </div><!-- category-ad -->
@php
echo "<pre>";
  print_r($full_ar);
  echo "</pre>";
@endphp
                      <!-- featureds -->
                      <div class="section featureds">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="section-title featured-top">
                              <h4>Awesome <strong>Testimonials</strong></h4>
                            </div>
                          </div>
                        </div>

                        <!-- featured-slider -->
                        <div class="featured-slider">
                          <div id="featured-slider">
                            <!-- featured -->
                            <div class="featured">
                              <!-- ad-info -->
                              <div class="ad-info">
                                <h3 class="item-price"><span class="label label-success" style="color:#fff;"><i class="fa fa-smile-o"></i> Positive</span></h3>
                                <h4 class="item-title">good service</h4>
                                <div class="item-cat">
                                  <span></span>
                                </div>
                              </div><!-- ad-info -->
                            </div><!-- featured -->
                            <!-- featured -->


                          </div><!-- featured-slider -->
                        </div><!-- #featured-slider -->
                      </div><!-- featureds -->

                      {{-- <!-- trending-ads -->
                      <div class="section trending-ads">
                        <div class="section-title tab-manu">
                          <h4>Latest exchanges</h4>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-12">
                            <table class="table">
                              <thead>


                                <th width="15%">Status</th>

                                <tr>
                                  <th>Send</th>
                                  <th>Receive</th>
                                  <th>Amount</th>
                                  <th>Exchange ID</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td>300 </td>
                                  <td>6256C124E3***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td>300 </td>
                                  <td>DA0EB797CF***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td><img src="https://paybd.net/uploads/1519552364_icon.png" width="20px" height="20"> Neteller. </td>
                                  <td>5000 </td>
                                  <td>46AF1B55C5***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519555532_icon.jpg" width="20px" height="20"> Payoneer. </td>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td>50 </td>
                                  <td>03178829AD***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td><img src="https://paybd.net/uploads/1519552364_icon.png" width="20px" height="20"> Neteller. </td>
                                  <td>5000 </td>
                                  <td>C5B31834D6***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td><img src="https://paybd.net/uploads/1519552364_icon.png" width="20px" height="20"> Neteller. </td>
                                  <td>5000 </td>
                                  <td>BECAA8B6BC***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td>80 </td>
                                  <td>8DC6DC8143***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td>100 </td>
                                  <td>71B0724832***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td><img src="https://paybd.net/uploads/1519556005_icon.jpg" width="20px" height="20"> Bkash Personal </td>
                                  <td>100 </td>
                                  <td>E81F8ACA42***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                                <tr>
                                  <td><img src="https://paybd.net/uploads/1519555532_icon.jpg" width="20px" height="20"> Payoneer. </td>
                                  <td><img src="https://paybd.net/uploads/1519552270_icon.jpg" width="20px" height="20"> Skrill. </td>
                                  <td>50 </td>
                                  <td>DF341BA1C6***************</td>
                                  <td><span class="label label-success"><i class="fa fa-check"></i> Processed</span></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                      <!--trending-ads --> --}}


                    </div><!-- product-list -->
{{--
                    <!-- advertisement -->
                    <div class="col-md-3">
                      <div class="section">
                        <div class="section-title tab-manu">
                          <h4>Track exchange</h4>
                        </div>
                        <br />
                        <form action="https://paybd.net/track" method="POST">
                          <div class="form-group">
                            <input type="text" class="form-control" name="order_id" placeholder="Type here exchange id">
                          </div>
                          <button type="submit" class="btn btn-primary btn-block" name="bit_track">Track</button>
                        </form>
                      </div>

                      <div class="section">
                        <div class="section-title tab-manu">
                          <h4>Our Reserve</h4>
                        </div>
                        <br />
                        <div class="row">
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519552270_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Skrill. </span><br />
                              <span class="text text-muted">420 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519552364_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Neteller. </span><br />
                              <span class="text text-muted">350 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519552967_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Paypal. </span><br />
                              <span class="text text-muted">00 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="icons/Payza.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Payza </span><br />
                              <span class="text text-muted">00 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519554761_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Coinbase BTC. </span><br />
                              <span class="text text-muted">50 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519554956_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Webmoney. </span><br />
                              <span class="text text-muted">50 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519555047_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Perfect money. </span><br />
                              <span class="text text-muted">00 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519555301_icon.png" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Payeer. </span><br />
                              <span class="text text-muted">00 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519555532_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Payoneer. </span><br />
                              <span class="text text-muted">00 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519555901_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Rocket Personal </span><br />
                              <span class="text text-muted">41500 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519556005_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Bkash Personal </span><br />
                              <span class="text text-muted">413760 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519556124_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Bkash Merchant. </span><br />
                              <span class="text text-muted">20000 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519556260_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Rocket Merchant. </span><br />
                              <span class="text text-muted">20000 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519556347_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Rocket Agent </span><br />
                              <span class="text text-muted">50000 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519556466_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Bkash Agent </span><br />
                              <span class="text text-muted">50000 </span>
                            </span>
                          </div>
                          <br><br>
                          <div class="col-md-12" style="margin-bottom:10px;">
                            <img src="https://paybd.net/uploads/1519573638_icon.jpg" width="42px" height="42px" class="img-circle img-bordered pull-left">
                            <span class="pull-left" style="margin-left:5px;">
                              <span style="font-size:15px;font-weight:bold;">Rocket To Bank </span><br />
                              <span class="text text-muted">39680 </span>
                            </span>
                          </div>
                          <br><br>

                        </div> --}}

                      {{-- </div>
                    </div><!-- advertisement --> --}}
                  </div><!-- row -->
                </div><!-- main-content -->
              </div><!-- container -->
            </section><!-- main -->
@endsection
@section('my_script')
  <script type="text/javascript">
  $('#next_btn').click(function () {
  $('#bit_exchange_box2').hide(1000);
  $('.bit_exchange_box3').show();
  // $('#bit_exchange_box3').addClass('display_bl');

  });
  </script>
@endsection
