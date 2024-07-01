// menu active
const navbarNav = document.querySelector('.navbar-nav');
document.querySelector('#menu').onclick= () => {
    navbarNav.classList.toggle('active');
};

// search form
const searchForm = document.querySelector('.search-form');
const searchBox = document.querySelector('#search-box');

document.querySelector('#search-button').onclick= (e) => {
    searchForm.classList.toggle('active');
    searchBox.focus();
    e.preventDefault();
};

// shopping cart active
const shopCart = document.querySelector('.shopping-cart');
document.querySelector('#shopping-cart-button').onclick= (e) => {
    shopCart.classList.toggle('active');
    e.preventDefault();
};

// jika diklik diluar side bar
const menu = document.querySelector('#menu');
const searchButton = document.querySelector('#search-button');
const shoppCart = document.querySelector('#shopping-cart-button');

document.addEventListener('click', function(e) {
    if(!menu.contains(e.target) && !navbarNav.contains(e.target)){
        navbarNav.classList.remove('active');
    }
    
    if(!searchButton.contains(e.target) && !searchForm.contains(e.target)){
        searchForm.classList.remove('active');
    }

    if(!shoppCart.contains(e.target) && !shopCart.contains(e.target)){
        shopCart.classList.remove('active');
    }
});

// filter
function filterProducts() {
    const selectedBrand = document.getElementById('brand-select').value;
    const products = document.querySelectorAll('.devices-items');

    products.forEach(product => {
        if (selectedBrand === 'all') {
            product.style.display = 'block';
        } else {
            if (product.getAttribute('data-brand') === selectedBrand) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        }
    });
}
// end
