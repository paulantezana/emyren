$('.slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000
});




if(innerWidth<480){
    $('#customAticle').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
    });
}else if(innerWidth>480 && innerWidth<870){
    $('#customAticle').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 2,
    });

}else{
    $('#customAticle').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
    });
}
let buttomPrevNext = document.querySelectorAll('#customAticle .slick-arrow');
for(let buttom of buttomPrevNext){
    buttom.textContent="";
}
buttomPrevNext[0].classList.add('icon-price');
buttomPrevNext[1].classList.add('icon-key');




    // autoplaySpeed: 0,