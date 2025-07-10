<?php 
include 'partials/header.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/StartProgram.css">
    <link rel="stylesheet" href="build/css/main.css">
    <head><link rel="stylesheet" href="build/css/head.css"></head>
    <script src="build/jquery/dist/jquery.min.js"></script>
</head>
<form action = "start.php" method="post" enctype="multipart/form-data">
    <div id="startEvents" class="startEvent">
        <div class="titles">Volunter Program Information</div>
        <div class="topContainer d-flex flex-column">
            <div class="container-fluid d-flex flex-column">
                <div class="tags">Program Title</div>
                <input type="text" name ="title"class="form-control ms-3" placeholder="Program Title" required>
            </div>
            <div class="container-fluid d-flex flex-column">
                <div class="tags">Organization Name</div>
                <input type="text" name="orgName" class="form-control ms-3" placeholder="Organizational Name" required>
            </div>
        </div>
        <div class="secondContainer d-flex flex-column">
            <div class="container-fluid d-flex flex-column">
                <div class="titles">Person In Charge</div>
                <div class="container d-flex gap-3">
                    <div class="container-fluid">
                        <p class="tags">First name</p>
                        <input name="first" type="text" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="container-fluid">
                        <p class="tags">Last name</p>
                        <input name="last" type="text" class="form-control" placeholder="Last Name" required>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex flex-column">
                <div class="container d-flex gap-3">
                    <div class="container-fluid">
                        <p class="tags">Email</p>
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="container-fluid">
                        <p class="tags">Contacts</p>
                        <input name="contact" type="number" class="form-control" placeholder="Contact Number" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="thirdContainer d-flex flex-column">
            <div class="titles">Program Details</div>
            <div class="container-fluid">
                <p class="tags">Number of Volunteers Needed</p>
                <input name="response_limit" type="number" class="form-control" placeholder="No. of Volunteers" required>
            </div>
            <div class="sched">
                <div class="container-fluid">
                    <p class="tags">Program Schedule</p>
                    <input type="date" name="date" id="" class="form-control" required>
                </div>
                <div class="container-fluid">
                    <p class="tags">Time</p>
                    <div class="container-fluid d-flex gap-3">
                        <input type="time" name="time" id="" class="form-control" required>
                        <p>to</p>
                        <input type="time" name="time1" id="" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <p class="tags">Location</p>
                <input type="text" name="location" id="" class="form-control" placeholder="Location" required>
            </div>
            <div class="container-fluid">
                <p class="tags">How to get there?</p>
                <textarea name="loc_Dscrptn" id="" cols="30" rows="10" class="form-control" placeholder="Description" required></textarea>
            </div>
            <div class="container-fluid">
                <p class="tags">Upload your program photo</p>
                <p style="font-size: 12px;">This Picture will shown to your program</p>
                <img src="" alt="" class="preview" id="prev">
                <input type="file" name="program_image" id="file" required>
            </div>
        </div>
        <div class="fourthContainer d-flex flex-column">
            <div class="titles">Scope of the Program</div>
            <p class="tags">Program Description</p>
            <textarea name="scope" id="" cols="30" rows="10" class="fomr-control" placeholder="Description..." required></textarea>
        </div>
        <div class="fifthContainer d-flex flex-column">
            <div class="titles">Volunteer Requirements</div>
            <div class="container-fluid d-flex gap-3">
                <div class="container-fluid">
                    <p class="tags">Age Bracket</p>
                    <input type="number" name="ageReq" id="" class="form-control" placeholder="Age Selected and Above" required>
                </div>
                <div class="container-fluid">
                    <p class="tags">Skills and Qualifications</p>
                    <input name="skills" type="text" class="form-control" placeholder="Skills" required>
                </div>
            </div>
            <p class="tagsSmall">* If you desire alterations to your information, kindle reach out to  the Administrator, <a href="">Contact Us</a></p>
        </div>
        <button type="submit" name="submit1" class="btn btn-primary px-4">SUBMIT</button>
    </div>
</form>
<?php include 'partials/footer.php'?>