const right = document.querySelector('.fa-chevron-right-two')
const left = document.querySelector('.fa-chevron-left-two')
const imgNuber = document.querySelectorAll('.slider-product-iphones')

right.addEventListener("click", function() {
    index = index+1;
    if(index>imgNuber.length-1) {
        index=0;
    }
    document.querySelector(".slider-product-container-p").style.right = index*100+"%"
})

left.addEventListener("click", function() {
    index = index-1;
    if(index<=0) {
        index=imgNuber.length-1;
    }
    document.querySelector(".slider-product-container-p").style.right = index*100+"%"
})