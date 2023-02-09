<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blood Donation</title>
    <link rel="stylesheet" href="index.css" />


    
  </head>
  <body class="container">
    <div class="header_postion col-12" >
      <h1 class="heading1">BLOOD DONATION</h1>
      <h1 class="heading2">REGISTRATION</h1>
      
      <!-- <div>
    <button class="users_list"> <a href="display.php">Users list</a> </button>
    </div> -->
    
    </div>
    <div class="mid-postion row">
    
      <div class="register_form ">
        <form class="form_box" method="POST" action="connect.php">
          <h4>Fill this form to donate blood</h4>
          <div class="form_gap">
            <div style="width: 50%; float: left">
              <label for="">First Name</label> <br />
              <input
                class="form_name"
                type="text"
                name="fname"
                placeholder=" Enter you First Name"
                required
              />
            </div>

            <div style="width: 50%; float: left">
              <label for="">Secound Name</label> <br />
              <input
                class="form_name"
                type=""
                name="lname"
                placeholder=" Enter you last Name"
                required
              />
            </div>
          </div>

          <br />
          <br />
          <br />
          <div class="form_gap">
            <label for="">Adress</label> <br />
            <input
              class="adress_form"
              type="text"
              name="adress"
              id="adress"
              placeholder=" Enter your adress"
              required
            />
          </div>

          <div class="form_gap">
            <div style="float: left; width: 50%">
              <label for="">Blood Group</label> <br />
              <select name="blood_group" id="blood_group" required>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
              </select>
            </div>
            <div style="float: left; width: 50%">
              <label for="">Scheduling Date</label> <br />
              <input type="date" name="date" id="date" required />
            </div>
          </div>
          <br />
          <br />
          <br />
          <div class="form_gap">
            <label for="">Phone</label> <br />
            <input
              type="tel"
              name="phone"
              id="phone"
              placeholder=" Enter your phone number"
              required
            />
          </div>
          <div class="submit_button">
            <input type="submit" id="button" value="submit" name="submit" required >
          </div>
        </form>
      </div>
      <div class="img_div">
        <p>“Blood Donation will cost you nothing, but it will save a life!”</p>
        
      </div>
    </div>



  </body>
</html>
