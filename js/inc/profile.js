localStorage.getItem("auth-provider", "envlogauth");
localStorage.getItem("auth-uid", Math.random().toString(36).slice(2));
localStorage.getItem("auth-displayName", json.username);
localStorage.getItem("auth-email");
sessionStorage.getItem("auth-photoURL");

sessionStorage.getItem("isAdmin");