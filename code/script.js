const urlParams = new URLSearchParams(window.location.search);
const redirectUrl = urlParams.get('redirect');
const returnUrl = urlParams.get('return');
const nextUrl = urlParams.get('next');
const alternativeUrl = urlParams.get('alternative');
const fallbackUrl = urlParams.get('fallback');
const username = urlParams.get('username');

function encodeUsername(name) {
    return encodeURIComponent(name);
}

if (redirectUrl) {
    window.location.href = `${redirectUrl}?user=${encodeUsername(username)}`;
} else if (returnUrl) {
    window.location.href = `${returnUrl}?user=${encodeUsername(username)}`;
} else if (nextUrl) {
    window.location.href = `${nextUrl}?user=${encodeUsername(username)}`;
} else if (alternativeUrl) {
    window.location.href = `${alternativeUrl}?user=${encodeUsername(username)}`;
} else if (fallbackUrl) {
    window.location.href = `${fallbackUrl}?user=${encodeUsername(username)}`;
} else if (username) {
    document.body.innerHTML += `<h2 style="color: #00ff00;">Hello, ${encodeUsername(username)}!</h2>`;
} else {
    document.body.innerHTML += '<h2 style="color: #ff0000;">Welcome to our site! Please provide a username.</h2>';
}
