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

let minis = document.querySelectorAll(".mini");

minis.forEach(function(mini){
    mini.addEventListener("click", function(){
        document.querySelector('#click').classList.add('active');
        document.querySelector('#click .content').innerHTML = this.innerHTML;
        minis.forEach(function(m){
            m.classList.add('hide');
        });

        document.querySelector('#click .close').addEventListener("click", function(){
            document.querySelector('#click').classList.remove('active');
            document.querySelector('#click .content').innerHTML = "";
            minis.forEach(function(m){
                m.classList.remove('hide');
            });
        });

    });
});