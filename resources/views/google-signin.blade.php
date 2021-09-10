<button type="submit" class="btn btn-block font-weight-bold btn-outline-secondary" onclick="google_signIn()" style="color: black;">
	<img src="{{ asset('images/google.svg') }}" alt="google-login" width="20" height="20">
	Google
</button>
<script type="text/javascript">
    function check_login_status(){
        console.log(firebase.auth().currentUser);
    }

    function google_signIn(){
        var provider = new firebase.auth.GoogleAuthProvider();

        firebase.auth().signInWithPopup(provider).then(function(result) {
          // This gives you a Google Access Token. You can use it to access the Google API.
          var token = result.credential.accessToken;
          // The signed-in user info.
          var user = result.user;

          // if sign in success..?
          $.ajax(
          {
              url: "{{ url('oauth2/google') }}",
              type: 'get', // replaced from put
              dataType: "JSON",
              data: {
                  access_token: token,
                  name: user.displayName
              },
              success: function (response)
              {
                // console.log(response);
                window.location.replace(response);
              },
              error: function(xhr) {
                alert(xhr.responseText); // this line will save you tons of hours while debugging
                console.log(xhr.responseText); 
                // do something here because of error
             }
          });

        }).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // The email of the user's account used.
          var email = error.email;
          // The firebase.auth.AuthCredential type that was used.
          var credential = error.credential;
          // ...
        });  
    }
    
    function sign_out(){
        firebase.auth().signOut().then(function() {
          // Sign-out successful.
          console.log("sign out successful.");
        }).catch(function(error) {
          // An error happened.
        });
    }
</script>