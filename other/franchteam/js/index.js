

let takebutton = document.getElementsByClassName('takebutton')[0];
let shipbutton =  document.getElementsByClassName('shipbutton')[0];
let takeoffblock = document.getElementsByClassName('buy__takeoffblock')[0];  
let catalogfiltershow = document.getElementsByClassName('catalog__filtershow')[0]; 
let cataloglist = document.getElementsByClassName('catalog__list__filteritem')[0];


catalogfiltershow.addEventListener('click', function() {
 cataloglist.classList.toggle('activeblock') ;
});
takebutton.addEventListener('click', function () {  
  takeoffblock.style.display="block";
})
shipbutton.addEventListener('click', function () {  
  takeoffblock.style.display="none";
})
 
let roomslabel  = document.getElementsByClassName('roomlabel');  
for(let i=0; i<roomslabel.length; i++) {
 roomslabel[i].addEventListener('click', function() { 
  
   roomslabel[i].classList.toggle('activelabel');
 })  

}

let labels  = document.getElementsByClassName('filterlabel');  
for(let i=0; i<labels.length; i++) {
 labels[i].addEventListener('click', function() { 
  for(let i=0; i<labels.length; i++) {
    labels[i].classList.remove('activelabel');
  }
  labels[i].classList.add('activelabel');
 });   
}

 
$('.carousel-indicators  li').on('mouseover',function(){
  $(this).trigger('click');
})
 






