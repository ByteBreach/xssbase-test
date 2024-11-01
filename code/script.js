const urlParams = new URLSearchParams(window.location.search);
const redirectUrl = urlParams.get('redirect');
const username = urlParams.get('username');

if (redirectUrl) {
    window.location.href = redirectUrl + '?user=' + encodeURIComponent(username);
} else if (username) {
    document.body.innerHTML += '<h2 style="color: #00ff00;">Hello, ' + encodeURIComponent(username) + '!</h2>';
}
