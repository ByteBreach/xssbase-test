const urlParams = new URLSearchParams(window.location.search);
const username = urlParams.get('username');

const redirectKeywords = [
    "redirect", "return", "next", "back", "alternative", "fallback", "destination",
    "continue", "url", "link", "out", "goto", "target", "forward", "redir", 
    "customRedirect", "edirect", "irect", "redirect_url", "redir_url"
];

let redirectUrl = null;

for (const [key, value] of urlParams.entries()) {
    if (redirectKeywords.some(keyword => key.toLowerCase().includes(keyword))) {
        redirectUrl = value;
        break;
    }
}

if (redirectUrl) {
    console.log(`Redirecting to: ${redirectUrl}?user=${username}`);
    window.location.href = `${redirectUrl}?user=${username}`;
} else if (username) {
    document.body.innerHTML += `<h2 style="color: #00ff00;">Hello, ${username}!</h2>`;
}

const userInput = urlParams.get('input');
if (userInput) {
    document.body.innerHTML += `<p>Your input: ${userInput}</p>`;
}

console.log("Script executed by mrfidal.");
console.log("Copyright © 2024 mrfidal. All rights reserved.");
console.log("For more information, visit: https://mrfidal.in");
