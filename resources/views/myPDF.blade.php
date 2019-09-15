<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <style>
                    /** Define the margins of your page **/
                    @page {
                        margin: 100px 20px;
                    }
                    body {
                            margin-top: 1cm;
                            margin-left: 0cm;
                            margin-right: 0cm;
                            margin-bottom: 0cm;
                        }
                    header {
                        position: fixed;
                        top: -110px;
                        left: 0px;
                        right: 0px;
                        height: 40px;
        
                        /** Extra personal styles **/
                        background-color: transparent;
                        color: black;
                        text-align: center;
                        line-height: 2px;
                    }
                   /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: -2cm; 
                left: 0cm; 
                right: 0cm;
                height: 1cm;

                /** Extra personal styles **/
                background-color: transparent;
                color: black;
                text-align: center;
                line-height: 1cm;
            }
        
                    
                </style>
 
    </head>
    <body>
            <header>
                    <h5 style="font-color:black;text-align:center;"><img src="{{URL::asset('assets/img/bdj.png')}}" style="height:60px;"  alt="Bangladesh Govt."/></h5>
                    <h4>Bangladesh Jail </h4><span id="time">Date: <?php echo $mytime->toDateTimeString();?></span>
                </header>
                <footer>
                        Confidentail &copy; Supreme Court of Bangladesh
                    </footer>
                
                <main>
                        <hr>
                      <!--   Content goes here -->
                      <table class="table-bordered" id="countryWiseData" style="width:100%">
                        
                            <thead>
                            <tr>
                                <th>Prison Name</th>
                                <th>Total Appeals</th>
                                <th>District Name</th>
                                <th>Division Name</th>
                            </tr>
                            </thead>
                        
                        <tbody>
                                @foreach($queryAll as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->TotalAppeals }}</td>
                                <td>{{ $row->districtName }}</td>
                                <td>{{ $row->divisionName }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                                <tr>
                                    <th colspan="1" style="text-align:right">Grand Total:</th>
                                    <th></th>
                                </tr>
                            </tfoot> --}}
                      </table>
                      <table class="table-bordered" id="countryWiseData" style="width:100%">
                        
                            <thead>
                            <tr>
                                <th>Prison Name</th>
                                <th>Total Appeals</th>
                                <th>District Name</th>
                                <th>Division Name</th>
                            </tr>
                            </thead>
                        
                        <tbody>
                                @foreach($queryAll as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->TotalAppeals }}</td>
                                <td>{{ $row->districtName }}</td>
                                <td>{{ $row->divisionName }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                                <tr>
                                    <th colspan="1" style="text-align:right">Grand Total:</th>
                                    <th></th>
                                </tr>
                            </tfoot> --}}
                      </table>
                  
            </main>
    </body>
</html>
