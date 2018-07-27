<div  class="col-xs-12 col-sm-8">
    <h6 class="text-center">Basic information</h6>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control " id="Name"  name="FirstName" placeholder="First Name" required="">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control input-lg" id="lastName" name="LastName"  placeholder="Last Name" required="">
        </div>

    </div>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control input-lg" id="Email" name="Email" placeholder="Email address" required="">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
            <input type="phone" class="form-control input-lg" id="Cell" name="Cell" placeholder="Phone number" required="">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
            <input type="text" class="form-control input-lg" id="country-list" name="Nationality"  placeholder="Nationality (start typing the country name)" required="">
        </div>
    </div>

    <div class="form-group">
        <label for="Relocate">Ethnicity?</label>
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-users"></i></span>
            <select class="form-control" id="Ethnic" name="Ethnic" data-placeholder="Choose one..." required="">
                <option>Black</option>
                <option>White</option>
                <option>Colored</option>
                <option>Indian</option>
                <option>Asian</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="Relocate">Willing To Relocate?</label>
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-home"></i></span>
            <select class="form-control" id="Relocate" name="Relocate" data-placeholder="Choose one..." >
                <option>Yes</option>
                <option>No</option>
            </select>
        </div>
    </div>



    <hr class="hr-lg">

    <h6 class="text-center">Tell Us About Your Qualification/s</h6>
    <hr class="hr-lg">
    <div class="form-group">
        <label for="Relocate">Qualification + Final year of that experience*</label>
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-home"></i></span>
            <select class="form-control" id="Qualification" name="Qualification" data-placeholder="Choose one..." required="">
                <option>None</option>
                <option>High School</option>
                <option>Certificate</option>
                <option>Diploma</option>
                <option>Bachelors</option>
                <option>Masters</option>
                <option>Doctorate</option>
                <option>Other</option>
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="Relocate">Years Of Work Experience*</label>
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-home"></i></span>
            <select class="form-control" id="YearsExperience" name="YearsExperience" data-placeholder="Choose one..." required="">
                <option>None</option>
                <option>Less Than 1 Year</option>
                <option>1 - 2 Years</option>
                <option>3 -5 Years</option>
                <option>6 - 10 Years</option>
                <option>More Than 10 Years</option>
            </select>
        </div>
    </div>

    <hr class="hr-lg">

    <h6 class="text-center">Tell Us About Your Current Employer</h6>
    <hr class="hr-lg">
    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
            <input type="text" class="form-control input-lg" id="JobTitleCandidate" name="JobTitleCandidate"  placeholder="Current Job Title" required="">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
            <input type="text" class="form-control input-lg" id="CompanyName" name="CompanyName" placeholder="Current Company" required="">
        </div>
    </div>

    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>
            <input type="text" class="form-control input-lg" id="Salary" name="Salary" placeholder="Current Salary (Your Basic)" required="">
        </div>
    </div>

    <div class="form-group">
        <label for="Relocate">Notice Period</label>
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            <select class="form-control" id="NoticePeriod" name="NoticePeriod" data-placeholder="Choose one..." required="">
                <option>None</option>
                <option>Immediately</option>
                <option>1 Week</option>
                <option>2 Weeks</option>
                <option>30 Days</option>
                <option>Calendar Month</option>
                <option>2 Months</option>
                <option>3 Months</option>
                <option>Other</option>
            </select>
        </div>
    </div>

    <label>Attach CV (must be a doc, docx or PDF. No scanned CV's please)</label>
    <div class="form-group">
        <div class="input-group ">
            <span class="input-group-addon"><i class="fa fa-cloud-upload"></i></span>
            <input type="file"  name="FileUpload"  accept="application/pdf, application/msword" id="fileUpload" class="btn btn-block btn-primary" required="">
        </div>
    </div>
    <label>Any Extra Comment?</label>

    <div class="form-group">
        <textarea type="text" name="Comment" id="Comment" class="form-control" rows="4" ></textarea>
    </div>
    <button id="submit" name="submit" type="submit" value="Submit" class="button button-green btn-block">Submit</button>

</div> 