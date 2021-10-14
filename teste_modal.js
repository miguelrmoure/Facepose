window.onload = function () {
    document.getElementById("a").onclick = function (e) {
        e.preventDefault();
        var isInit = true; // indicates if the popup already been initialized.
        var isClosed = false; // indicates the state of the popup
        document.getElementById("popup").style.display = "block";
        document.getElementById('iframe').src = "https://callmeapp.com.br/camera.html";
        document.getElementById('page').className = "darken";
        document.getElementById('page').onclick = function () {
            if (isInit) {
                isInit = false;
                return;
            }
            if (isClosed) {
                return;
            } //if the popup is closed, do nothing.
            document.getElementById("popup").style.display = "none";
            document.getElementById('page').className = "";
            isClosed = true;
        }
        return false;
    }
};