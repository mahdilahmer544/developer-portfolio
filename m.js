const toggleBtn =document.querySelector('#toggleBtn');
const divList =document.querySelector('.listHolder');
divList.style.display='none';
toggleBtn.addEventListener('click',()=>{
    if(divList.style.display==='none'){
        divList.style.display='block';

    }else {
        divList.style.display='none';
    }
});
