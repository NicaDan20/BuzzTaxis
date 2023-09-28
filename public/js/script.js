const toggleButton = document.getElementsByClassName('nav-toggle')[0];
const mobileNavbar = document.getElementsByClassName('navigation-mobile')[0]
const navbarLinks = document.getElementsByClassName('navigation-links')[0]
const toggleButtonContents = document.getElementsByClassName('fa-solid fa-bars')[0]
const body = document.body;



function wait(milliseconds) {
    return new Promise((resolve) => setTimeout(resolve, milliseconds));
}


toggleButton.addEventListener('click', async () => {
    if (mobileNavbar.classList.contains('active')) {
        await wait(0);
    }

    mobileNavbar.classList.toggle('active');
    navbarLinks.classList.toggle('active');
    body.classList.toggle('active');
    if (toggleButtonContents.className === 'fa-solid fa-bars') {
        toggleButtonContents.classList.remove('fa-bars')
        toggleButtonContents.classList.add('fa-x')
    } else {
        toggleButtonContents.classList.remove('fa-x')
        toggleButtonContents.classList.add('fa-bars')
    }
})

const contentOfHomePage = document.getElementsByClassName('grid-item main-grid')[0];
const contentOfBlogPage = document.getElementsByClassName('blog-main-container')[0];


window.addEventListener('click', (e) => {
    if (mobileNavbar.classList.contains('active')) {
        if (contentOfHomePage) {
            if (contentOfHomePage.contains(e.target)) {
                mobileNavbar.classList.toggle('active');
                navbarLinks.classList.toggle('active');
                body.classList.toggle('active');
                toggleButtonContents.classList.remove('fa-x')
                toggleButtonContents.classList.add('fa-bars')
            }
        }
        if (contentOfBlogPage) {
            if (contentOfBlogPage.contains(e.target)) {
                mobileNavbar.classList.toggle('active');
                navbarLinks.classList.toggle('active');
                body.classList.toggle('active');
                toggleButtonContents.classList.remove('fa-x')
                toggleButtonContents.classList.add('fa-bars')
            }
        }
    }
})

navbarLinks.addEventListener('click', async (e) => {
    if (mobileNavbar.classList.contains('active')) {
        await wait(100);
        mobileNavbar.classList.toggle('active');
        navbarLinks.classList.toggle('active');
        body.classList.toggle('active');
        toggleButtonContents.classList.remove('fa-x')
        toggleButtonContents.classList.add('fa-bars')
    }
})