//GPS LOCATION
function getGPS(callback) {
  var options = {
    timeout: 5000,
    maximumAge: 0
  };

  function success(pos) {
    var crd = pos.coords;
    console.log('Posizione GPS:');
    console.log(`Latitude : ${crd.latitude}`);
    console.log(`Longitude: ${crd.longitude}`);
    sessionStorage.setItem('lat', crd.latitude);
    sessionStorage.setItem('lon', crd.longitude);
    callback();
  }

  function error(err) {
    //console.warn(`ERROR(${err.code}): ${err.message}`);
    switch (err.code) {
      case err.PERMISSION_DENIED:
        console.warn("Accesso negato alla posizione da parte dell'utente");
        document.querySelector(".forecast").classList.add("masklock");
        document.getElementById("wrapper-name").innerHTML = "Concedi l'accesso alla posizione!";
        break;
      case err.POSITION_UNAVAILABLE:
        console.warn("Posizione non disponibile");
        break;
      case err.TIMEOUT:
        console.warn("Richiesta posizione in timeout");
        break;
      case err.UNKNOWN_ERROR:
        console.warn("Errore generico su GPS");
        break;
    }
  }

  return navigator.geolocation.getCurrentPosition(success, error, options);

}

function getLocation(callback) {

  if (navigator.geolocation) {

    function error(err) {
      //console.warn(`ERROR(${err.code}): ${err.message}`);
      switch (err.code) {
        case err.PERMISSION_DENIED:
          console.warn("Accesso negato alla posizione da parte dell'utente");
          document.querySelector("#weather .alert").classList.remove("d-none");
          document.querySelector("#weather .alert").innerHTML = "Accesso alla posizione negato.";
          document.querySelector("#weather .content").classList.add("d-none");
          break;
        case err.POSITION_UNAVAILABLE:
          document.querySelector("#weather .alert").classList.remove("d-none");
          document.querySelector("#weather .alert").innerHTML = "Posizione non disponibile. <a href='#!' onclick='forecast()'>Clicca per riprovare</a>";
          document.querySelector("#weather .content").classList.add("d-none");
          break;
        case err.TIMEOUT || err.UNKNOWN_ERROR:
          document.querySelector("#weather .alert").classList.remove("d-none");
          document.querySelector("#weather .alert").innerHTML = "Errore generico posizione GPS";
          document.querySelector("#weather .content").classList.add("d-none");
          console.warn("Errore generico GPS");
          break;
      }
    }

    //var lat_lng = navigator.geolocation.getCurrentPosition(function (position) {
    var lat_lng = navigator.geolocation.getCurrentPosition(function (position) {
      sessionStorage.setItem('lat', position.coords.latitude);
      sessionStorage.setItem('lon', position.coords.longitude);
      //alert("session scritta");

      document.querySelector("#weather .alert").classList.add("d-none");
      document.querySelector("#weather .content").classList.remove("d-none");


      var user_position = {};
      user_position.lat = position.coords.latitude;
      user_position.lng = position.coords.longitude;
      callback(user_position);
    }, error);
  } else {
    alert("Geolocation is not supported by this browser.");
  }
}

function setForecast(geolat, geolon) {

  // API call
  let forecastpath = "https://api.openweathermap.org/data/2.5/onecall?";

  let lat = geolat;
  let lon = geolon;

  //let lat = "lat=" + sessionStorage.getItem('lat') + "&";
  //let lon = "lon=" + sessionStorage.getItem('lon') + "&";

  let apiOptions = "&units=metric&exclude=minutely,alerts&lang=it&";
  let apiKey = "f630b86b58c4cd82f43f631bbffd5395";
  // OLD KEY: 832da03fd8d980d2ab25cb2735a3f8d2

  let forecastapi = forecastpath + "lat=" + lat + "&lon=" + lon + apiOptions + "appid=" + apiKey;

  //alert("api forecast: " + forecastapi);

  fetch(forecastapi)
    .then((response) => response.json())
    .then((data) => {
      // Weather main data
      let main = data.current.weather[0].main;
      let description = data.current.weather[0].description;
      let temp = Math.round(data.current.temp);
      let pressure = data.current.pressure;
      let humidity = data.current.humidity;
      let windspeed = data.current.wind_speed;

      //let name = "Caltagirone";


      geotocity(lat, lon);


      document.getElementById("wrapper-description").innerHTML = description;
      document.getElementById("wrapper-temp").innerHTML = temp + "°C";
      document.getElementById("wrapper-pressure").innerHTML = pressure;
      document.getElementById("wrapper-humidity").innerHTML = humidity + "%";
      document.getElementById("wrapper-name").innerHTML = name;
      document.getElementById("wrapper-windspeed").innerHTML = windspeed;



      // Weather daily data
      let tomorrowTemp = Math.round(data.daily[0].temp.day);
      let dATTemp = Math.round(data.daily[1].temp.day);
      let tomorrowMain = data.daily[0].weather[0].main;
      let dATTempMain = data.daily[1].weather[0].main;

      console.log(tomorrowMain);

      document.getElementById("wrapper-forecast-temp-today").innerHTML = temp + "°";
      document.getElementById("wrapper-forecast-temp-tomorrow").innerHTML = tomorrowTemp + "°";
      document.getElementById("wrapper-forecast-temp-dAT").innerHTML = dATTemp + "°";

      // Icone
      let iconBaseUrl = "https://openweathermap.org/img/wn/";
      let iconFormat = ".png";

      // Oggi
      let iconCodeToday = data.current.weather[0].icon;
      let iconFullyUrlToday = iconBaseUrl + iconCodeToday + iconFormat;
      document.getElementById("wrapper-icon-today").src = iconFullyUrlToday;

      // Domani
      let iconCodeTomorrow = data.daily[0].weather[0].icon;
      let iconFullyUrlTomorrow = iconBaseUrl + iconCodeTomorrow + iconFormat;
      document.getElementById("wrapper-icon-tomorrow").src = iconFullyUrlTomorrow;

      // Dopodomani
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
}

function forecast() {

  if (!sessionStorage.getItem('lat')) {
    getLocation(function (lat_lng) {
      console.log(lat_lng);
      let lat = sessionStorage.getItem('lat');
      let lon = sessionStorage.getItem('lon');
      //alert("getloc foo from session: " + lat + " " + lon);

      setForecast(lat, lon);


    });
  } else {
    //alert("ho trovato la session gia scritta");
    let lat = sessionStorage.getItem('lat');
    let lon = sessionStorage.getItem('lon');

    setForecast(lat, lon);
  }

}

/**
function forecast() {

  getLocation(function (lat_lng) {
    console.log(lat_lng);
    var lat = "lat=" + sessionStorage.getItem('lat') + "&";
    let lon = "lon=" + sessionStorage.getItem('lon') + "&";
    alert("gep foo: " + lat + " " + lon);
  });

  // API call
  let forecastpath = "https://api.openweathermap.org/data/2.5/onecall?";
  let reversegeopath = "http://api.openweathermap.org/geo/1.0/reverse?";

  let lat = "lat=" + sessionStorage.getItem('lat') + "&";
  let lon = "lon=" + sessionStorage.getItem('lon') + "&";

  let apiOptions = "units=metric&exclude=minutely,alerts&lang=it&";
  let apiKey = "appid=f630b86b58c4cd82f43f631bbffd5395";
  // OLD KEY: 832da03fd8d980d2ab25cb2735a3f8d2

  let forecastapi = forecastpath + lat + lon + apiOptions + apiKey;
  let reversegeoapi = reversegeopath + lat + lon + 'limit=1&' + apiKey;
  alert("api: " + reversegeoapi);


  fetch(forecastapi)
    .then((response) => response.json())
    .then((data) => {
      // Weather main data
      let main = data.current.weather[0].main;
      console.log(main);
      let description = data.current.weather[0].description;
      let temp = Math.round(data.current.temp);
      let pressure = data.current.pressure;
      let humidity = data.current.humidity;

      fetch(reversegeoapi)
        .then((res) => res.json())
        .then((data) => {
          const name = data.locals_name;

          sessionStorage.setItem('cityName', name);
        });


      let name = sessionStorage.getItem('cityName');

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

      console.log(tomorrowMain);

      document.getElementById("wrapper-forecast-temp-today").innerHTML = temp + "°";
      document.getElementById("wrapper-forecast-temp-tomorrow").innerHTML = tomorrowTemp + "°";
      document.getElementById("wrapper-forecast-temp-dAT").innerHTML = dATTemp + "°";

      // Icone
      let iconBaseUrl = "http://openweathermap.org/img/wn/";
      let iconFormat = ".png";

      // Oggi
      let iconCodeToday = data.current.weather[0].icon;
      let iconFullyUrlToday = iconBaseUrl + iconCodeToday + iconFormat;
      document.getElementById("wrapper-icon-today").src = iconFullyUrlToday;

      // Domani
      let iconCodeTomorrow = data.daily[0].weather[0].icon;
      let iconFullyUrlTomorrow = iconBaseUrl + iconCodeTomorrow + iconFormat;
      document.getElementById("wrapper-icon-tomorrow").src = iconFullyUrlTomorrow;

      // Dopodomani
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

}

*/


function apionmodal() {
  const myModalEl = document.getElementById('detailModal')
  myModalEl.addEventListener('show.mdb.modal', (event) => {


    console.log(event.relatedTarget.dataset.uid);
    const recipient = button.getAttribute('data-mdb-whatever')

    try {
      const response = fetch('https://api.envlog.mitello.xyz/sensors/' + event.relatedTarget.dataset.uid + '/' + event.relatedTarget.dataset.type, {
        method: "GET",
        headers: {
          Accept: "application/json, text/plain",
          "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"
        }
      });
      const json = response.json();
      if (json.errors) {
        // Blocco gestione errori
        console.log(json.errors);
      } else {
        // Blocco per HTTP 200 (richiesta andata a buon fine)
        console.log(json);
        
      }
    } catch (fetchError) {
      console.log(fetchError);
    }
    return false;





  })
}





document.addEventListener("DOMContentLoaded", function () {
  forecast();
  //geotocity()

  apionmodal();
});



