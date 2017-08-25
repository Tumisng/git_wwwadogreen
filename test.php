Get application info
Load info into an array

Create Candidate = FALSE
Create Application = FALSE
Upload CV = FALSE
Duplicate Application Email = FALSE

Check for duplicate email
If (No duplicate Email) {
    Create Candidate = TRUE
    Create Application = TRUE
    Successful Application Email = TRUE
}
if (Duplicate Email) {
    Check for Duplicate Application
    If (duplicate Application) {
        Do nothing.
        Duplicate Application Email = TRUE
    } elseif (no duplication application) {
        Copy current fields to Description field - Update Current Fields
        Create application = TRUE
        Upload CV = TRUE
        Successful Application Email = TRUE
        
    }
}