$().ready(() => {
        openNav();
        closeNav();
    }
);

function openNav() {
    $("#open-sidenav-btn").click(() => {
        $("#sidenav").width("100%")
    })
}

function closeNav() {
    $("#close-sidenav-btn").click(() => {
        $("#sidenav").width(0)
    })
}