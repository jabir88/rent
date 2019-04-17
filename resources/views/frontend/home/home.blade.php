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
                      {{-- <img src="{{asset('/frontend/images/Neteller.jpg') }}" > --}}

                        <div class="row" id="bit_exchange_box">
                          <div id="bit_exchange_results"></div>
                          @if (session('error'))
                              <div class="alert alert-danger">
                                  {{ session('error') }}
                              </div>
                          @endif
                          @if (session('success'))
                              <div class="alert alert-success" style="text-align : center;">
                                  {{ session('success') }}
                                  one
                              </div>
                          @endif


                          <form id="bit_exchange_form" method="post" action=" {!! route('generate') !!} ">
                            @csrf
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-3 hidden-xs hidden-sm">
                                  <div style="margin-top:50px;">
                                    <img src="{!! asset('frontend/images/Skrill.jpg') !!}" id="image_send" width="72px" height="72px" class="img-circle img-bordered">
                                  </div>
                                </div>
                                <div class="col-md-9">
                                  <h3><i class="fa fa-arrow-down"></i> Send </h3>
                                  <div class="form-group">

                                    {{-- <select onchange="$('#imageToSwap').attr('src', this.options[this.selectedIndex].value);">
                                        <option value="http://cdns2.freepik.com/free-photo/facebook-logo_318-49940.jpg" selected>Facebook</option>
                                        <option value="http://cdns2.freepik.com/free-photo/twitter-logo_318-40459.jpg">Twitter</option>
                                        <option value="http://cdns2.freepik.com/free-photo/instagram-social-network-logo-of-photo-camera_318-64651.jpg">Instagram</option>
                                    </select>

                                    <br><br>

                                    <img id="imageToSwap" class="profile" src="http://cdns2.freepik.com/free-photo/facebook-logo_318-49940.jpg"> --}}

                                    <select class="form-control form_style_1 input-lg bwtl_sent" id="bwtl" name="bit_gateway_send" >


                                  @foreach ($currency as $currency)
                                            <option value="{{ $currency->currency_name.'||#||'. $currency->currency_pic.'||#||'. $currency->currency_buying_price}}"
                                              @if ($currency->currency_name == "Skrill")
                                              {{ 'selected' }}
                                            @endif >
                                          {{ $currency->currency_name }}
                                        </option>
                                              @endforeach
                                    </select>
                                  </div>
                                  @php
// $a = asset('/frontend/images/ ');
                                  @endphp
<script type="text/javascript">
var my_val =$("#bwtl").val();
// console.log(one);
  $("#bwtl").on('change',function () {
    var one = '{{  asset('storage/') }}';

    var value = $(this).val();
    var value = $(this).val();
    var all = value.split('||#||');
    var image1 =all[1];
    var image1last = one+'/'+all[1];
    $("#image_send").attr('src', image1last)
    console.log(image1last);
  });
</script>


                                  <div class="form-group">
                                    <input type="text" class="form-control form_style_1 input-lg" id="bit_amount_send" name="bit_amount_send" value="0" >
                                    @if ($errors->has('bit_amount_send'))
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bit_amount_send') }}</strong>
                                      </span>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="row">
                                <div class="col-md-9">
                                  <h3><i class="fa fa-arrow-up"></i> Receive </h3>
                                  <div class="form-group">
                                    <select class="form-control form_style_1 input-lg bwtl_recive" id="bwt2" name="bit_gateway_receive" >
                                      @foreach ($currency1 as $currency1)
                                        <option value="{{ $currency1->currency_name .'||#||'. $currency->currency_pic.'||#||'. $currency->currency_selling_price }}"
                                          @if ($currency1->currency_name == "Neteller")
                                          {{ 'selected' }}
                                        @endif >
                                        {{ $currency1->currency_name }} </option>
                                      @endforeach
                                    </select>
                                    <script type="text/javascript">
                                    var my_val =$("#bwt2").val();
                                    console.log(my_val);
                                      $("#bwt2").on('change',function () {

                                        var value22 = $(this).val();
                                        var all2 = value22.split('||#||');
                                        console.log(all2);
                                      });
                                    </script>
                                    {{-- <script type="text/javascript">

                                    $(document).ready(function(){
                                        $("select.bwtl_recive").change(function(){
                                          var selectedRecive = "Skrill";
                                            var selectedRecive= $(this).children("option:selected").val();
                                            alert("This is " + selectedRecive);
                                        });
                                    });
                                    </script> --}}
                                  </div>
                                  <div class="form-group">
                                    <input type="text" style="opacity:0;" class="form-control form_style_1 input-lg" id="bit_amount_receive" name="bit_amount_receive" disabled value="0">
                                  </div>
                                  {{-- <div class="text text-muted" style="padding-bottom:10px;font-weight:bold;">Reserve: <span id="bit_reserve">-</span></div> --}}
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm">
                                  <div style="margin-top:50px;">
                                    <img src="assets/icons/Skrill.png" id="bit_image_receive" width="72px" height="72px" class="img-circle img-bordered">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">

                              <center>
                                <button type="submit"  style="padding-top : 10px ;" class="btn btn-primary btn-lg" onclick="bit_exchange_step_1();"><i class="fa fa-refresh"></i> Exchange/button>
                              </center>
                            </div>
                          </form>

                            @php
                            // echo "<pre>";
                            // print_r($full_ar);
                            // echo "</pre>";
                             @endphp


                        </div>
                      </div><!-- category-ad -->

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
  // var send_val = $('#bwt1').val();
  // alert(send_val);
  // var recive_val = $('#bwt2').val();
  </script>
@endsection
