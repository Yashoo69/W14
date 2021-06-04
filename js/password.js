document.querySelector('#pic_eye').addEventListener('click', (el) => {
    var e= document.querySelector('#eye_pass');
    var myPic = el.target;
    if (e.getAttribute('type') == 'password'){
        e.setAttribute('type', 'text');
        myPic.setAttribute('src', '../images/oeil.png');
    } else {
        e.setAttribute('type', 'password');
        myPic.setAttribute('src', './images/eyeClose.png');
    }
})
