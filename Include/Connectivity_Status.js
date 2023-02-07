var offline = document.getElementById("offline").style;
window.onoffline = function() {
offline.display = "block";
};
window.ononline = function() {
offline.display = "none";
};
