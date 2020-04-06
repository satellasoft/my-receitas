function getValueById(id) {
    return document.getElementById(id).value;
}

function getById(id) {
    return document.getElementById(id);
}

function appendHTMLById(id, html) {
    document.getElementById(id).innerHTML += html;
}