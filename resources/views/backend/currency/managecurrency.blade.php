@extends('backend.adminmaster')
@section('contents')
  <div class="row">
                                   <div class="col-md-8 col-md-offset-2">

                                       <div class="panel">
                                           <div class="panel-heading">
                                               <div class="panel-title">
                                                   <h5>Zero Configuration</h5>
                                               </div>
                                           </div>
                                           <div class="panel-body p-20">
                                             <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                     <thead>
                                                         <tr>
                                                             <th>Name</th>
                                                             <th>Position</th>
                                                             <th>Office</th>
                                                             <th>Age</th>
                                                             <th>Start date</th>
                                                             <th>Salary</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td>Michael Bruce</td>
                                                             <td>Javascript Developer</td>
                                                             <td>Singapore</td>
                                                             <td>29</td>
                                                             <td>2011/06/27</td>
                                                             <td>$183,000</td>
                                                         </tr>
                                                         <tr>
                                                             <td>Donna Snider</td>
                                                             <td>Customer Support</td>
                                                             <td>New York</td>
                                                             <td>27</td>
                                                             <td>2011/01/25</td>
                                                             <td>$112,000</td>
                                                         </tr>
                                                     </tbody>

                                                 </table>
                                            </div>
                                            </div>
                                            </div>
                                            <script>
                                              $(document).ready(function($) {
      $('#currency_table').DataTable();
  } );
                                           </script>
                                    @endsection
