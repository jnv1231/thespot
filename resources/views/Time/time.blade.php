@extends('layouts.app')

@section('content')
<div class="row-content-center">
    
    <div class="col-md-12">
        <div class="card">
            <div id="time"> 
                <script type="text/javascript"> 
                function display_c(){
                var refresh=1000; // Refresh rate in milli seconds
                mytime=setTimeout('display_ct()',refresh)
                }
                
                function display_ct() {
                var x = new Date()
                document.getElementById('ct').innerHTML = x;
                display_c();
                 }
                </script>
                </head>
                
                <body onload=display_ct();>
                <span id='ct' ></span></div>
           
            <div class="card-body">

                    @csrf
                    <div class="col-md-5">
                        <div class="form-group">
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                  </tr>
                                </tbody>
                              </table>
                            <button action="{{route('time')}}">Time In</button>
                            <button action="{{route('time')}}">Time Out</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection