<?php include "../extensions/connection.php"; ?>

<form action="members.php" method="POST" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 1rem;">
            <div class="modal-header" style= "border-top-left-radius: 1rem; border-top-right-radius: 1rem;">
                <h5 class="modal-title" id="exampleModalLabel">REGISTER A MEMBER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="user-details">
                    <div class="field-input-img">
                        <label>Upload Member Profile:</label>
                        <img id="imgPreview" src="data:image/png;base64" style="width: 100px; height: 100px; margin-bottom: .5rem;">
                        <input type="file" name="user_img" id="user_img" accept=".png, .jpg, .jpeg" placeholder="Image" required onchange="readURL(this);">
                    </div>
                    <div class="field-input" style="width: calc(100% / 1 - 0px);">
                        <label>Full Name:</label>
                        <div class="field-name d-flex gap-2">
                            <input name="fname" id="fname" type="text" placeholder="First Name" required>
                            <input name="mname" id="mname" type="text" placeholder="Middle Name (Optional)">
                            <input name="lname" id="lname" type="text" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field-input">
                        <label>Address:</label>
                        <input name="address" id="address" type="text" placeholder="Address" required>
                    </div>
                    <div class="field-input">
                        <label>Contact:</label>
                        <input name="contact" id="contact" type="text" placeholder="ex. (09123456789)" required>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="male">
                        <input type="radio" name="gender" id="female">
                        <input type="radio" name="gender" id="other">
                        <span class="gender-title">Gender</span>
                        <div class="gender-categ">
                            <label for="male">
                                <span class="dot one"></span>
                                <span class="gender">Male</span>
                            </label>
                            <label for="female">
                                <span class="dot two"></span>
                                <span class="gender">Female</span>
                            </label>
                            <label for="other">
                                <span class="dot three"></span>
                                <span class="gender">Other</span>
                            </label>
                        </div>
                    </div>
                    <div class="field-input">
                        <label>Birthdate:</label>
                        <input name="birthdate" id="birthdate" type="date" required>
                    </div>
                    <div class="field-input">
                        <label>Membership Date:</label>
                        <input name="member_date" id="member_date" type="date" required>
                    </div>
                    <div class="field-input">
                        <label>Monthly Start:</label>
                        <input name="monthly_start" id="member_start" type="date" required>
                    
                        <label>Monthly Due:</label>
                        <input name="monthly_due" id="monthly_due" type="date" disabled>
                    </div>
                    <div class="field-input">
                        <label for="type">Membership Type:</label>
                        <select class="form-select" id="type" name="type">
                            <option value="Regular">Regular</option>
                            <option value="Student">Student</option>
                        </select>
                    </div>
                    <div class="fied-input">
                        <label for="type">Validity:</label>
                        <select class="form-select" id="Validity" name="type">
                            <option selected>-</option>
                            <option value="one">1 Month</option>
                            <option value="three">3 Months</option>
                            <option value="six">6 Months</option>
                            <option value="twelve">12 Months</option>
                        </select>
                    </div>
                    <div class="field-input">
                        <label>Total Fee:</label>
                        <input name="total_fee" id="total_fee" type="text" disabled>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="addMember" class="btn btn-success" id="addMember">Register Member</button>
                </div>
            </div>
        </div>
    </div>
</form>