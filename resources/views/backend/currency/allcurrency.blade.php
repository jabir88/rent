@extends('backend.adminmaster')
@section('contents')

                    <div class="main-page">
                        <div class="container-fluid">

                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
            							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            							<li class="active">Tables - DataTables</li>
            						</ul>
                                </div>
                                <!-- /.col-md-6 -->
                                <div class="col-md-6 text-right">
                                    <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                                    <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
                                </div>
                                <!-- /.col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->

                        <section class="section">
                            <div class="container-fluid">


                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">

                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Zero Configuration</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body p-20">

                                                <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Buying Rate</th>
                                                            <th>Selling Rate</th>
                                                            <th>Picture</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($currency as $currency_one)

                                                        <tr>
                                                            <td>{{ $currency_one->currency_name }}</td>
                                                            <td>{{ $currency_one->currency_buying_price }}</td>
                                                            <td>{{ $currency_one->currency_selling_price }}</td>
                                                            <td><img src="{!! asset('storage/'.$currency_one->currency_pic) !!}" height="40px" alt="{{$currency_one->currency_name}}" class="img-rounded center-block"></td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                </table>

                                                <div class="col-md-12 mt-15 src-code">
                                                    <pre class="language-html"><code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Position&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Tiger Nixon&lt;/td&gt;
            &lt;td&gt;System Architect&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;td&gt;Garrett Winters&lt;/td&gt;
            &lt;td&gt;Accountant&lt;/td&gt;
        &lt;/tr&gt;
        ...
    &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
    $(function($) {
        $('#example').DataTable();
    });
&lt;/script&gt;
                                                    </code></pre>
                                                </div>
                                                <!-- /.col-md-12 -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col-md-6 -->
@endsection
