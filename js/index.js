AOS.init();

window.addEventListener("load", ()=>{
	setTimeout(function()
	{
        document.querySelector('#loader .spinner').remove();
        document.querySelector('#loaderR').classList.add('move');   
        document.querySelector('#loaderL').classList.add('move');   

        document.querySelector('#loaderR').addEventListener("transitionend", ()=>{
            document.querySelector('#loader').remove();
        });
    },100);
})

window.addEventListener('scroll', function(e) {
    if(window.scrollY>10){
        this.document.querySelector('header').classList.add('fixed');
    }else{
        this.document.querySelector('header').classList.remove('fixed');
    }
});