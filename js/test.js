/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var titre = document.querySelector('#titre');
titre.addEventListener('click',function(e){
    e.target.classList.add('test');
    e.target.style.textDecoration = 'underline';
});


