function format(state) {
    if (!state.id) return state.text;
    return "<img class='flag' src='../light/assets/img/flags/" + state.id.toLowerCase() + ".png'/> &nbsp;" + state.text;
}

function format_icon(state) {
    console.log(state.title);
    if (!state.id) return state.text;
    return  state.title+" "+state.text;
}

var placeholder = "Select a State";
$('.select2, .select2-multiple').select2({
	theme: "bootstrap",
   // placeholder: placeholder,
});
$("#selitemIcon").select2({
	theme: "bootstrap",
	templateResult: format,
    formatSelection: format,
    escapeMarkup: function(m) {
        return m;
    }
});

$(".selitemWithIcon").select2({
    theme: "bootstrap",
    templateResult: format_icon,
    formatSelection: format_icon,
    escapeMarkup: function(m) {
        return m;
    }
});
$('.select2-allow-clear').select2({
	theme: "bootstrap",
    allowClear: true,
    placeholder: placeholder
});




