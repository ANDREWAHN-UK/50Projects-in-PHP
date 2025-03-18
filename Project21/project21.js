const fill = document.querySelector('.fill')

const empties = document.querySelectorAll('.empty')

fill.addEventListener('dragstart',dragStart)
fill.addEventListener('dragend',dragEnd)


function dragStart(){
    console.log('start');
}

function dragEnd(){
    console.log('end');
}

function dragOver(){
    console.log('over');
}

function dragEnter(){
    console.log('enter');
}

function dragLeave(){
    console.log('leave');
}

function dragDrop(){
    console.log('drop');
}