function formSubmit(event) {
  var u = document.getElementById('username').value;
  var p = document.getElementById('password').value;
  function reqListener () {
    console.log( this.response );
  }

  var newXHR = new XMLHttpRequest();
  newXHR.addEventListener( 'load', reqListener );

  newXHR.open( 'POST', 'https://web.njit.edu/~cc593/front/j.php' );
  var raw = { user: u, pass: p};

  var data = JSON.stringify( raw  );

  newXHR.send( data );
  event.preventDefault();
}

function formListener() {
  const form = document.getElementById('example_form');
  form.addEventListener('submit', formSubmit);
}
