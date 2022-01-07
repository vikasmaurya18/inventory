let buttons = document.getElementsByClassName('btn');
for(let i=0; i<buttons.length; i++) {
    buttons[i].addEventListener('click', el => {
        let target = el.target.parentElement.parentElement.children[0];
        target.innerHTML = +target.innerHTML - 1;
    });
};