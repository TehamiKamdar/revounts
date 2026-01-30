function edit_store_form(id) {
    document.getElementById('edit_store_response').innerHTML = '<center><img src="images/spinner.gif"></center>';
    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('edit_store_response').innerHTML = this.responseText;
            $('.summernote').summernote({
                height: 350,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: false                 // set focus to editable area after initializing summernote
            });
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?edit_store_form=" + id + "&timeuniq=" + timestamp, true);
    xhttp.send();
}

function updateAuthor() {
    document.getElementById("status").innerHTML = "Please Wait..";
    document.getElementById("spinner").src = "images/spinner.gif";
    var form = document.forms.namedItem("update_author_form");
    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php");
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#store_edit_response")[0].click();
            document.getElementById("spinner").src = "";
            document.getElementById("status").innerHTML = "";

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}



function delete_comment(id) {

    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            $('#commentRow' + id).addClass('animated slideOutLeft');
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?delete_comment=" + id + "&timeuniq=" + timestamp, true);
    xhttp.send();
}

function read_comment(id) {

    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#modal_btn")[0].click();
            document.getElementById('readResponse' + id).innerHTML = '<i style="color:green;" class="fa fa-circle" aria-hidden="true"></i>';
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?read_comment=" + id + "&timeuniq=" + timestamp, true);
    xhttp.send();
}


function approve_comment(id) {

    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?approve_comment=" + id + "&timeuniq=" + timestamp, true);
    xhttp.send();
}


function add_review() {


    document.getElementById("loader").style.display = "block";

    var form = document.forms.namedItem("review_form");

    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("save_btn").disabled = true;
            document.getElementById("loader").style.display = "none";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#review_response")[0].click();
            window.location.href = "https://www.revounts.com.au/revounts_cms/all_review_1.php?dashboard=admin&status=1&un=admin&review_id=26&review_id=26&review_id=6&review_id=7&review_id=8&review_id=9";

        }
    };

    oReq.send(oData);
    ev.preventDefault();


}




function update_deal() {
    var form = document.forms.namedItem("update_deal_form");
    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#coupon_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}

function add_deal() {
    var form = document.forms.namedItem("deal_form");
    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#coupon_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}



function addAuthor() {
    document.getElementById("status").innerHTML = "Please Wait..";
    document.getElementById("spinner").src = "images/spinner.gif";
    var form = document.forms.namedItem("author_form");
    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php");
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#store_edit_response")[0].click();
            document.getElementById("spinner").src = "";
            document.getElementById("status").innerHTML = "";

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}




function season_deals(val) {
    document.getElementById("coupon_list").innerHTML = "<center><img src='images/spinner.gif' style='width:128px; height:128px'/></center>";
    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("coupon_list").innerHTML = this.responseText;


        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?season_deals=" + val + "&timeuniq=" + timestamp, true);
    xhttp.send();

}

function store_coupons(val) {
    document.getElementById("coupon_list").innerHTML = "<center><img src='images/spinner.gif'  /></center>";
    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("coupon_list").innerHTML = this.responseText;


        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?store_coupons=" + val + "&timeuniq=" + timestamp, true);
    xhttp.send();

}


function delete_subscriber(id) {

    var timestamp = new Date().getTime();
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            $('#subscriberRow' + id).addClass('animated slideOutLeft');
            alert(this.responseText);
            window.location.reload();
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?delete_subscriber=" + id + "&timeuniq=" + timestamp, true);
    xhttp.send();
}





function create_season() {
    document.getElementById("loader").style.display = "block";

    var form = document.forms.namedItem("season_form");

    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php");
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("loader").style.display = "none";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#modal")[0].click();


        }
    };

    oReq.send(oData);
    ev.preventDefault();
}

function edit_season() {
    document.getElementById("loader").style.display = "block";

    var form = document.forms.namedItem("edit_season_form");

    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php");
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("loader").style.display = "none";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#modal")[0].click();


        }
    };

    oReq.send(oData);
    ev.preventDefault();
}


function assign_roles() {
    var form = document.forms.namedItem("roles");
    var data = new FormData(form);

    var req = new XMLHttpRequest();
    req.open("POST", "php_scripts/ajax_data.php", true);
    req.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#modal")[0].click();
        }

    }
    req.send(data);

}






function sliderone() {

    var form = document.forms.namedItem("slider1_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);
}




function slidertwo() {

    var form = document.forms.namedItem("slider2_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);


}


function sliderthree() {

    var form = document.forms.namedItem("slider3_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);


}



function sliderfour() {

    var form = document.forms.namedItem("slider4_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);
}

function sliderfourty() {

    var form = document.forms.namedItem("slider40_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);
}

function sliderfifty() {

    var form = document.forms.namedItem("slider50_form");
    oData = new FormData(form);
    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#slider")[0].click();

        }
    };

    oReq.send(oData);
}





//Insert User
function loadDoc() {
    //Declare Variables
    var nm = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;
    var acc_type = document.getElementById("acc_type").value;

    //multiple values from select input
    var selectedArray = new Array();
    var selObj = document.getElementById('network');
    var i;
    var count = 0;
    for (i = 0; i < selObj.options.length; i++) {
        if (selObj.options[i].selected) {
            selectedArray[count] = selObj.options[i].value;
            count++;
        }
    }
    var nets = selectedArray;

    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;
            document.getElementById("name").value = "";
            document.getElementById("pass").value = "";


            $('#modal')[0].click();
        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?acc_name=" + nm + "&pass=" + pass + "&acctype=" + acc_type + "&network=" + nets, true);
    xhttp.send();
}

//Delete User
function delete_user(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?user_id=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}


function user_status_switch(uid, ustat) {

    var nm = uid;
    var st = ustat;

    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("status_response").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?uid=" + nm, true);
    xhttp.send();


}


function total_users() {


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("t_users").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?total_users", true);
    xhttp.send();



}



function users() {


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?get_all_users", true);
    xhttp.send();
}



function edit_user(uid) {

    var nm = uid;
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("con-close-modal").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?edit_user=" + nm, true);
    xhttp.send();


}



function update_user(uid) {
    var id = uid;
    var name1 = document.getElementById("field-1").value;
    var pass1 = document.getElementById("field-2").value;
    var network1 = document.getElementById("field-3").value;
    var type1 = document.getElementById("field-4").value;

    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("update_response").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?update_user=" + id + "&name=" + name1 + "&pass=" + pass1 + "&network=" + network1 + "&type=" + type1, true);
    xhttp.send();


}



//Insert Network In Database
function add_network() {

    var name1 = document.getElementById("network_name").value;
    var user = document.getElementById("cms_user").value;

    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("custom-modal").innerHTML = this.responseText;
            document.getElementById("network_name").value = "";
            $("#network_success")[0].click();

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?add_network=" + name1 + "&user=" + user, true);
    xhttp.send();


}



//Total Number Of Network e.g 7
function total_network() {


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("t_network").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?total_network", true);
    xhttp.send();



}


//Live Network Data Table
function networks_live() {


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response_network").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?get_all_networks", true);
    xhttp.send();


}


//Add Category
function add_category() {
    var form = document.forms.namedItem("add_cat_form");
    document.getElementById("custom-modal").style.display = 'block';
    document.getElementById("response").innerHTML = "Please Wait......";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("save_btn").disabled = true;
            document.getElementById('response').innerHTML = this.responseText;
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);

}

//Add Blog Category
function add_category_blog() {
    var form = document.forms.namedItem("add_cat_form_blog");
    document.getElementById("response").innerHTML = "Please Wait......";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);

}


function delete_faqs(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?faqs_id=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}


function edit_faqs(uid) {

    var nm = uid;
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("con-close-modal").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?edit_faqs=" + nm, true);
    xhttp.send();


}


function update_faqs(uid) {
    var id = uid;
    var name1 = document.getElementById("field-1").value;
    var pass1 = document.getElementById("field-2").value;


    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("update_response").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?update_faqs=" + id + "&name=" + name1 + "&pass=" + pass1, true);
    xhttp.send();


}

function savfaqs() {

    var form = document.forms.namedItem("faqs_form");
    document.getElementById("save_btn").disabled = true;
    document.getElementById("coupon_response").innerHTML = "Please Wait......";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("save_btn").disabled = true;
            document.getElementById("custom-modal").innerHTML = this.responseText;
            document.getElementById("custom-modal").style.display = 'block';


        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);
}




//Edit Category
function edit_category(uid) {
    var d = new Date();
    var n = d.getTime();
    var nm = uid;
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("con-close-modal").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?edit_category=" + nm + "&timestamp=" + n, true);
    xhttp.send();


}



function update_category_blog() {

    var form = document.forms.namedItem("upd_cat_form_blog");
    document.getElementById("response").innerHTML = "Please Wait......";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);

}



function cat_form() {

    var form = document.forms.namedItem("editCat_form");

    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            window.location.href = this.responseText;
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);

}


function update_category() {

    var form = document.forms.namedItem("upd_cat_form");
    document.getElementById("response").innerHTML = "Please Wait......";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php");
    xhttp.send(data);

}

//Delete Category
function delete_category(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("update_table_category").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_category=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}


function add_store() {


    var name = document.getElementById("s_name").value;
    var cat = document.getElementById("cat").value;
    var heading = document.getElementById("heading").value;
    var img = document.getElementById("s_image").value;
    var alt = document.getElementById("alt").value;

    var mtitle = document.getElementById("title").value;
    var mdesc = document.getElementById("desc").value;
    var sd = document.getElementById("shrt_desc").value;
    var ld = document.getElementById("lng_desc").value;
    var durl = document.getElementById("direct_url").value;
    var turl = document.getElementById("tracking_url").value;



    if (!name) {

        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Give Store <a href='#s_name'>Name";


    }

    else if (!cat) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Select <a href='#cat'>Category";

    }

    else if (!heading) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Select <a href='#heading'>Heading";

    }
    else if (!img) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Select <a href='#s_image'>Image";
    }
    else if (!alt) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Give Image <a href='#alt'>Alt</a>";
    }
    else if (!mtitle) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Give Meta <a href='#title'>Title</a>";
    }
    else if (!mdesc) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Give Meta <a href='#desc'>Description</a>";
    }

    else if (!sd) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Provide Short <a href='#shrt_desc'>Description</a>";
    }



    else if (!durl) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Provide Store Direct <a href='#direct_url'>Url</a>";
    }

    else if (!turl) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Provide Store Tracking <a href='#tracking_url'>Url</a>";
    }




    else {

        document.getElementById("loader").style.display = "block";

        var form = document.forms.namedItem("store_form");

        var oOutput = document.querySelector("div"),
            oData = new FormData(form);

        var oReq = new XMLHttpRequest();
        oReq.open("POST", "php_scripts/ajax_data.php");
        oReq.onload = function (oEvent) {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                document.getElementById("loader").style.display = "none";
                document.getElementById("custom-modal").innerHTML = this.responseText;
                $("#store_response")[0].click();
                document.getElementById("error_box").style.display = "none";

            }
        };

        oReq.send(oData);
        ev.preventDefault();

    }
}




//Delete Category
function delete_store(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert('Deleted Successfully');

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_store=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}
function delete_store_new(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                alert('Deleted Successfully');

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_store_new=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}


//Edit Store
function edit_store() {
    var form = document.forms.namedItem("store_edit_form");
    document.getElementById("status").innerHTML = "Please Wait......";
    document.getElementById("spinner").src = "images/spinner.gif";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#store_edit_response")[0].click();
            document.getElementById("spinner").src = "";
            document.getElementById("status").innerHTML = "Intelligent System Updated Your Request Successfully";
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php", false);
    xhttp.setRequestHeader("Accept", "multipart/form-data");

    xhttp.send(data);

}




function add_blog() {


    document.getElementById("loader").style.display = "block";

    var form = document.forms.namedItem("blog_form");

    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {


            document.getElementById("loader").style.display = "none";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#blog_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();


}

//Save Home Page Settings
function home_settings() {


    var form = document.forms.namedItem("home_form");


    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#settings_response")[0].click();
            $('#home')[0].reset();

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}

//Save Category Page Settings
function category_page() {

    var form = document.forms.namedItem("category_form");


    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#settings_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();
}

function add_store_settings() {
    var form = document.forms.namedItem("store_form");


    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#settings_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();

}

function add_blog_settings() {
    var form = document.forms.namedItem("blog_form");


    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#settings_response")[0].click();

        }
    };

    oReq.send(oData);
    ev.preventDefault();

}

function retrieve_home_settings() {





    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php?home_settings", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("home-2").innerHTML = this.responseText;

        }
    };

    oReq.send();
    ev.preventDefault();

}

function retrieve_category_settings() {

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php?category_settings", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("profile-2").innerHTML = this.responseText;

        }
    };

    oReq.send();
    ev.preventDefault();

}

function retrieve_store_settings() {

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php?store_settings", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("messages-2").innerHTML = this.responseText;

        }
    };

    oReq.send();
    ev.preventDefault();

}

function retrieve_blog_settings() {

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php?blog_settings", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("settings-2").innerHTML = this.responseText;

        }
    };

    oReq.send();
    ev.preventDefault();

}

function add_coupon() {


    var offer_box = document.getElementById("offer_box").value;
    var offer_details = document.getElementById("offer_details").value;
    var offer_link = document.getElementById("offer_link").value;
    var offer_store = document.getElementById("offer_store").value;




    if (!offer_box) {

        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "*Offer Box is empty";


    }

    else if (!offer_details) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please add Offer Details";

    }

    else if (!offer_link) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please add Tracking Link";

    }
    else if (!offer_store) {
        document.getElementById("error_box").style.display = "block";
        document.getElementById("validation").innerHTML = "* Please Select Store";
    }

    else {

        var form = document.forms.namedItem("coupon_form");

        oData = new FormData(form);

        var oReq = new XMLHttpRequest();
        oReq.open("POST", "php_scripts/ajax_data.php", false);
        oReq.onload = function (oEvent) {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("custom-modal").innerHTML = this.responseText;
                $("#coupon_response")[0].click();

            }
        };

        oReq.send(oData);
        ev.preventDefault();

    }
}


function delete_coupon(id, store) {


    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("coupon_list").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_coupon=" + nm + "&delStore=" + store, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}

function edit_coupon(uid) {
    var timestamp = new Date().getTime();
    var nm = uid;
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("con-close-modal").innerHTML = this.responseText;

        }
    };
    //Make Request
    xhttp.open("GET", "php_scripts/ajax_data.php?edit_coupon=" + nm + "&time=" + timestamp, true);
    xhttp.send();


}

function upd_coupon() {



    var form = document.forms.namedItem("update_coupon_form");

    oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php");
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {


            document.getElementById("update_response").innerHTML = "Coupon Updated";
            document.getElementById("coupon_list").innerHTML = this.responseText;


        }
    };

    oReq.send(oData);


}


//Delete blog
function delete_blog(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("update_table_blog").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_blog=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}




//Delete review
function delete_review(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("update_table_blog").innerHTML = this.responseText;

            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_review=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}




//Delete blog
function delete_season(id) {

    var txt;
    var r = confirm('Are You Sure?', 'top center', 'Do You Want to Delete?');
    if (r == true) {
        var nm = id;

        // Return Request
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById('season_response' + id).style.display = 'none';


            }
        };
        //Make Request
        xhttp.open("GET", "php_scripts/ajax_data.php?delete_season=" + nm, true);
        xhttp.send();
    } else {
        txt = "You pressed Cancel!";
    }

}



function edit_blog() {
    var form = document.forms.namedItem("blog_edit_form");
    document.getElementById('loader').style.display = "block";
    document.getElementById('response').innerHTML = "Please Wait While you updates is being save";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('loader').style.display = "none";

            document.getElementById('response').innerHTML = "Update Succesfull";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#blog_edit_response")[0].click();

        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php", true);
    xhttp.send(data);
}

function edit_blog_draft() {
    var form = document.forms.namedItem("blog_edit_form");
    document.getElementById('loader').style.display = "block";
    document.getElementById('response').innerHTML = "Please Wait While you updates is being save";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('loader').style.display = "none";

            document.getElementById('response').innerHTML = "Update Succesfull";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#blog_edit_response")[0].click();

        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php", true);
    xhttp.send(data);
}



function edit_review() {
    var form = document.forms.namedItem("review_edit_form");
    document.getElementById('loader').style.display = "block";
    document.getElementById('response').innerHTML = "Please Wait While you updates is being save";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('loader').style.display = "none";

            document.getElementById('response').innerHTML = "Update Succesfull";
            document.getElementById("custom-modal").innerHTML = this.responseText;

            $("#blog_edit_response")[0].click();
            if ($("#is_draft").prop("checked") == true) {
                window.location.href = "https://www.revounts.com.au/revounts_cms/draft_review_1.php?dashboard=admin&status=1&un=admin&review_id=26&review_id=26&review_id=6&review_id=7&review_id=8&review_id=9&review_id=31";
                console.log('yes Saved');
            }
        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php", true);
    xhttp.send(data);
}

function edit_review_draft() {
    var form = document.forms.namedItem("review_edit_form");
    document.getElementById('loader').style.display = "block";
    document.getElementById('response').innerHTML = "Please Wait While you updates is being save";
    var data = new FormData(form);
    // Return Request
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById('loader').style.display = "none";

            document.getElementById('response').innerHTML = "Update Succesfull";
            document.getElementById("custom-modal").innerHTML = this.responseText;

            $("#blog_edit_response")[0].click();
            console.log($("#is_draft").prop("checked"));
            if ($("#is_draft").prop("checked") == true) {
                console.log('yes Saved');
            } else {

                window.location.href = "https://www.revounts.com.au/revounts_cms/all_review_1.php?dashboard=admin&status=1&un=admin&review_id=26&review_id=26&review_id=6&review_id=7&review_id=8&review_id=9";
            }

        }
    };
    //Make Request
    xhttp.open("POST", "php_scripts/ajax_data.php", true);
    xhttp.send(data);
}



function add_image() {



    document.getElementById("loader").style.display = "block";

    var form = document.forms.namedItem("media_form");

    var oOutput = document.querySelector("div"),
        oData = new FormData(form);

    var oReq = new XMLHttpRequest();
    oReq.open("POST", "php_scripts/ajax_data.php", false);
    oReq.onload = function (oEvent) {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("loader").style.display = "none";
            document.getElementById("custom-modal").innerHTML = this.responseText;
            $("#store_response")[0].click();
            document.getElementById("error_box").style.display = "none";

        }
    };

    oReq.send(oData);
    ev.preventDefault();


}