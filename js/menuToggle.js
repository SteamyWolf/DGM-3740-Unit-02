
function toggleMenu() {
  var y = document.getElementById('primaryNav');
  var x = document.getElementById('hamburgerBtn');
  var bodyDiv = document.getElementsByClassName('bodyDiv');
if(document.getElementById('primaryNav').className==='closed') {
      y.className='open';
      x.className='open';
      bodyDiv[0].classList.add('openBody')
    } else {
      y.className='closed';
      x.className='closed'
      bodyDiv[0].classList.remove('openBody')
    }
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 