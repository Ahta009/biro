// Throttle function to limit how often the scroll event handler is executed
function throttle(func, limit) {
    let lastFunc;
    let lastRan;
    return function() {
        const context = this;
        const args = arguments;
        if (!lastRan) {
            func.apply(context, args);
            lastRan = Date.now();
        } else {
            clearTimeout(lastFunc);
            lastFunc = setTimeout(function() {
                if ((Date.now() - lastRan) >= limit) {
                    func.apply(context, args);
                    lastRan = Date.now();
                }
            }, limit - (Date.now() - lastRan));
        }
    };
}

function handleScroll() {
    var navigation = document.querySelector('.navigation');
    if (window.scrollY > 100) {
        navigation.classList.add('scrolled');
        navigation.classList.remove('transparent');
    } else {
        navigation.classList.remove('scrolled');
        navigation.classList.add('transparent');
    }
}

// Apply throttle to the scroll event handler
window.addEventListener('scroll', throttle(handleScroll, 100));

// Initial check to set the correct state on page load
document.addEventListener('DOMContentLoaded', function() {
    handleScroll();
});
