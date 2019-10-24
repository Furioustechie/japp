<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>

            {{-- /* <style>
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
        
                    
                </style> --}}
 <style>
 @page {
	header: page-header;
	footer: page-footer;
}

 </style>
 <style>
        #customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #ddd;}
        
        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #4CAF50;
          color: white;
        }
        </style>
    </head>
    <body>
            <htmlpageheader name="page-header">
                    <h1 style="font-color:black;text-align:center;"><img src="{{URL::asset('assets/img/bdj.png')}}" style="height:60px;"  alt="Bangladesh Govt."/></h1>
                    <h2 style="font-family:SolaimanLipi;text-align:center;">{{ __('labels.BDPrison') }}</h2>
                    <p id="time" style="text-align:center;margin-bottom:0px;">Print On: <?php echo date('j F, Y, g:i A');?></p>
                    <hr>
                </htmlpageheader>
                
                <htmlpagefooter name="page-footer">
                        
                         <table style="width:100%">
                           <tr>
                               <td>Confidentail &copy; Supreme Court of Bangladesh</td>
                               <td></td>
                               <td style="text-align: right;">Page {PAGENO} of {nb}</td>
                           </tr>

                         </table>

                </htmlpagefooter>
           
                
               
                      
                      <table id="customers">
                        
                            <thead>
                            <tr>
                                <th style="text-align:left;">Prison Name</th>
                                <th style="text-align: center;">Total Appeals</th>
                                <th>District Name</th>
                                <th>Division Name</th>
                            </tr>
                            </thead>
                        
                        <tbody>
                                @foreach($queryAll as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td style="text-align:center;">{{ $row->TotalAppeals }}</td>
                                <td>{{ $row->districtName }}</td>
                                <td>{{ $row->divisionName }}</td>
                            </tr>
                            @endforeach
                            {{-- @foreach($queryAll as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td style="text-align:center;">{{ $row->TotalAppeals }}</td>
                                <td>{{ $row->districtName }}</td>
                                <td>{{ $row->divisionName }}</td>
                            </tr>
                            @endforeach --}}
                            
                        </tbody>
                       
                      </table>
                     
                      
  
    </body>
</html>
