
//GET AUTH DATA
window.addEventListener('load', function () {

    var element = document.querySelector('#avatar .nav_name span');
    if (localStorage.getItem("auth-displayName")) {
        document.querySelector('#avatar img.nav_icon').src = localStorage.getItem("auth-photoURL");
        document.querySelector('#avatar .nav_name span').textContent = localStorage.getItem("auth-displayName").split(" ")[0];
    }
    //if (typeof (element) != 'undefined' && element != null) {
    // Exists.
    //}

    //document.getElementById("avatar").innerHTML = localStorage.getItem("auth-displayName");
    //document.getElementById("account-details").innerHTML = localStorage.getItem("auth-email") + " | Sei entrato con " + localStorage.getItem("auth-provider");
    //document.getElementById("account-image").innerHTML = "<img src='" + localStorage.getItem("auth-photoURL") + "'>"



});

// RESPONSIVE NAVBAR
document.addEventListener("DOMContentLoaded", function (event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link');

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink));


});


//CONVERTITORI
function FtoC(celsius) {
    return (celsius * (9 / 5)) + 32;
}

function CtoF(fahrenheit) {
    return (fahrenheit - 32) * (5 / 9);
}

//CONVERT COORD2NAMECITY
function geotocity(geolat, geolon) {

    let reversegeopath = "http://api.openweathermap.org/geo/1.0/reverse?";

    let lat = geolat;
    let lon = geolon;

    let apiKey = "f630b86b58c4cd82f43f631bbffd5395";

    let reversegeoapi = reversegeopath + "lat=" + lat + "&lon=" + lon + "&limit=1&appid=" + apiKey;

    //alert("DEBUG: API geo2city foo: " + reversegeoapi);

    fetch(reversegeoapi)
        .then((response) => response.json())
        .then((data) => {
            console.log("DEBUG: geo2cityname: " + data[0].name);
            sessionStorage.setItem('city', data[0].name)
        });

}



