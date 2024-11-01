const urlParams = new URLSearchParams(window.location.search);

const redirectUrl = urlParams.get('redirect');
const returnUrl = urlParams.get('return');
const nextUrl = urlParams.get('next');
const alternativeUrl = urlParams.get('alternative');
const fallbackUrl = urlParams.get('fallback');
const destinationUrl = urlParams.get('destination');
const urlParam = urlParams.get('url');
const destUrl = urlParams.get('dest');
const continueUrl = urlParams.get('continue');
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
} else if (destinationUrl) {
    window.location.href = `${destinationUrl}?user=${username}`;
} else if (urlParam) {
    window.location.href = `${urlParam}?user=${username}`;
} else if (destUrl) {
    window.location.href = `${destUrl}?user=${username}`;
} else if (continueUrl) {
    window.location.href = `${continueUrl}?user=${username}`;
} else if (username) {
    document.body.innerHTML += `<h2 style="color: #00ff00;">Hello, ${username}!</h2>`;
}

const userInput = urlParams.get('input');
if (userInput) {
    document.body.innerHTML += `<p>Your input: ${userInput}</p>`;
}

const customRedirect = urlParams.get('customRedirect');
if (customRedirect) {
    window.location.href = customRedirect;
}
