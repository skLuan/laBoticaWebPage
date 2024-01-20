document.addEventListener('DOMContentLoaded', ()=>{
let btnSidebar = document.querySelector('#mobile_sidebar_button');
// ------------------------------------ 
let sidebarSelector = '#sidebar_container';
let easingVariable = 'easeOutExpo';
let initX = 278;
let changeState = false;
anime.set(sidebarSelector, {
    translateX: initX
});
btnSidebar.addEventListener('click', (e)=> {
    e.preventDefault();
    changeState = !changeState;
    if(changeState) {
        anime({
        targets: sidebarSelector,
        translateX: [initX, 0],
        easing: easingVariable    
        });
    }
    else {
        anime({
        targets: sidebarSelector,
        translateX: initX,
        easing: 'cubicBezier(0.16, 1, 0.1, 1)'  
        });
    }
})
});
