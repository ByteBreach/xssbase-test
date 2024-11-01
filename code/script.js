const urlParams = new URLSearchParams(window.location.search);
const redirectUrl = urlParams.get('redirect');
const returnUrl = urlParams.get('return');
const nextUrl = urlParams.get('next');
const alternativeUrl = urlParams.get('alternative');
const fallbackUrl = urlParams.get('fallback');
const username = urlParams.get('username');

if (redirectUrl) {
    window.location.href = `${redirectUrl}?user=${username}`;
} else if (returnUrl) {
    window.location.href = `${returnUrl}?user=${username}`;
} else if (nextUrl) {
    window.location.href = `${nextUrl}?user=${username}`;
} else if (alternativeUrl) {
    window.location.href = `${alternativeUrl}?user=${username}`;
} else if (fallbackUrl) {
    window.location.href = `${fallbackUrl}?user=${username}`;
} else if (username) {
    document.body.innerHTML += `<h2 style="color: #00ff00;">Hello, ${username}!</h2>`;
}
