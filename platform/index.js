function Link(url) {
  location.href = url;
}
function OnLoad() {
  var ReciveProducts = new XMLHttpRequest();
  ReciveProducts.open("GET", "../api/ReciveProducts.php");
  ReciveProducts.send();
  ReciveProducts.onload = function () {
    document.getElementById("products").innerHTML = ReciveProducts.responseText;
  };
  // Loading :
  document.getElementById("PanelUp").style.height = "0";
  document.getElementById("PanelUp").style.transition = "1.9s";
  document.getElementById("PanelUp").style.borderBottom = "2px soild white";
  document.getElementById("PanelDown").style.height = "0";
  document.getElementById("PanelDown").style.transition = "1.9s";
  document.getElementById("PanelDown").style.borderTop = "2px soild white";
  setTimeout(() => {
    document.getElementById("PanelDown").innerHTML = "";
    document.getElementById("PanelUp").innerHTML = "";
  }, 1900);
}
function ReciveProduct(id) {
  var ReciveProduct = new XMLHttpRequest();
  ReciveProduct.open("GET", "../api/ReciveProduct.php?ID=" + id);
  ReciveProduct.send();
  ReciveProduct.onload = function () {
    document.getElementById("desproduct").innerHTML =
      ReciveProduct.responseText;
  };
  document.getElementById("desproduct").style.visibility = "visible";
  document.getElementById("desproduct").style.transition = "1.0s";
  document.getElementById("desproduct").style.scale = "1.0";
}
function SubmitBuy(id) {
  location.href = "BuyProduct/?ID=" + id;
}
