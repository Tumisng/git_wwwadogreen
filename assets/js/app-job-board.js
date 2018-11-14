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
    loadAllJobs();

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

//Loading of Jobs - AJAX on page startup
function loadAllJobs() {
    var all;

    $.ajax({
        url: "load_data.php",
        method: "POST",

        data: {all:1},
        success: function (data) {
//            console.log(data);
            $('#job-board-listing').html(data);
        }
    });
}

//TODO:NATie Make this work
function loadOpenJobs() {
    var sector;

    $.ajax({
        url: KQ_Url + "/ajax/Recruitment/getOpenJobs.php",
        method: "POST",
        datatype: "json",

        success: function (data) {
            console.log(data);
//          Move only values from Array [2] into a var
            var objSectors = data[2];
//            Cycle through objSectors which holds the actual values
            var returnHtml ='';
            returnHtml += '<h3>Sectors:</h3>';
            for (var i = 0; i < objSectors.length; i++) {
                returnHtml += '<div class="col-md-12"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' +  objSectors[i]['DisplayValue'] + '" ></input></div>'

//                console.log(objSectors[i]['DisplayValue']);

            }
            console.log(returnHtml);
            $('#sector_container').html(returnHtml);
        }
    });
}

function loadAllSectors() {
    var sector;

    $.ajax({
        url: KQ_Url + "/ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector",
        method: "POST",
        datatype: "json",

        success: function (data) {
            console.log(data);
//          Move only values from Array [2] into a var
            var objSectors = data[2];
//            Cycle through objSectors which holds the actual values
            var returnHtml ='';
            returnHtml += '<h3>Sectors:</h3>';
            for (var i = 0; i < objSectors.length; i++) {
                returnHtml += '<div class="col-md-12"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' +  objSectors[i]['DisplayValue'] + '" ></input></div>'

//                console.log(objSectors[i]['DisplayValue']);

            }
            console.log(returnHtml);
            $('#sector_container').html(returnHtml);
        }
    });
}

//TODO:NATIE Need to make this part of the loading jobs part in js as you already loading all the jobs therefore just push all the countries into an array;
function loadCountries() {
    var sector;

    $.ajax({
        url: KQ_Url + "/ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes&f=Country",
        method: "POST",
        datatype: "json",

        success: function (data) {
            console.log(data);
//          Move only values from Array [2] into a var
            var objSectors = data[2];
//            Cycle through objSectors which holds the actual values
            var returnHtml ='';
            returnHtml += '<h3>Sectors:</h3>';
            for (var i = 0; i < objSectors.length; i++) {
                returnHtml += '<div class="col-md-12"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "myFunction(this)"  type = "submit" value="' +  objSectors[i]['DisplayValue'] + '" ></input></div>'

//                console.log(objSectors[i]['DisplayValue']);

            }
            console.log(returnHtml);
            $('#sector_container').html(returnHtml);
        }
    });
}