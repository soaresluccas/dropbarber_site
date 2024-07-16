const container = document.getElementById('img');
const imgs = container.querySelectorAll('img');

let idx = 0;

function carrossel(){
    idx++;

    if(idx >= imgs.length){
        idx = 0;
       
    } 
        
    

    const width = imgs[idx].clientWidth;
    const translateX = -idx * width;

    document.querySelector('.container').style.transform = `translateX(${translateX}px)`;

    
}

setInterval(carrossel, 1800);  