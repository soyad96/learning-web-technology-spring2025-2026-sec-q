let btn=document.createElement('button');
btn.textContent='+';
btn.type='button';
btn.addEventListener('click', () => {
  alert('+');
});
document.body.appendChild(btn);
let btn2=document.createElement('button');
btn2.textContent='-';
btn2.type='button';
btn.addEventListener('click',()=>{
    alert('-');
});
document.body.appendChild(btn2);
let mul=document.createElement('button');
mul.textContent='*';
mul.type='button';
mul.addEventListener('click',()=>{
    alert('*');
});
document.body.appendChild(mul);
 let div=document.createElement('button');
 div.textContent='/';
 div.type='button';
 div.addEventListener('click',()=>{
    alert('/');
 });
 document.body.appendChild(div);

 let nine=document.createElement('button');
 nine.textContent='9';
 nine.type='button';
 nine.addEventListener('click',()=>{
    alert('9');
 });
 document.body.appendChild(nine);
//console.log('this is a js code');

