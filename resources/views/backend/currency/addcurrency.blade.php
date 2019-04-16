@extends('backend.adminmaster')
@section('contents')


  <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">
                    <h5>Add Currency</h5>
                    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif
                </div>

            </div>

            <div class="panel-body" >

                <form class="p-20" action="{!! route('currency.submit') !!}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h5 class="underline mt-n">Currency Info</h5>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                        		<label for="currency_name">Currency Name</label>
                        		<input type="text" class="form-control" name="currency_name" id="currency_name" placeholder="Enter Your Currency Name">
                            @if ($errors->has('currency_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('currency_name') }}</strong>
                                </span>
                            @endif
                        	</div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>


                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="currency_buying_price">Currency Buying Price</label>
                          <input type="number" class="form-control" id="currency_buying_price" name="currency_buying_price" placeholder="Enter Currency Buying Price">
                          @if ($errors->has('currency_buying_price'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('currency_buying_price') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    	<!-- /.col-md-6 -->

                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="currency_selling_price">Currency Selling Price</label>
                          <input type="number" class="form-control" id="currency_selling_price" name="currency_selling_price" placeholder="Enter Currency Selling Price">
                          @if ($errors->has('currency_selling_price'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('currency_selling_price') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    	<!-- /.col-md-6 -->
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="currency_pic">Currency Picture</label>
                          <input type="file" name="currency_pic" class="form-control" id="currency_pic" >
                          @if ($errors->has('currency_pic'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('currency_pic') }}</strong>
                              </span>
                          @endif
                        </div>
                      </div>
                    	<!-- /.col-md-6 -->


                    </div>


                        <div class="col-md-12">
                            <div class="btn-group pull-right mt-10" role="group">
                                <button type="reset" class="btn btn-gray btn-wide"><i class="fa fa-times"></i>Cancel</button>
                                <button type="submit" class="btn bg-black btn-wide"><i class="fa fa-arrow-right"></i>Submit</button>
                            </div>
                            <!-- /.btn-group -->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>

                </form>



@endsection
