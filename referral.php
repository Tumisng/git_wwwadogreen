<?php 
    $pathConfig = $_SERVER['DOCUMENT_ROOT'];
    $pathConfig .= '/phpTraining/environment/config.php';
    include_once $pathConfig;

	$strPageTitle = 'Referral AdoGreen';
	$strPageDescription = 'AdoGreen Africa Recruitment Agency - specialist local recruitment in Africa - Power Generation Jobs, Renewable Energy Recruitment, Mining jobs, Renewable Energy Projects, Solar Jobs, Mining Recruitment';
	$strPageKeywords = 'Africa Recruitment Jobs, Mining recruitment, Construction Jobs, Engineering recruitment, Renewable Energy recruitment, Project managers jobs';
	$strPageAuthor = 'AdoGreen Africa Recruiment Agency';


    include_once ENV_ROOT . 'includes/header.php';
?>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3 hidden-xs"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <h3>Referral</h3>
                    <p>Please note that all referrals are confidential, so we will not disclose your name to your referral.</p>
                        <ul>
                            <li>You are more than welcome to let them know that you have referred them.</li>
                            <li>Referrals work on a first come first serve basis, so should we already be in contact with the person you have referred, or where someone else has already referred them for this position, we will let you know in the next week or two as we come to your referral information. Our system automatically contacts the person you have referred on our behalf.</li>
                            <li>Should the person you have referred be in line and interested in this position, we will be submitting their application, and only upon CV submission, will we inform you that the process has started for them.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p>Commission pay-out is processed only after the candidate starts with the company where we will then require your banking details.</p>
                </div>
                <div class="panel-body"> <!--../scripts/submit_cv.php-->
                  
                <form id="refForm" class="reg-page" method="post" enctype="multipart/form-data" action="<?php echo ENV_RSS;?>ajax/getJobForm2.php">
                    <!--  -->
                    <input id="refurl" type="hidden" name="RefURL" value="">
                    <input type="hidden" name="BtnType" value="">
                    <input type="hidden" name="JobId" value="">
                    <input type="hidden" name="FormType" value="Referral">

                    <fieldset class="no-padding">
                        
                        <div class="row">
        
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your First Name - <span style="font-weight:100;">Please put your information here</span><span class="loud">*</span></label>
                                    <input id="RFN" type="text" name="ReferrerFirstName"  class="form-control" required>
                                </div>
                            </div>
                           
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                     <label>Your Last Name <span class="loud">*</span></label>
                                    <input id="RLN" type="text" name="ReferrerLastName"  class="form-control" required>
                                    
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your Email <span class="loud">*</span></label>
                                    <input type="email" id="RE" name="ReferrerEmail"  class="form-control"required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Your Tel <span class="loud">*</span></label>
                                    <input type="tel" id="RT" name="ReferrerTelephone" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
         
                                <div>
                                    <label>Job referring for  - <span style="font-weight:100;">Please select the job you are referring the person for</span><span class="loud">*</span></label>
                                    
                                    <select id="JobListing" required="">
                                        <option>General Job</option>
                                    </select>
                                   
                                    <ul id="live-search-wrapper" class="live-search">

                                    </ul>
                                </div>
                            </div>
           
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                <label>Referred Title - <span style="font-weight:100;">If you have this information please enter it.</span></label>
                                    <input type="text" name="ReferredTitle" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Company - <span style="font-weight:100;">If you have this information please enter it.</span></label>
                                    <input type="text" name="ReferredCompany" class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred First Name <span class="loud">*</span></label>
                                    <input type="text" name="ReferredFirstName" class="form-control" required="">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Last Name <span class="loud">*</span></label>
                                    <input type="text" name="ReferredLastName" class="form-control" required="">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Email</label>
                                    <input type="email" name="ReferredEmail" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-md-offset-0">
                                <div>
                                    <label>Referred Telephone</label>
                                    <input type="text" name="ReferredTelephone" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6 col-md-offset-0" style="margin-top:10px">
                                <div>
                                    <button id="RSE" class="btn btn-u btn-primary" >Refer Somebody else</button>
                                </div>
                            </div>
                            <br>
                             <div class="col-md-6 col-md-offset-0" style="margin-top:10px">
                                <div>
                                    <button id="Fin" class="btn btn-u btn-primary" name="Finish">Finished</button>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <br>
                </form>
                </div>
            </div>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs"></div>
        
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<?php
    include ENV_ROOT . 'includes/footer.php';
    include ENV_ROOT . 'includes/javascripts_basic.html';
?>


<script>
        
         var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };
        

    var FirstName = getUrlParameter('fn');
    var LastName = getUrlParameter('ln');
    var Email = getUrlParameter('e');
    var Telephone = getUrlParameter('t');
    var undefined;   
    

    
    if(typeof(FirstName != "undefined") && typeof(LastName != "undefined") && typeof(Email != "undefined") && typeof(Telephone != "undefined")){        
        $('#RE').attr('value', Email);
        $('#RFN').attr('value', FirstName);
        $('#RLN').attr('value', LastName);
        $('#RT').attr('value', Telephone);
    } else {
    }
    
    
        $('#JobListing').on('change',function(){
           var ID = $(this, 'option').val(); 
           $('input[name="JobId"]').attr('value',  ID);
        });
        
        function SortByJobTitle(x,y) {
            return ((x.JobTitle == y.JobTitle) ? 0 : ((x.JobTitle > y.JobTitle) ? 1 : -1 ));
        }
        
        
        var objSectors = {};
        
        Sectors();
        
    function Sectors(){
        var getSectors = $.ajax({
            dataType: 'json', //return data type
            type: 'get', //method type post or get
            url: '<?php echo ENV_RSS;?>ajax/getCmsDataLF.php?c=Lookup&Cabinet=Job',
            complete:function(){
                Jobs();
            }
        });

        getSectors.done(function(data){
               objSectors = data[2];  
        });
    }
        
    function Jobs(){
        var getJobs = $.ajax({
            dataType: 'json', //return data type
            type: 'get', //method type post or get
            url: '<?php echo ENV_RSS;?>ajax/getCmsDataLF.php?c=Job&Status=open'
        });

        getJobs.done(function(data){
                for(var i=0; i < data[2].length; i++){
                    for(var j=0; j < objSectors.length; j++){
                        data[2] = data[2].sort(SortByJobTitle); 
                        $('input[name="JobReferringFor"]').attr('value',  data[2][0].AppDataId);
                        if(data[2][i].Sector === objSectors[j].Value){
                           
                            document.getElementById("JobListing").innerHTML += '<option value="' + data[2][i].AppDataId + '">' + data[2][i].JobTitle + ' - ' + data[2][i].Location + ' - ' + objSectors[j].DisplayValue + '</option>';
                        }        
                    }
                }
            
        });
    }  

        
        $('#refurl').attr('value', window.location.href);
        $('#Fin').click(function(){
            $('#RSE').attr('value', '0');
            $('#Fin').attr('value', '1');
        });
        
        $('#RSE').click(function(){
            $('#Fin').attr('value', '0');
            $('#RSE').attr('value', '1');
        });
        
      $('#refForm').on('submit', function(){
          if($('input[name=ReferredEmail').val().trim().length != 0 || $('input[name=ReferredTelephone').val().trim().length != 0){
            //once the form has been submitted disable the click.  
            $('#Fin').attr('disabled', 'true');
            //even append loading screen.
            
          }else {
              alert("Please fill in the Referred Email or Referred Telephone Field.");
              return false;
          }
      });
    </script>
   
    </body>
</html>
