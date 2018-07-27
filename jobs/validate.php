<?php

                $firstname = '';
                $lastname = '';
                $emailAddress = '';
                $phoneNo = '';
                $nationality = '';
                $ethnicity = '';
                $relocation = '';
                $qualification = '';
                $qualificationYears = '';
                $jobTotal = '';
                $jobCompany = '';
                $jobSalary = '';
                $noticePeriod = '';
                $fileUpload = '';
                $extraComment = '';



                if ($_SERVER['REQUEST_METHOD'] == "POST")
                    {
                    $valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.

                    if (empty($_POST["firstName"]))
                        {
                        $firstNameErr = "First name is required";
                        $valid = false; //false
                        }
                    else
                        {
                        $firstName = test_input($_POST["firstName"]);
                        }
                    if (empty($_POST["lastName"]))
                        {
                        $lastNameErr = "Last name is required";
                        $valid = false;
                        }
                    else
                        {
                        $lastName = test_input($_POST["lastName"]);
                        }

                    //if valid then redirect
                    if ($valid)
                        {
                        header('Location: .php');
                        exit();
                        }
                    }
?>
