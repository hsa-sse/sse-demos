function updateGreeting() {
    const hash = window.location.hash.substring(1);
    const urlParams = new URLSearchParams(hash);
    const name = urlParams.get('name');
    document.getElementById('greeting').innerHTML = "Hello " + name;
}

// Execute the function on page load
window.onload = updateGreeting;

// Execute the function on fragment change
window.onhashchange = updateGreeting;
