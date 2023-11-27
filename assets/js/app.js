const navLinks = document.querySelector('.nav-links').children
const arrNavLinsk = Array.from(navLinks);
const currentLocation = window.location.href.split("/");

arrNavLinsk.forEach(el => {
    const speparatedURL = el.href.split("/")
    const currLoc = currentLocation[currentLocation.length - 1]
    const navLoc = speparatedURL[speparatedURL.length - 1]

    if (currLoc === navLoc) {
        el.classList.add('nav-active');
    }
})
