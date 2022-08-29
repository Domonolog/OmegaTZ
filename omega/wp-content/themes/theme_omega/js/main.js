window.onscroll = function() {
    var fixedTop = document.getElementById('header-scroll');
    if (window.scrollY > 25) {
        fixedTop.classList.add('shadow');
    } else {
        fixedTop.classList.remove('shadow');
    }
};

const menuOpen = document.getElementById('menu-open');

menuOpen.addEventListener('click', function() {
    this.classList.toggle('active');
});

window.onload = function() {
    let showMore = document.getElementsByClassName("show-more");
    for(let i = 0; i <  showMore.length; i++) {
        showMore[i].addEventListener("click", function(event) {
            event.preventDefault()
            this.parentElement.classList.toggle("active");
        });
    }
}