window.addEventListener('load', function () {

    document.getElementById("sign-in").innerHTML = localStorage.getItem("auth-displayName");
    document.getElementById("account-details").innerHTML = localStorage.getItem("auth-email") + " | Sei entrato con " + localStorage.getItem("auth-provider");
    document.getElementById("account-image").innerHTML = "<img src='" + localStorage.getItem("auth-photoURL") + "'>"
});