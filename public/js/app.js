document.querySelector('body').addEventListener('click',  function(el) {
  if (el.target.id == 'switch') {
    switchColor();

  }
})


function switchColor() {
  let body = document.querySelector('body');

  var header = document.querySelector('header');
  var footer = document.querySelector('footer');
  var inputs = document.querySelectorAll("input[type=button]");

  body.classList.toggle('colorNight');
  header.classList.toggle('colorNight');
  footer.classList.toggle('colorNight');
  for (var i=0; i<inputs.length; i++){
    inputs[i].classList.toggle('colorNight');
  }
}
