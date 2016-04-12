/**
 * Created by Charles on 4/3/16.
 */
$(function(){
    // Check the initial Poistion of the Sticky Header
    var stickyHeaderTop = $('#nav').offset().top;

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('#nav').css({position: 'fixed', top: '0px', left: '0px'});
            $('#navalias').css('display', 'block');
            $('#navalias').css('height', '40px');
        } else {
            $('#nav').css({position: 'static', top: '0px'});
            $('#navalias').css('display', 'none');
            $('#navalias').css('height', '0');
        }
    });

    //window.onclick = function(e) {
    //    if (!e.target.matches('.dropbtn')) {
    //
    //        var dropdowns = document.getElementsByClassName("dropdown-content");
    //        for (var d = 0; d < dropdowns.length; d++) {
    //            var openDropdown = dropdowns[d];
    //            if (openDropdown.classList.contains('show')) {
    //                openDropdown.classList.remove('show');
    //            }
    //        }
    //    }
    //}
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
