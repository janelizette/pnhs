function plus() {
  var quantity = parseInt(document.getElementById("quantity").value);
  var prc = parseInt(document.getElementById("prc").value);
  document.getElementById("quantity").stepUp();
  document.getElementById("total").innerHTML = "PHP " + ((quantity+1)*prc).toString();
}

function minus() {
  var quantity = parseInt(document.getElementById("quantity").value);
  var prc = parseInt(document.getElementById("prc").value);
  document.getElementById("quantity").stepDown();
  if ((quantity-1) != 0) {
    document.getElementById("total").innerHTML = "PHP " + ((quantity-1)*prc).toString();
  }
}
