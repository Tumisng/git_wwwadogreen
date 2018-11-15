/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * Author: Natie Rautenbach
 * Date Written:
 * (c) AdoGreen Africa 2018
 */
$(function () {
    $("#search-input").focus();

    loadAllSectors();
    loadOpenJobs();

    $('#sector').change(function () {
        var sector = $(this).val();
        $.ajax({
            url: "load_data.php",
            method: "POST",
            data: {sector, sector},
            success: function (data) {
                $('#show_sector').html(data);
            }
        });
    });
});

//Search bar inputs
$("#search-input").on("keyup", function () {
    var search = $(this).val().trim().toLowerCase();
    $(".card-jobs").show().filter(function () {
        return $(this).text().toLowerCase().indexOf(search) < 0;
    }).hide();
});

$(function() {
   'use strict';
   $('#search-input').on('click',function() {
       $(this).css({
           'background-color':'#00a500',
           "color":"white",
           "padding":"5px",
           "height":"60px",
           "font-size":"24px"
       });
   });
});



function myFunction(objSectorName)
{
    var sector = objSectorName.value;
    $.ajax({
        url: "load_data.php",
        method: "POST",

        data: {sector:sector},
        success: function (data) {
            $('#show_sector').html(data);
        }
    });
}

function function_fill_by_country(objCountryName)
{
    var country = objCountryName.value;

    $.ajax({
        url: "load_data.php",
        method: "POST",

        data: {country:country},
        success: function (data) {
            $('#show_sector').html(data);
        }
    });
}

////Loading of Jobs - AJAX on page startup
//function loadAllJobs() {
//    var all;
//
//    $.ajax({
//        url: "load_data.php",
//        method: "POST",
//
//        data: {all:1},
//        success: function (data) {
////            console.log(data);
//            $('#job-board-listing').html(data);
//        }
//    });
//}

//TODO:NATie Make this work
function loadOpenJobs() {

    $.ajax({
        url: KQ_Url + "/ajax/Recruitment/getOpenJobs.php",
        method: "POST",
        datatype: "json",

        success: function (data) {
            console.log(data);
//          Move only values from Array [2] into a var
            var objJobs = data[2];

            var returnHtml ='';
//            Var to hold all countries that are
            var objCountry = [];

//            Cycle through objJob which holds the actual values
            for (var i = 0; i < objJobs.length; i++) {

//          Push all the Country names into an array
                if(objCountry.indexOf(objJobs[i]['Country']) === -1) {
                    objCountry.push(objJobs[i]['Country']);
//                    console.log(' unique push ' + objCountry);
                }

                returnHtml += '<li>';
                returnHtml += '  <div class="card-jobs card-green">';
                returnHtml += '     <a href="' + Ado_Url + '/jobs-africa/job-details.php?id=' + objJobs[i]['AppDataId'] + '&name=' + objJobs[i]['JobTitle'] + '">';
                returnHtml += '         <div class="img-job col-md-2">';
                returnHtml += '             <img class="img-responsive" width="100%" src="' + KQ_Url + '/DMSimage.php?i='+ objJobs[i]['ImageUploadedId'] + '">';
                returnHtml += '         </div>';
                returnHtml += '         <div class="col-md-10 card-content">';
                returnHtml += '             <h4 class="title">' + objJobs[i]['JobTitle'] + '</h4>';
                returnHtml += '             <p class="description hidden-xs">'  + objJobs[i]['ShortDescription'] + '</p>';
                returnHtml += '             <h6 class="category pull-right hidden-xs">' + objJobs[i]['Sector'] + ' / ' + objJobs[i]['Location'] +  ' / ' + objJobs[i]['Country'] + '</h6>';
                returnHtml += '             <h6 class="category pull-left hidden-xs"> Date Posted:' + objJobs[i]['OpenDate'] + '</h6>';
                returnHtml += '         </div>';
                returnHtml += '         <div>';
                returnHtml += '              <p class="hidden-lg hidden-md hidden-sm" ><small >' + objJobs[i]['Sectpr'] + ' / ' + objJobs[i]['Location'] + ' / ' + objJobs[i]['Country'] + '</small></p>';
                returnHtml += '         </div>';
                returnHtml += '     </a>';
                returnHtml += ' </div>';
                returnHtml += '</li>';
            }

            returnHtml += '</ul>';

// Upload all the unique Flags
            var returnHtmlCountry;
            returnHtmlCountry = '<h3>Choose Country:</h3>';

            for (var i = 0; i < objCountry.length; i++) {
                console.log(objCountry[i]);
                var picFlag = objCountry[i].replace(/\s/g, '');
                returnHtmlCountry += '<div class="col-md-3"><input class="img-flag-icon" id = "sectorBtn" name = "sectorBtn"  onclick= "function_fill_by_country(this)"  type = "image" src="' + Ado_Url + '/assets/img/flags/' + picFlag + '.svg" value="' +objCountry[i] + '" ></input></div>';

                console.log(returnHtmlCountry);

            }

//           console.log(objCountry);
            $('#country_container').html(returnHtmlCountry);
            $('#job-board-listing').html(returnHtml);
        }
    });
}

function loadAllSectors() {

    $.ajax({
        url: KQ_Url + "/ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector",
        method: "POST",
        datatype: "json",

        success: function (data) {
//            console.log(data);
//          Move only values from Array [2] into a var
            var objSectors = data[2];
//            Cycle through objSectors which holds the actual values
            var returnHtml ='';
            returnHtml += '<h3>Sectors:</h3>';

            for (var i = 0; i < objSectors.length; i++) {
                returnHtml += '<div class="col-md-12"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' +  objSectors[i]['DisplayValue'] + '" ></input></div>'

//                console.log(objSectors[i]['DisplayValue']);

            }
//            console.log(returnHtml);
            $('#sector_container').html(returnHtml);
        }
    });
}



