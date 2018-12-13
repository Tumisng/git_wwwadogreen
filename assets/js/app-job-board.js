/*
 * app-job-boards.js for job board functionality
 *
 * Author: Natie Rautenbach
 * Date Written:14Nov2018
 * (c) AdoGreen Africa 2018
 */
$(function ()
    {
       $('#loadingmessage').show();
        loadAllSectors();
        loadOpenJobs();



    // Custom dropdown for countries
        $(".selLabel").click(function ()
        {
                $('.country-dropdown').toggleClass('active');
        });

        $(".setLabel-Sector").click(function ()
        {
                $('.sector-dropdown').toggleClass('active');
        });


        $("#listCountries").click(function ()
        {

            $('.country').click( function() 
            {
                $('.selLabel').text($(this).text());
                $('.country-dropdown').removeClass('active');
                fillCountry($(this).text().trim());
            });

        });

        $("#listSectors").click(function ()
        {

            $('.sectors').click( function()
            {
                $('.setLabel-Sector').text($(this).text());
                $('.sector-dropdown').removeClass('active');
               changeSector($(this).text().trim());
            });

        });




    });

//Search bar inputs
$("#search-input").on("keyup", function ()
    {
        var search = $(this).val().trim().toLowerCase();
        $(".card-jobs").show().filter(function ()
            {
                return $(this).text().toLowerCase().indexOf(search) < 0;
            }).hide();
    });




function loadOpenJobs()
    {
        $.ajax({
            url: KQ_Url + "/ajax/Recruitment/getOpenJobs.php",
            method: "POST",
            datatype: "json",

            success: function (data)
                {
//          console.log(data);
                    $('#loadingmessage').hide();

                    loadJobs(data);

                }
        });
    }

function changeSector(objSectorName)
    {
        var sector = objSectorName;

        $.ajax({
            url: KQ_Url + "/ajax/Recruitment/getOpenJobs.php?Sector=" + sector,
            method: "POST",
            datatype: "json",

            success: function (data)
                {
                    loadJobs(data);
                }
        });
    }


function fillCountry(objCountryName)
    {

//
        var country = objCountryName;

        $.ajax({

            url: KQ_Url + "/ajax/getCmsDataLF.php?c=Job&s=OpenDate&Status=open&Published=yes&Country="+country,
            method: "POST",
            datatype: "json",

            success: function (data)
                {

                    $('#loadingmessage').hide();
                    loadJobs(data);

                }
        });
    }

function loadAllSectors()
    {

        $.ajax({
            url: KQ_Url + "/ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector",
            method: "POST",
            datatype: "json",

            success: function (data)
                {
//            console.log(data);
//          Move only values from Array [2] into a var
                    var objSectors = data[2];
                    objSectors.sort(sortArray);
//            Cycle through objSectors which holds the actual values
                    var returnHtml = '';
                    returnHtml += '';

                    for (var i = 0; i < objSectors.length; i++)
                        {
                        returnHtml += '<li class="sectors"><span> '+ objSectors[i]['DisplayValue'] +'</span></li>';

     //      returnHtml += '<div class="col-md-12"><input class="btn btn-block button-green" id = "sectorBtn" name = "sectorBtn"  onclick= "changeSector(this)"  type = "submit" value="' + objSectors[i]['DisplayValue'] + '" ></input></div>'

//                console.log(objSectors[i]['DisplayValue']);

                        }
//            console.log(returnHtml);
                    $('#listSectors').html(returnHtml);
                }
        });
    }

function loadJobs(data)
    {
        console.log(data);
//          Move only values from Array [2] into a var
        var objJobs = data[2];

        var returnHtml = '';
//            Var to hold all countries that are
        var objCountry = [];

//            Cycle through objJob which holds the actual values
        for (var i = 0; i < objJobs.length; i++)
            {

//          Push all the Country names into an array
                if (objCountry.indexOf(objJobs[i]['Country']) === -1)
                    {
                        objCountry.push(objJobs[i]['Country']);
//                    console.log(' unique push ' + objCountry);
                    }

                returnHtml += '<li>';
                returnHtml += '  <div class="card-jobs card-green">';
                returnHtml += '     <a href="' + Ado_Url + '/jobs-africa/job-details.php?id=' + objJobs[i]['AppDataId'] + '&name=' + objJobs[i]['JobTitle'] + '">';
                returnHtml += '         <div class="img-job col-md-2">';
                returnHtml += '             <img class="img-responsive" width="100%" src="' + KQ_Url + '/DMSimage.php?i=' + objJobs[i]['ImageUploadedId'] + '">';
                returnHtml += '         </div>';
                returnHtml += '         <div class="col-md-10 card-content">';
                returnHtml += '             <h4 class="title">' + objJobs[i]['JobTitle'] + '</h4>';
                returnHtml += '             <p class="description hidden-xs">' + objJobs[i]['ShortDescription'] + '</p>';
                returnHtml += '             <h6 class="category pull-right hidden-xs">' + objJobs[i]['Sector'] + ' / ' + objJobs[i]['Location'] + ' / ' + objJobs[i]['Country'] + '</h6>';
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
        var returnHtmlCountry2;
        returnHtmlCountry2 = '';
        for (var i = 0; i < objCountry.length; i++)
            {
//                console.log(objCountry[i]);
                var picFlag = objCountry[i].replace(/\s/g, '');
                returnHtmlCountry2 += '<li class="country"><span><img  width="25px" src="' + Ado_Url + '/assets/img/flags/' + picFlag + '.svg"> '+objCountry[i]+'</span></li>';
            }


//           console.log(objCountry);
        $('#job-board-listing').html(returnHtml);
        $('#listCountries').html(returnHtmlCountry2);
        $("#search-input").focus();
    }

function sortArray(a, b)
    {
        if (a['DisplayValue'] === b['DisplayValue'])
            {
                return 0;
            } else
            {
                return (a['DisplayValue'] < b['DisplayValue']) ? -1 : 1;
            }
    }


