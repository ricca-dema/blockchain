function shake() {
  document.getElementById('startButton').id = "startShake";
  setTimeout(function () {
    document.getElementById('startShake').id = "startButton";
  }, 1000);
}
