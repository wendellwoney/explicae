var dataSet = [];
var url = "https://randomuser.me/api";

function setDataSet(item) {
    dataSet.push(item);
}

$.ajaxSetup({
    async: false
});

$.getJSON(url).done(function (data) {
    $.each(data.results, function (i, user) {
        var item = [
            "<img src='" + user.picture.thumbnail + "' class=\"rounded-circle\">",
            user.name.first + user.name.last,
            user.location.city + "/" + user.location.state,
            user.email,
            user.phone,
            user.cell
        ];
        setDataSet(item);
    });
});




$(document).ready(function () {
    $('#example').DataTable({
        data: dataSet,
        columns: [
            {title: ""},
            {title: "Nome"},
            {title: "Cidade/Estado"},
            {title: "E-mail"},
            {title: "Telefone"},
            {title: "Celular"}
        ]
    });
});