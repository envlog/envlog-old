// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyBdDXR-xwIV9pN96bf0Xvnzi4iV2Jao9rQ",
    authDomain: "stmapp-1.firebaseapp.com",
    projectId: "stmapp-1",
    storageBucket: "stmapp-1.appspot.com",
    messagingSenderId: "177091137088",
    appId: "1:177091137088:web:ba0248d1aa0da9b0f359a5"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const auth = firebase.auth()

// Initialize the FirebaseUI Widget using Firebase.
var ui = new firebaseui.auth.AuthUI(firebase.auth());

function getUserProfileProvider() {
    // [START auth_get_user_profile_provider]
    const user = firebase.auth().currentUser;

    if (user !== null) {
        user.providerData.forEach((profile) => {
            //           console.log("  Sign-in provider: " + profile.providerId);
            //           console.log("  Provider-specific UID: " + profile.uid);
            //           console.log("  Name: " + profile.displayName);
            //           console.log("  Email: " + profile.email);
            //           console.log("  Photo URL: " + profile.photoURL);

            localStorage.setItem("auth-provider", profile.providerId);
            localStorage.setItem("auth-uid", profile.uid);
            localStorage.setItem("auth-displayName", profile.displayName);
            localStorage.setItem("auth-email", profile.email);
            localStorage.setItem("auth-photoURL", profile.photoURL);

        });
    }
    // [END auth_get_user_profile_provider]
}

var uiConfig = {
    callbacks: {
        signInSuccessWithAuthResult: function (authResult, redirectUrl) {

            var user = authResult.user;
            var credential = authResult.credential;
            var isNewUser = authResult.additionalUserInfo.isNewUser; //ritorna bool se è nuovo utente registrato
            var providerId = authResult.additionalUserInfo.providerId;
            var operationType = authResult.operationType;




            // User successfully signed in.
            // Return type determines whether we continue the redirect automatically
            // or whether we leave that to developer to handle.
            return true;
        },
        signInFailure: function (error) {
            // Some unrecoverable error occurred during sign-in.
            // Return a promise when error handling is completed and FirebaseUI
            // will reset, clearing any UI. This commonly occurs for error code
            // 'firebaseui/anonymous-upgrade-merge-conflict' when merge conflict
            // occurs. Check below for more details on this.
            return handleUIError(error);
        },
        uiShown: function () {
            // The widget is rendered.
            // Hide the loader.
            document.getElementById('loader').style.display = 'none';
        }
    },
    // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
    signInFlow: 'redirect',
    signInSuccessUrl: '/dashboard.php',
    signInOptions: [
        // Leave the lines as is for the providers you want to offer your users.
        firebase.auth.GoogleAuthProvider.PROVIDER_ID,
        firebase.auth.FacebookAuthProvider.PROVIDER_ID,
        firebaseui.auth.AnonymousAuthProvider.PROVIDER_ID
    ],
    // Terms of service url.
    //tosUrl: '<your-tos-url>',
    // Privacy policy url.
    //privacyPolicyUrl: '<your-privacy-policy-url>'
};

ui.start('#firebaseui-auth-container', uiConfig);

/** 
        async function login() {
            var name = document.loginform.email.value;
            var pswd = document.loginform.pswd.value;

            if (name == null || name == "") {
                alert("Email vuoto");
                return false;
            } else if (pswd == null || pswd == "") {
                alert("Password vuoto");
                return false;
            }



            var email = document.loginform.email.value;
            var password = document.loginform.pswd.value;

            try {
                const response = await fetch('https://api.envlog.mitello.xyz/auth/login', {
                    method: "POST",
                    headers: {
                        Accept: "application/json, text/plain",
                        "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"
                    },
                    body: `email=${email}&password=${password}`
                });
                const json = await response.json();
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

        } 

*/
async function login() {
    var email = document.loginform.email.value;
    var password = document.loginform.pswd.value;

    try {
        const response = await fetch('https://api.envlog.mitello.xyz/auth/login', {
            method: "POST",
            headers: {
                Accept: "application/json, text/plain",
                "Content-Type": "application/x-www-form-urlencoded;charset=UTF-8"
            },
            body: `email=${email}&password=${password}`
        });
        const json = await response.json();
        if (json.errors) {
            // Blocco gestione errori
            console.log(json.errors);
        } else {
            // Blocco per HTTP 200 (richiesta andata a buon fine)
            console.log(json);

            let photourl = "https://dummyimage.com/512/ff7f7f/FFFFFF.png&text=" + json.username.charAt(0).toUpperCase();

            localStorage.setItem("auth-provider", "envlogauth");
            localStorage.setItem("auth-uid", Math.random().toString(36).slice(2));
            localStorage.setItem("auth-displayName", json.username);
            localStorage.setItem("auth-email", json.email);

            sessionStorage.setItem("auth-photoURL", photourl);
            sessionStorage.setItem("isAdmin", json.isAdmin);

            location.href = "/dashboard.php";

        }
    } catch (fetchError) {
        console.log(fetchError);
    }
    return false;
}