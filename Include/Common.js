/* By Abdullah As-Sadeed */
document.oncontextmenu = function(menu) {
menu.preventDefault();
alert("Context Menues are not allowed by GPEIMS");
return false;
};
navigator.serviceWorker.register("Service_Worker.js");
