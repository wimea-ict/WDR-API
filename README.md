# Weather Data API
The Weather Data API provides both current weather data as well as previously recorded weather data. It can be accessed here. It entails guidelines on how to obtain the API key and use the API to access specific data as required by the user.

In addition to accessing weather data through the API, we developed two applications:-
- Weather Data Messaging application
- Little_r Generator

# Weather Data Messaging application
The Weather Data Messaging application is an admin panel that used to manage the recipients of  weather data updates. The recipients receive current weather data at 30 minute intervals. The Message Switching System in Entebbe will be included among the receipts as soon as the weather data has all the required parameters/values. The application transforms weather data from JSON format to Table Driven Code Forms(TDCF) before it is sent by email to the recipient.

# Little_r Generator
The Little_r Generator is an application that runs as a daemon, continuously creating little_r observations files for each day using current weather data. These files are publicly available here on a web portal. Weather forecasters can download and use them to improve their weather forecasts using data assimilation.
