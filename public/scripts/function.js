$(document).ready(function(){
    $(window).resize(function(){
    	var ref_dim = .675;
        var mainwidth = $(".traymale").width();
        var mainheight = $(".traymale").height();
        var n_total = $("#first_tray li").length;
        var n_shown = Math.floor((mainwidth/mainheight)/ref_dim);
        var carwidth = ((n_total/n_shown) + 1) * 100;
        var slotwidth = carwidth/(n_total + n_shown);
        var statement = "Width: " + mainwidth;
        	statement += " N_show: ";
        	statement += n_shown;
        	statement += " n_total: ";
        	statement += n_total;
        	statement += " " + carwidth;
        	statement += " " + slotwidth;
        $("#infopane").text(statement);
        $(".carousel").width(carwidth + "%");
        $(".trayitem").width(slotwidth + "%");

    });
});

