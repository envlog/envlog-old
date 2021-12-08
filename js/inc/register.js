const register = async () => {
    const email = document.registerform.email.value;
    const username = document.registerform.username.value;
    const password = document.registerform.pswd.value;
    const passwordConfirmation = document.registerform.checkpswd.value;

    const response = await fetch("https://api.envlog.mitello.xyz/auth/register", {
        method: "POST",
        headers: {
            Accept: "application/json",
            "Content-Type": "application/x-www-form-urlencoded;charset=utf-8"
        },
        body: `email=${email}&username=${username}&password=${password}&passwordConfirmation=${passwordConfirmation}`
    });

    const json = await response.json();

    if (json.errors) { // Errori
        console.log(json.errors);
    } else {
        // OK
        console.log(json);
    }
}