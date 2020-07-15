function strikeme(text) {
    var result = "";
    jQuery.each(text.split(""), function () {
        result += this + "\u0336";
    });
    return result;
}

function strikeEm() {
    var text = jQuery("#strikeThis").val();
    jQuery("#strikedResult").val(strikeme(text));
}

function Clipboard_CopyTo(value) {
    const tempInput = document.createElement("input");
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
}

jQuery(document).on('click', '#strikedResult', function () {
    //Clipboard_CopyTo(jQuery('#strikedResult').val());
    var copyText = document.getElementById('strikedResult');
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    var alertcopy = document.getElementById('alertcopy');
    alertcopy.style = "padding: 4px 0px 2px; color: rgb(0, 102, 33); margin-bottom: 1px; font-size: 13px; line-height: 16px;";
    alertcopy.innerHTML = "Copied";
    setTimeout(function () {
        jQuery('#alertcopy').hide()
    }, 3000);
});
