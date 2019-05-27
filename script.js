function color() {
    document.getElementById('theme').className = "navbar navbar-expand-lg navbar-light bg-secondary fixed-top";
    document.getElementById('myimg').style = ('background-color:black;');

    document.getElementsByTagName('hr')[0].style = ('background-color:black;');
    document.getElementsByTagName('hr')[1].style = ('background-color:black;');
    document.getElementsByTagName('hr')[2].style = ('background-color:black;');

    
    document.getElementsByClassName('fotter')[0].style = ('background-color:#6C757D');
    document.getElementsByTagName('body')[0].style = ('background-color:#343A40; color:white');

};
function color1() {
    document.getElementById('theme').className = "navbar navbar-expand-lg navbar-light bg-primary fixed-top";
    document.getElementById('myimg').style = ('background-color:#007BFF;');

    document.getElementsByTagName('hr')[0].style = ('background-color:#007BFF;');
    document.getElementsByTagName('hr')[1].style = ('background-color:#007BFF;');
    document.getElementsByTagName('hr')[2].style = ('background-color:#007BFF;');

    // document.getElementsByClassName('btn btn-primary')[0].className = "btn btn-dark";
    document.getElementsByClassName('fotter')[0].style = ('background-color:#007BFF');
    document.getElementsByTagName('body')[0].style = ('background-color:white; color:dark');

};