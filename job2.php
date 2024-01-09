<html><head>
<style type="text/css">.lf-progress {
  -webkit-appearance: none;
  -moz-apperance: none;
  width: 100%;
  /* margin: 0 10px; */
  height: 4px;
  border-radius: 3px;
  cursor: pointer;
}
.lf-progress:focus {
  outline: none;
  border: none;
}
.lf-progress::-moz-range-track {
  cursor: pointer;
  background: none;
  border: none;
  outline: none;
}
.lf-progress::-webkit-slider-thumb {
  -webkit-appearance: none !important;
  height: 13px;
  width: 13px;
  border: 0;
  border-radius: 50%;
  background: #0fccce;
  cursor: pointer;
}
.lf-progress::-moz-range-thumb {
  -moz-appearance: none !important;
  height: 13px;
  width: 13px;
  border: 0;
  border-radius: 50%;
  background: #0fccce;
  cursor: pointer;
}
.lf-progress::-ms-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
.lf-progress::-ms-fill-lower {
  background: #ccc;
  border-radius: 3px;
}
.lf-progress::-ms-fill-upper {
  background: #ccc;
  border-radius: 3px;
}
.lf-progress::-ms-thumb {
  border: 0;
  height: 15px;
  width: 15px;
  border-radius: 50%;
  background: #0fccce;
  cursor: pointer;
}
.lf-progress:focus::-ms-fill-lower {
  background: #ccc;
}
.lf-progress:focus::-ms-fill-upper {
  background: #ccc;
}
.lf-player-container :focus {
  outline: 0;
}
.lf-popover {
  position: relative;
}

.lf-popover-content {
  display: inline-block;
  position: absolute;
  opacity: 1;
  visibility: visible;
  transform: translate(0, -10px);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
}

.lf-popover-content.hidden {
  opacity: 0;
  visibility: hidden;
  transform: translate(0, 0px);
}

.lf-player-btn-container {
  display: flex;
  align-items: center;
}
.lf-player-btn {
  cursor: pointer;
  fill: #999;
  width: 14px;
}

.lf-player-btn.active {
  fill: #555;
}

.lf-popover {
  position: relative;
}

.lf-popover-content {
  display: inline-block;
  position: absolute;
  background-color: #ffffff;
  opacity: 1;

  transform: translate(0, -10px);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
  transition: all 0.3s cubic-bezier(0.75, -0.02, 0.2, 0.97);
  padding: 10px;
}

.lf-popover-content.hidden {
  opacity: 0;
  visibility: hidden;
  transform: translate(0, 0px);
}

.lf-arrow {
  position: absolute;
  z-index: -1;
  content: '';
  bottom: -9px;
  border-style: solid;
  border-width: 10px 10px 0px 10px;
}

.lf-left-align,
.lf-left-align .lfarrow {
  left: 0;
  right: unset;
}

.lf-right-align,
.lf-right-align .lf-arrow {
  right: 0;
  left: unset;
}

.lf-text-input {
  border: 1px #ccc solid;
  border-radius: 5px;
  padding: 3px;
  width: 60px;
  margin: 0;
}

.lf-color-picker {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  height: 90px;
}

.lf-color-selectors {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.lf-color-component {
  display: flex;
  flex-direction: row;
  font-size: 12px;
  align-items: center;
  justify-content: center;
}

.lf-color-component strong {
  width: 40px;
}

.lf-color-component input[type='range'] {
  margin: 0 0 0 10px;
}

.lf-color-component input[type='number'] {
  width: 50px;
  margin: 0 0 0 10px;
}

.lf-color-preview {
  font-size: 12px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  padding-left: 5px;
}

.lf-preview {
  height: 60px;
  width: 60px;
}

.lf-popover-snapshot {
  width: 150px;
}
.lf-popover-snapshot h5 {
  margin: 5px 0 10px 0;
  font-size: 0.75rem;
}
.lf-popover-snapshot a {
  display: block;
  text-decoration: none;
}
.lf-popover-snapshot a:before {
  content: '⥼';
  margin-right: 5px;
}
.lf-popover-snapshot .lf-note {
  display: block;
  margin-top: 10px;
  color: #999;
}
.lf-player-controls > div {
  margin-right: 5px;
  margin-left: 5px;
}
.lf-player-controls > div:first-child {
  margin-left: 0px;
}
.lf-player-controls > div:last-child {
  margin-right: 0px;
}
</style>
</head><body>
    <table align="center" width="600" cellpadding="0" cellspacing="0" border="0" style="border:1px solid #999">
        <tbody><tr align="left">
            <td height="25" colspan="2" bgcolor="#666666" style="color:#FFF; padding-left:10px; font-weight:bold;">Profile information</td>
        </tr>
        <tr>
            <td height="25" align="left" width="150" style="padding-left:10px;">Title : </td>
            <td align="left">
                Mr. 
                <input type="radio" id="Title1" name="Title">
                Ms. 
                <input type="radio" id="Title2" name="Title">
                Mrs. 
                <input type="radio" id="Title3" name="Title"> 
                
                <span style="color:#F00;">*</span>                       
            </td>
        </tr>
        <tr>
            <td height="25" align="left" width="150" style="padding-left:10px;">Full name : </td>
            <td align="left"><input type="text" id="FullName" name="FullName" value="" style="width:250px;" requi> <span style="color:#F00;">*</span></td>
        </tr>
        <tr>
        <td height="25" align="left" style="padding-left:10px;">Age :</td>
        <td align="left"><input type="text" id="Age" name="Age" value="" style="width:50px;"> <span style="color:#F00;">*</span> <span style=" font-size:11px;">(Please input number only)</span></td>
        </tr>
        <tr>
            <td height="25" align="left" width="150" style="padding-left:10px;">Address : </td>
            <td align="left"><textarea id="Address" name="Address" style="width:250px; height:100px;"></textarea> <span style="color:#F00;">*</span></td>
        </tr>
        <tr>
            <td height="25" align="left" width="150" style="padding-left:10px;">Phone : </td>
            <td align="left"><input type="text" id="Phone" name="Phone" value="" style="width:250px;"> <span style="color:#F00;">*</span></td>
        </tr>
        <tr>
            <td height="25" align="left" width="150" style="padding-left:10px;">E-mail : </td>
            <td align="left"><input type="text" id="Email" name="Email" value="" style="width:250px;"> <span style="color:#F00;">*</span> <span style=" font-size:11px;">(Please input 5-20 character)</span></td>
        </tr> 
        <tr>
            <td align="center" height="40" colspan="2"><input type="button" id="button" name="button" value="Submit" onclick="ChkForm();"></td>
        </tr>                    
    </tbody>
</table>
<script>
    function ChkForm(){
        var radioButtons = document.getElementsByName("Title");
        var selectedValue = "";
        for (var i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }
        if (selectedValue == "") {
            alert("Please select a gender!");
        } 
        
        var FullName = document.getElementById("FullName").value;
        if (FullName == "") {
            alert("Full Name is required!");
        } 

        var Age = document.getElementById("Age").value;
        if (Age == "") {
            alert("Age is required!");
        } 
        // Check if the input contains only numbers
        if (!/^\d+$/.test(Age)) {
            alert("Please enter a valid age (numbers only).");
            return;
        }

        var Address = document.getElementById("Address").value;
        if (Address == "") {
            alert("Address is required!");
        } 

        var Phone = document.getElementById("Phone").value;
        if (Phone == "") {
            alert("Phone is required!");
        } 

        var Email = document.getElementById("Email").value;
        if (Email == "") {
            alert("Email is required!");
        } 
        if (Email.length < 5 || Email.length > 20) {
            alert("Please enter an email with 5-20 characters.");
            return;
        }
    }   
</script>
</body>
</html>