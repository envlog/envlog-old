// API call
let queryUrl = "https://api.openweathermap.org/data/2.5/onecall?";
let lat = "lat=37.5023612&";
let lon = "lon=15.0873718&";
let apiOptions = "units=metric&exclude=minutely,alerts&lang=it&";
let apiKey = "appid=832da03fd8d980d2ab25cb2735a3f8d2";
let file = queryUrl + lat + lon + apiOptions + apiKey;

fetch(file)
  .then((response) => response.json())
  .then((data) => {
    // Weather main data
    let main = data.current.weather[0].main;
    let description = data.current.weather[0].description;
    let temp = Math.round(data.current.temp);
    let pressure = data.current.pressure;
    let humidity = data.current.humidity;
    let name = "Catania";

    document.getElementById("wrapper-description").innerHTML = description;
    document.getElementById("wrapper-temp").innerHTML = temp + "°C";
    document.getElementById("wrapper-pressure").innerHTML = pressure;
    document.getElementById("wrapper-humidity").innerHTML = humidity + "%";
    document.getElementById("wrapper-name").innerHTML = name;



    // Weather daily data
    let tomorrowTemp = Math.round(data.daily[0].temp.day);
    let dATTemp = Math.round(data.daily[1].temp.day);
    let tomorrowMain = data.daily[0].weather[0].main;
    let dATTempMain = data.daily[1].weather[0].main;

    document.getElementById("wrapper-forecast-temp-today").innerHTML =
      temp + "°";
    document.getElementById("wrapper-forecast-temp-tomorrow").innerHTML =
      tomorrowTemp + "°";
    document.getElementById("wrapper-forecast-temp-dAT").innerHTML =
      dATTemp + "°";

    // Icons
    let iconBaseUrl = "http://openweathermap.org/img/wn/";
    let iconFormat = ".png";

    // Today
    let iconCodeToday = data.current.weather[0].icon;
    let iconFullyUrlToday = iconBaseUrl + iconCodeToday + iconFormat;
    document.getElementById("wrapper-icon-today").src = iconFullyUrlToday;

    // Tomorrow
    let iconCodeTomorrow = data.daily[0].weather[0].icon;
    let iconFullyUrlTomorrow = iconBaseUrl + iconCodeTomorrow + iconFormat;
    document.getElementById(
      "wrapper-icon-tomorrow"
    ).src = iconFullyUrlTomorrow;

    // Day after tomorrow
    let iconCodeDAT = data.daily[1].weather[0].icon;
    let iconFullyUrlDAT = iconBaseUrl + iconCodeDAT + iconFormat;
    document.getElementById("wrapper-icon-dAT").src = iconFullyUrlDAT;

   
    // Backgrounds
    switch (main) {
      case "Snow":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/snow.gif')";
        break;
      case "Clouds":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/clouds.gif')";
        break;
      case "Fog":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/fog.gif')";
        break;
      case "Rain":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/rain.gif')";
        break;
      case "Clear":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/clear.gif')";
        break;
      case "Thunderstorm":
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/thunderstorm.gif')";
        break;
      default:
        document.getElementById("wrapper-bg").style.backgroundImage =
          "url('https://mdbgo.io/ascensus/mdb-advanced/img/clear.gif')";
        break;
    }
  });