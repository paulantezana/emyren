'use strict';

var preContainer = document.getElementById('preloadingContainer');
addEventListener('load', function () {
    preContainer.classList.add('removePreloading');
    setTimeout(function () {
        preContainer.remove();
    }, 1000);
});