<html>
  <head>
  <title>New user signup </title>
  <script language="javascript">
    function check()
    {
      if(document.form1.fname.value=="")
      {
        alert("Plese Enter First Name");
        document.form1.fname.focus();
        return false;
      }
      if(document.form1.pass.value=="")
      {
        alert("Plese Enter Your Password");
        document.form1.pass.focus();
        return false;
      } 
      if(document.form1.cpass.value=="")
      {
        alert("Plese Enter Confirm Password");
        document.form1.cpass.focus();
        return false;
      }
      if(document.form1.pass.value!=document.form1.cpass.value)
      {
        alert("Confirm Password does not matched");
        document.form1.cpass.focus();
        return false;
      }
      if(document.form1.lname.value=="")
      {
        alert("Plese Enter Your Last Name");
        document.form1.lname.focus();
        return false;
      }
      if(document.form1.contact.value=="")
      {
        alert("Plese Enter Contact Number");
        document.form1.contact.focus();
        return false;
      }
      if(document.form1.email.value=="")
      {
        alert("Plese Enter your Email Address");
        document.form1.email.focus();
        return false;
      }
      e=document.form1.email.value;
      f1=e.indexOf('@');
      f2=e.indexOf('@',f1+1);
      e1=e.indexOf('.');
      e2=e.indexOf('.',e1+1);
      n=e.length;

      if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
      {
        alert("Please Enter valid Email");
        document.form1.email.focus();
        return false;
      }
      return true;
    }
  </script>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  <div class="container" style="width: 500px;">
    <br/>
    <center> <h1>Signup Form</h1> </center>
    <div class="container-fluid">
      <form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >
        <div class="form-group">
          <label for="fname">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
          <label for="lname">Last Name</label>
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
          <label for="email">Email Id</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Id">
        </div>
        <div class="form-group">
          <label for="contact">Contact</label>
          <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter Contact">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="cpass">Confirm Password</label>
          <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary">Signup</button>
      </form>
    </div>
  </div>
  </body>
</html>