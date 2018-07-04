let expander = document.querySelector('.expander')
let navHidden = document.querySelector('.nav-hidden')
let changer=0;
expander.addEventListener('click',function(){
    if(changer==0){
    expander.innerHTML="<i class='fas fa-times'></i>";
    navHidden.classList.add('nav-shower');
    changer=1;
  } else {
    expander.innerHTML="<i class='fas fa-bars'></i>";
    navHidden.classList.remove('nav-shower');
    changer=0;
  }
});
