<h1>Buat Account Baru</h1>
<h2>Sign Up Form</h2>

<form id="SignUpForm" method="post" action="{{ url('welcome-back')  }}" method="post">
  @csrf
    <p>First Name</p>
    <div>
      <input type="text" id="fname" name="fname" required>
    </div>
    <p>Last Name</p>
    <div>  
      <input type="text" id="lname" name="lname" required>
    </div>
    <p>Gender :</p>
    <div>
        <input type="radio" id="Male" required name="Gender" value="Male" checked>
        <label for="Male">Male</label>
    </div>
    <div>
        <input type="radio" id="Female" required name="Gender" value="Female">
        <label for="Female">Female</label>
    </div>        
    <div>
        <input type="radio" id="Other" required name="Gender" value="Other">
        <label for="Other">Other</label>
    </div> 
    <p>Nationality :</p>
    <div>
        <select id="Nationality">
            <option value="indonesia"selected>Indonesia</option>
            <option value="Zimbabwe">Zimbabwe</option>
            <option value="india">India</option>
            <option value="belanda">Belanda</option>
          </select>
    </div>
    <p>Language Spoken :</p>
    <div>
        <input type="checkbox"  id="bahasa_indonesia" name="Language" value="bahasa_indonesia" >
        <label for="bahasa_indonesia"> Bahasa Indonesia</label><br>
    </div>
    <div>
        <input type="checkbox" id="bahasa_inggris" name="Language" value="bahasa_inggris">
        <label for="bahasa_inggris"> English</label><br>
    </div>
    <div>
        <input type="checkbox" id="Other" name="Language" value="Other">
        <label for="Other"> Other</label><br>
    </div>
    <p>Bio :</p>
    <div>
        <textarea rows="10" cols="50" name="comment" required>
        </textarea>
    </div>
    <p><input type="submit" value="Sign Up" name="Sign UP" /></p>
</form>