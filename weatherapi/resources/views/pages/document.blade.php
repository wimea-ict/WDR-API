@extends('layouts.app')

@section('content')
<div class="jumbotron"> 
    <div class="container"> 
      
       </p> 
       <div class="row">         
             <div class="col-md-5"  style="background-color: #fff;"> 
                <br><h2>Documentation</h2> 
                <p style="font-size:12px"> 
                    
            The Weather data API is an API that provides easy programmatic access to the local weather data 
            obtained from the local weather stations in Uganda.
            </p> 
       
        
        
                <p><h2>Follow these steps to use this API</h2>  
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Step one</a>
                            </h4>
                          </div>
                          <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body"style="font-size:12px" >Go to the home page and click the button "Register for API key", this 
                                will display a form. Fill in the form and then click register. if all creditials are fine, 
                                you will be redirected to user accounts page. 
                                </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Step two</a>
                            </h4>
                          </div>
                          <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body" style="font-size:12px">This page consists of the Username and the API key, to 
                                use the API key, click the "copy" button to copy the API and paste it the your application
                                that you are building.</div>
                          </div>
                        </div>  
                      </div> 
                </p> 
                  
                <h2>Testing the weatherdata API</h2>
                <p style="font-size:12px"> 
                  To test the API, copy the url together with the API Key and paste them in an API 
                  testing application such as POSTMAN
               </p>

               
                      <br><h3>Sample weather data</h3>

                      <a href="#demo" class="btn btn-info" data-toggle="collapse">Parameters</a></br>
                                 <div id="demo" class="collapse">
                                    <table class="table table-condensed">
                                        <thead>
                                          <tr>
                                            <th>Parameter</th>
                                            <th>Type & Units</th>
                                            <th>Description</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>station_id</td>
                                            <td></td>
                                            <td>The internal ID of the station which is generated during creation</td>
                                          </tr><tr>
                                              <td>temperature</td>
                                              <td>Celsius</td>
                                              <td>The air temperature</td>
                                            </tr>
                                            <tr>
                                                <td>wind_speed</td>
                                                <td>m/s</td>
                                                <td>Wind speed</td>
                                            </tr>
                                            <tr>
                                                <td>pressure</td>
                                                <td>Hectopascal</td>
                                                <td>	Atmospheric pressure</td>                                            
                                            </tr>
    
                                          <tr>
                                            <td>humidity</td>
                                            <td>%</td>
                                            <td>Relative air humidity</td>
                                          </tr>
                                          <tr>
                                            <td>dew_point</td>
                                            <td>Celsius</td>
                                            <td>Dew point</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                 </div>
               <textarea font-size="23px" rows="20" cols="70" style="color:blue; font-size:10px" disabled  >
                                {
                                  "Kampala": {
                                    "Date": "2017-05-01",
                                    "id": "1",
                                    "Station": "1",
                                    "TIME": "0500Z",
                                    "TotalAmountOfAllClouds": "34",
                                    "TotalAmountOfLowClouds": "34",
                                    "TypeOfLowClouds1": "4",
                                    "OktasOfLowClouds1": "3",
                                    "HeightOfLowClouds1": "1600",
                                    "CLCODEOfLowClouds1": "SC",
                                    "TypeOfLowClouds2": "0",
                                    "OktasOfLowClouds2": "0",
                                    "HeightOfLowClouds2": "0",
                                    "CLCODEOfLowClouds2": "",
                                    "TypeOfLowClouds3": "0",
                                    "OktasOfLowClouds3": "0",
                                    "HeightOfLowClouds3": "0",
                                    "CLCODEOfLowClouds3": "",
                                    "TypeOfMediumClouds1": "3",
                                    "OktasOfMediumClouds1": "5",
                                    "HeightOfMediumClouds1": "900",
                                    "CLCODEOfMediumClouds1": "AS",
                                    "TypeOfMediumClouds2": "0",
                                    "OktasOfMediumClouds2": "0",
                                    "HeightOfMediumClouds2": "0",
                                    "CLCODEOfMediumClouds2": "",
                                    "TypeOfMediumClouds3": "0",
                                    "OktasOfMediumClouds3": "0",
                                    "HeightOfMediumClouds3": "0",
                                    "CLCODEOfMediumClouds3": "",
                                    "TypeOfHighClouds1": "0",
                                    "OktasOfHighClouds1": "0",
                                    "HeightOfHighClouds1": "0",
                                    "CLCODEOfHighClouds1": "",
                                    "TypeOfHighClouds2": "0",
                                    "OktasOfHighClouds2": "0",
                                    "HeightOfHighClouds2": "0",
                                    "CLCODEOfHighClouds2": "",
                                    "TypeOfHighClouds3": "0",
                                    "OktasOfHighClouds3": "0",
                                    "HeightOfHighClouds3": "0",
                                    "CLCODEOfHighClouds3": "",
                                    "CloudSearchLightReading": "34",
                                    "Rainfall": "34",
                                    "Dry_Bulb": "19.4",
                                    "Wet_Bulb": "18.5",
                                    "Max_Read": "0",
                                    "Max_Reset": "0",
                                    "Min_Read": "0",
                                    "Min_Reset": "0",
                                    "Piche_Read": "0",
                                    "Piche_Reset": "0",
                                    "TimeMarksThermo": "0",
                                    "TimeMarksHygro": "0",
                                    "TimeMarksRainRec": "0",
                                    "Present_Weather": "FOG",
                                    "Present_WeatherCode": null,
                                    "Past_Weather": null,
                                    "Visibility": "4000",
                                    "Wind_Direction": "0",
                                    "Wind_Speed": "000KT",
                                    "Gusting": "0",
                                    "AttdThermo": "0",
                                    "PrAsRead": "0",
                                    "Correction": "0",
                                    "CLP": "",
                                    "MSLPr": "0",
                                    "TimeMarksBarograph": "0",
                                    "TimeMarksAnemograph": "0",
                                    "OtherTMarks": "",
                                    "Remarks": "",
                                    "SubmittedBy": "Admin Admin",
                                    "Approved": "0",
                                    "creation_date": "0000-00-00 00:00:00",
                                    "SoilMoisture": "2017-05-26",
                                    "SoilTemperature": null,
                                    "sunduration": null,
                                    "trend": "",
                                    "windrun": null,
                                    "speciOrMetar": null,
                                    "UnitOfWindSpeed": null,
                                    "IndOrOmissionOfPrecipitation": null,
                                    "TypeOfStation_Present_Past_Weather": null,
                                    "HeightOfLowestCloud": null,
                                    "StandardIsobaricSurface": null,
                                    "GPM": null,
                                    "DurationOfPeriodOfPrecipitation": null,
                                    "GrassMinTemp": null,
                                    "CI_OfPrecipitation": null,
                                    "BE_OfPrecipitation": null,
                                    "IndicatorOfTypeOfIntrumentation": null,
                                    "SignOfPressureChange": null,
                                    "Supp_Info": null,
                                    "VapourPressure": null,
                                    "T_H_Graph": null,
                                    "DeviceType": "web",
                                    "station_id": "1",
                                    "StationName": "Kampala",
                                    "StationNumber": "63680",
                                    "StationRegNumber": "8932022",
                                    "Location": "Kampala",
                                    "Indicator": "HUKA",
                                    "StationRegion": "Central",
                                    "Country": "Uganda",
                                    "Latitude": "0.3372744",
                                    "Longitude": "32.5674789",
                                    "Altitude": "3000",
                                    "StationStatus": "Active",
                                    "StationType": "Synoptic",
                                    "Opened": "2017-09-02",
                                    "Closed": "2017-09-02",
                                    "CreationDate": "2015-07-07 05:13:13"
                                  }
                                
                              </textarea>

                              
            </div> 
            
                 <div class="col-md-7" style="background-color: #fff;"> 
                 <p style="font-size:10px">
                                <h2>Weather Data API "urls" for retrieving weather data from station</h2>
                              </p>
                 <ol style="font-size:10px">
                                  <li>
                                  <p style="font-size:12px">
                              <a href="http://wimea.mak.ac.ug/weatherapi/api/manualCurrentObservations/?key=">
                              http://wimea.mak.ac.ug/weatherapi/api/manualCurrentObservations/?key=....</a></p>
                              <p style="font-size:12px">                             
                              This url together with the API key provides the current weather data from the manual weather station.                             
                              </p>
                                  </li>
                                  <li>
                                  <p style="font-size:12px">
                              <a href="http://wimea.mak.ac.ug/weatherapi/api/awsCurrentObservations/?key=">
                                http://wimea.mak.ac.ug/weatherapi/api/awsCurrentObservations/?key=....</a></p>
                                <p style="font-size:12px">                             
                                  This url together with the API key provides the current weather data from the Automatic weather station.                             
                                </p>
                                  </li>
                                  <li>
                                  <p style="font-size:12px">
                              <a href="http://wimea.mak.ac.ug/weatherapi/api/specificyDate/?key=&date=">
                                http://wimea.mak.ac.ug/weatherapi/api/specificyDate/?key=....&date=....</a></p>
                                  <p style="font-size:12px">                             
                                    This url together with the API key provides weather data based on the specified data by the user.                             
                                  </p>
                                  </li>
                                  <li>
                                  <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/specificyDate/?key=&date=">
                                    http://wimea.mak.ac.ug/weatherapi/api/specificyDateRange/?key=..&datefrom=...&dateto=......</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides weather data for a specified data range.                              
                                      </p> 
                                  </li>
                                  <li>    <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/awsSpecificDateTimeStationObservations/?key=&date=&time">
                                    http://wimea.mak.ac.ug/weatherapi/api/awsSpecificDateTimeStationObservations/?key=..&date=...&time=..</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides weather data from automatic stations for a specified data and time.                              
                                      </p> </li>

                                  <li>     <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/manualSpecificDateTimeStationObservations/?key=&date=&time">
                                    http://wimea.mak.ac.ug/weatherapi/api/manualSpecificDateTimeStationObservations/?key=..&date=...&time=..</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides weather data from manual stations for a specified data and time.                              
                                      </p></li>
                                  <li>       <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/dataforrecent30days/?key=">
                                    http://wimea.mak.ac.ug/weatherapi/api/dataforrecent30days/?key=...</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides weather data for the most recent last 30 days.                              
                                      </p> </li>
                                  <li> <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/dataforrecent7days/?key=">
                                    http://wimea.mak.ac.ug/weatherapi/api/dataforrecent7days/?key=...</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides weather data for the most recent last 7 days.                              
                                      </p></li>
                                  <li>
                                  <p style="font-size:12px">
                                  <a href="http://wimea.mak.ac.ug/weatherapi/api/availableStations/?key=">
                                    http://wimea.mak.ac.ug/weatherapi/api/availableStations/?key=...</a></p>
                                      <p style="font-size:12px">                             
                                        This url together with the API key provides stations data for the available active stations in the Weather Data Repository system.                              
                                      </p>
                                  </li>
                                  
                 </ol>
                              

                              

                              

                              

                                               
                      
                                   

                                    

                                   

                                  

                                  
                                 
                              

                                
                              
                             
                           
                            
                          </p>                     
                 </div>               

             </div> 
      
    </div>
</div>

     
@endsection