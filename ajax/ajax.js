let xhr = getXMLHttpRequest();

function requestSendMail(callback) {

    let formulaire = document.getElementById("sendMail");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && (xhr.status === 200 || xhr.status === 0)) {
            callback(xhr.responseText, formulaire);
        }
    };

    let formData = new FormData(formulaire);

    xhr.open("POST", "ajax/php/sendMail.php", true);
    xhr.send(formData);
}

function readDataSendMail(oData, formulaire) {

    let json = JSON.parse(oData);

    M.toast({html: json["text"]});
    formulaire.reset();

}