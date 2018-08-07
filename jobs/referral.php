

<?php
$strEnvConfigFile = 'environment/config.php';
include_once $strEnvConfigFile;

$strPageTitle = 'Referral AdoGreen';
$strPageDescription = 'AdoGreen Africa Recruitment Agency - specialist local recruitment in Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment';
$strPageKeywords = 'Africa Recruitment Jobs, Mining recruitment, Construction Jobs, Engineering recruitment, Renewable Energy recruitment, Project managers jobs';
$strPageRobot = 'NOINDEX, NOFOLLOW';


include_once ENV_ROOT . 'inc/header.php';
?>



            <div class="page-header" style="background-image: url(assets/img/recommend.jpg);">
                <div class="container page-name"> <!--Start: Heading 1 and subtitle-->
                    <h1 class="text-center">Referral</h1>
                    <p class="lead text-center">Quick and easy steps</p>
                </div><!--End: Heading 1 and subtitle-->

                <div class="container " id="basic" style="background-image: url(assets/img/pattern.png); height: 1300px;"><!--Start: Body-->
                    <div class="row"><!--Start: Row 1 (Heading and bullets)-->
                        <div class="col-xs-12 col-sm-2">
                        </div>
                        <div  class="col-xs-12 col-sm-8">
                            <h1 class="text-center">Guidelines</h1>
                            <p>Please note that all referrals are confidential, so we will not disclose your name to your referral.</p>
                            <ul ty>
                                <li type="a" >You are more than welcome to let them know that you have referred them.</li>
                                <li type="a" >Referrals work on a first come first serve basis, so should we already be in contact with the person you have referred, or where someone else has already referred them for this position, we will let you know in the next week or two as we come to your referral information. Our system automatically contacts the person you have referred on our behalf.</li>
                                <li type="a" >Should the person you have referred be in line and interested in this position, we will be submitting their application, and only upon CV submission, will we inform you that the process has started for them.</li>
                            </ul>
                            <p>&nbsp;</p>
                            <p>Commission pay-out is processed only after the candidate starts with the company where we will then require your banking details.</p>
                        </div>
                    </div><!--End: Row 1 (Heading and bullets)-->

                    <div class="row"><!--Start: Row 2 (Progressbar)-->
                        <div class="col-xs-12 col-sm-2">
                        </div>
                        <div  class="col-xs-12 col-sm-8">
                            <form id="refForm">

                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active">Your Personal Information</li>
                                    <li>Choose Referral job below</li>
                                    <li>Candidate Information</li>
                                </ul>
                            </form>
                        </div>
                    </div><!--End: Row 2 (Progressbar)-->


                    <div class="row"><!--Start: Row 3 (Fieldsets)-->
                        <div class="col-xs-12 col-sm-2">
                        </div>
                        <div  class="col-xs-12 col-sm-8">

                            <form  id="refForm" class="reg-page" method="post" enctype="multipart/form-data" action="<?php echo ENV_RSS; ?>ajax/getJobForm2.php"><!--Start: Form-->
                                <input id="refurl" type="hidden" name="RefURL" value="">
                                <input type="hidden" name="BtnType" value="">
                                <input type="hidden" name="JobId" value="">
                                <input type="hidden" name="FormType" value="Referral">
                                <!-- fieldsets -->
                                <fieldset> <!--Start: Fieldset 1 (Your Information)-->
                                    <h2 class="fs-title">Your Personal Information</h2>
                                    <h3 class="fs-subtitle">Enter your information below</h3>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control input-lg" id="RFN" type="text" name="ReferrerFirstName"  placeholder="Your Firstname" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control input-lg" id="RLN" type="text" name="ReferrerLastName" placeholder="Your lastname" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" id="RE" name="ReferrerEmail"  placeholder="Your Email" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="tel" class="form-control input-lg" id="RT" name="ReferrerTelephone" placeholder="Phone number" required="">

                                        </div>
                                    </div>

                                    <button   class="next btn btn-round btn-info" >Next</button>


                                </fieldset><!--End: Fieldset 1 (Your Information)-->

                                <fieldset><!--Start: Fieldset 2 (Choose job below)-->
                                    <h2 class="fs-title">Choose job below</h2>
                                    <h3 class="fs-subtitle">. </h3>

                                    <!-- Inputs hidden to addjust div height-->

                                    <div class="form-group">
                                        <label>Job referring for  - <span style="font-weight:100;">Please select the job you are referring the person for</span><span class="loud"> *</span></label>
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                                            <select class="form-control" id="JobListing" required="">
                                                <option> </option>
                                            </select>
                                            <ul id="live-search-wrapper" class="live-search">

                                            </ul>
                                        </div>
                                    </div>
                                    <h2 class="fs-title">Candidates Current work information</h2>


                                    <div class="form-group">
                                        <label>Referred Title - <span style="font-weight:100;">If you have this information please enter it.</span></label>
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control input-lg"  type="text" name="ReferredTitle" placeholder="Enter Candidates job Title">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control input-lg"   name="ReferredCompany" placeholder="Enter Company he or she works at">
                                        </div>

                                    </div>



                                    <button   class="previous btn btn-round btn-info" >Previous</button>
                                    <button   class="next btn btn-round btn-info" >Next</button>

                                </fieldset><!--End: Fieldset 2 (Choose job below)-->

                                <fieldset><!--Start: Fieldset 3 (Choose job below)-->
                                    <h2 class="fs-title">Candidate Information</h2>
                                    <h3 class="fs-subtitle">Enter Candidate information below</h3>
                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control input-lg" id="RDFN" type="text" name="ReferredFirstName"  placeholder="Your Firstname" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input class="form-control input-lg" id="RDLN" type="text" name="ReferredLastName" placeholder="Your lastname" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control input-lg" id="RDE" name="ReferredEmail"  placeholder="Your Email" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group ">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="phone" class="form-control input-lg" id="RDT" name="ReferredTelephone" placeholder="Phone number" required="">
                                        </div>
                                    </div>

                                    <button   class="previous btn btn-round btn-info" >Previous</button>
                                    <button id="Fin" name="Finish" class="next btn btn-round btn-info" >Submit</button>
                                </fieldset><!--End: Fieldset 3 (Choose job below)-->
                            </form><!--Start: Form-->
                        </div>
                    </div><!--End: Row 3 (Fieldsets)-->


                </div><!--End: Body-->
                
          





<?php
include 'inc/js_scripts.php';
include 'inc/footer.php';
?>





<script>




    var getUrlParameter = function getUrlParameter(sParam)
        {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++)
                {
                    sParameterName = sURLVariables[i].split('=');

                    if (sParameterName[0] === sParam)
                        {
                            return sParameterName[1] === undefined ? true : sParameterName[1];
                        }
                }
        };


    var FirstName = getUrlParameter('fn');
    var LastName = getUrlParameter('ln');
    var Email = getUrlParameter('e');
    var Telephone = getUrlParameter('t');
    var undefined;


    if (typeof (FirstName != "undefined") && typeof (LastName != "undefined") && typeof (Email != "undefined") && typeof (Telephone != "undefined"))
        {
            $('#RE').attr('value', Email);
            $('#RFN').attr('value', FirstName);
            $('#RLN').attr('value', LastName);
            $('#RT').attr('value', Telephone);
        }

    $('#JobListing').on('change', function ()
        {
            var ID = $(this, 'option').val();
            $('input[name="JobId"]').attr('value', ID);
        });

    function SortByJobTitle(x, y)
        {
            return ((x.JobTitle == y.JobTitle) ? 0 : ((x.JobTitle > y.JobTitle) ? 1 : -1));
        }


    var objSectors = {};

    Sectors();

    function Sectors()
        {
            var getSectors = $.ajax({
                dataType: 'json', //return data type
                type: 'get', //method type post or get
                url: '<?php echo ENV_RSS; ?>ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job&Field=Sector',
                complete: function ()
                    {
                        Jobs();
                    }
            });

            getSectors.done(function (data)
                {
                    objSectors = data[2];
                });
        }

    function Jobs()
        {
            var getJobs = $.ajax({
                dataType: 'json', //return data type
                type: 'get', //method type post or get
                url: '<?php echo ENV_RSS; ?>ajax/getCmsDataLF.php?c=Job&Status=open&Published=yes'
            });

            getJobs.done(function (data)
                {
                    for (var i = 0; i < data[2].length; i++)
                        {
                            for (var j = 0; j < objSectors.length; j++)
                                {
                                    data[2] = data[2].sort(SortByJobTitle);
                                    $('input[name="JobReferringFor"]').attr('value', data[2][0].AppDataId);
                                    if (data[2][i].Sector === objSectors[j].Value)
                                        document.getElementById("JobListing").innerHTML += '<option value="' + data[2][i].AppDataId + '">' + data[2][i].JobTitle + ' - ' + data[2][i].Location + ' - ' + objSectors[j].DisplayValue + '</option>';
                                }
                        }
                });
        }
    ;


    $('#refurl').attr('value', window.location.href);
    $('#Fin').click(function ()
        {
            $('#RSE').attr('value', '0');
            $('#Fin').attr('value', '1');
        });

    $('#RSE').click(function ()
        {
            $('#Fin').attr('value', '0');
            $('#RSE').attr('value', '1');
        });

    $('#refForm').on('submit', function ()
        {
            if ($('input[name=ReferredEmail').val().trim().length != 0 || $('input[name=ReferredTelephone').val().trim().length != 0)
                {
                    //once the form has been submitted disable the click.
                    $('#Fin').attr('disabled', 'true');
                    //even append loading screen.

                } else
                {
                    alert("Please fill in the Referred Email or Referred Telephone Field.");
                    return false;
                }
        });
</script>



<script>


//jQuery time
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches
    var value = 0;

    $(".next").click(function ()
        {

            if (value == 0 && (document.getElementById('RFN').value.toString() == ''
                    || document.getElementById('RLN').value.toString() == ''
                    || document.getElementById('RE').value.toString() == ''
                    || document.getElementById('RT').value.toString() == '')
                    )
                {

                } else if (value == 1 && (document.getElementById('JobListing').value.toString() == '')
                    )
                {

                } else
                {
                    if (animating)
                        return false;
                    animating = true;

                    value++;
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();

                    //activate next step on progressbar using the index of next_fs
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function (now, mx)
                            {
                                //as the opacity of current_fs reduces to 0 - stored in "now"
                                //1. scale current_fs down to 80%
                                scale = 1 - (1 - now) * 0.2;
                                //2. bring next_fs from the right(50%)
                                left = (now * 50) + "%";
                                //3. increase opacity of next_fs to 1 as it moves in
                                opacity = 1 - now;
                                current_fs.css({
                                    'transform': 'scale(' + scale + ')',
                                    'position': 'absolute'
                                });
                                next_fs.css({'left': left, 'opacity': opacity});
                            },
                        duration: 800,
                        complete: function ()
                            {
                                current_fs.hide();
                                animating = false;
                            },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });

                }

        });

    $(".previous").click(function ()
        {
            if (animating)
                return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            value--;
            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now, mx)
                    {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale previous_fs from 80% to 100%
                        scale = 0.8 + (1 - now) * 0.2;
                        //2. take current_fs to the right(50%) - from 0%
                        left = ((1 - now) * 50) + "%";
                        //3. increase opacity of previous_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({'left': left});
                        previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                    },
                duration: 800,
                complete: function ()
                    {
                        current_fs.hide();
                        animating = false;
                    },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });


        });

    $(".submit").click(function ()
        {
            //return false;
        })

</script>
