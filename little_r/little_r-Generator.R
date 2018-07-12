# Little_r Generator v1.0.9

library(jsonlite)
library(wrfR)

key <- "&key=Wkn339SbwwCugskbbofqRYrW9gI06ivoZRjer5NCTWexuxT6x0p9iHDSCEnn"
url <- "http://wimea.mak.ac.ug/weatherapi/api/manualSpecificDateTimeStationObservations?date=2017-07-29&station=Kampala"
request <- fromJSON(paste0(url,key))
#message(paste0(url,key))
#request <- fromJSON('{"status":true,"data":[{"Date":"2017-07-29","TIME":"0500Z","TotalAmountOfAllClouds":null,"TotalAm$
# capture longitude and latitude. convert to 2 decimals
xlat <- request$data$Latitude
xlon <- request$data$Longitude

# little r headers
string1 <- paste(request$data$StationName, request$data$StationNumber)
string2 <- '          '
string3 <- 'FM-96 AIREP'
string4 <- '          '

# Validate time
todaysDate <- Sys.Date()
if(request$data$TIME == ""){
  mdate <- paste0(gsub('-','',todaysDate),'00')
}

# Validate wind speed (m/s)
# convert knot to m/s
if(is.na(request$data$Wind_Speed)){
  spd = "00"
} else {
  speed = substr(request$data$Wind_Speed,1, nchar(request$data$Wind_Speed)-2)
  spd = round(as.numeric(speed)*0.514444, 2)
}

# Calculate dew point
dryBulb = request$data$Dry_Bulb
wetBulb = request$data$Wet_Bulb

getDewPoint <- function(dryBulbReading, wetBulbReading){
  T = dryBulbReading
  W = wetBulbReading

  Es = 6.108 * (exp((17.27 * T) / (237.3 + T)))

  Ew = 6.108 * (exp((17.27 * W) / (237.3 + W)))
  BarometricPressure = 101.3 * ((( 293 - ( 0.0065 * request$data$Altitude )) / 293 ) ^ 5.26 )
  E = Ew - (0.00066 * (1 + 0.00115 * W) * (T - W) * BarometricPressure)

 B = (log1p(E / 6.108)) / 17.27

  Dewpoint = (237.3 * B) / (1 - B)

  return(round(Dewpoint,2))
}

# Terrain elevation/Altitude
ter <- request$data$Altitude

# Number of observations to record
kx <- 1

# Sea level pressure Pa)
slp <- -88.

# Pressures vector (Pa)
#convert to pascals
# p = p*100.
p <- -88.

# Heights vector(m)
z <- -88.

# Temperatures vector (K) convert temperature to kelvin
t <- 44. # cant find temperature
if(is.na(request$data$Dry_Bulb)){
  t <- -88.
} else {
  t <- request$data$Dry_Bulb
  t = t+273.15
}

# Calcalute Dew point from temperature and relative humidity reading
# Dew point (K)
if(is.na(dryBulb) && is.na(wetBulb)){
    td <- -88.
  } else {
    td <- getDewPoint(dryBulb,wetBulb)
}

# td = td+273.15
if(is.na(request$data$Wind_Direction)){
  dir <- -88.
} else {
  dir <- request$data$Wind_Direction
}



fileRename = paste0(request$data$StationName,"_",request$data$StationNumber,"_",mdate)
filename <- paste0('~/CreateObs/ObservationData/',fileRename,'.obs')

write_obs(xlat, xlon, string1, string2 = NULL , string3, string4 = NULL, ter, kx, mdate, slp, p, z, t, td, spd, dir, filename)
