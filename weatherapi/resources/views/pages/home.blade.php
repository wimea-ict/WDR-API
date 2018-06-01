@extends('layouts.app')
@section('content')
<div class="jumbotron"> 
    <div class="container"> 
       <h1>WDR weather API</h1> 
       <p>Click the button below to get an API key</p> 
       <p><a href="{{ URL::to('register') }}"><button type="button" class="btn btn-info btn-lg"  data-target="#signforkey">Register for API Key</button></a>
       </p> 

       <div class="row"> 
        
             <div class="col-md-6"  style="background-color: #fff;"> 
                <p><h2>Current weather data</h2>  
                    <ul>
                        <li>Access weather data from the current 12 synaptic weather stations</li>
                        <li>Data is available in JSON Format</li>
                        <li>Data is available for free and other paid acounts</li>                        
                    </ul>
                </p> 
        
                <p><h2>7 DAYS WEATHER DATA</h2>  
                    <ul>
                        <li>7 days weather data shall be available for every weather station</li>
                        <li>7 days weather is available in JSON Format</li>
                        <li>And also available for free and other paid acounts</li>                        
                    </ul>  
                </p> 
            </div> 
            
                 <div class="col-md-6" style="background-color: #fff;"> 

                    <p><h2>30 DAYS WEATHER DATA</h2>  
                        <ul>
                            <li>30 days weather data shall be available for every weather station</li>
                            <li>30 days weather is available in JSON Format</li>
                            <li>And also available for free and other paid acounts</li>                        
                        </ul> 
                    </p>
                                                
                 </div>               

             </div> 
      
    </div>
</div>
@endsection


