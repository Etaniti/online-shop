window.addEventListener('refresh-page', event => {
    window.location.reload(false);
})

document.querySelector('#saveButton').addEventListener('click', event => {
    window.dispatchEvent(new Event('refresh-page'));
})
