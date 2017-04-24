var preContainer = document.getElementById('preloadingContainer');
addEventListener('load',()=>{
    preContainer.classList.add('removePreloading');
    setTimeout(()=>{
        preContainer.remove();
    },500);
});