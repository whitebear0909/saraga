<button type="submit" class="btn btn-block font-weight-bold btn-outline-secondary" onclick="facebook_signIn()" style="color: black;">
  <img src="{{ asset('images/facebook-blue.svg') }}" alt="facebook-login" width="20" height="20">
  Facebook
</button>
<script type="text/javascript">

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2034378730018504',
      cookie     : true,
      xfbml      : true,
      version    : 'v7.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   function facebook_signIn(){
    FB.login(function(response) {
        console.log(response);
        if (response.authResponse) {
            $.ajax(
            {
              url: "{{ url('oauth2/facebook') }}",
              type: 'get', // replaced from put
              dataType: "JSON",
              data: {
                  access_token: response.authResponse.accessToken,
                  user_id: response.authResponse.userID
              },
              success: function (response)
              {
                window.location.replace(response);
              },
              error: function(xhr) {
                alert(xhr.responseText); // this line will save you tons of hours while debugging
                console.log(xhr.responseText); 
                // do something here because of error
             }
            });
        } else {
         console.log('User cancelled login or did not fully authorize.');
        }
    }, {scope: 'public_profile,email'});
   }
  function facebook_signIn_firebaseSDK(){
      var provider = new firebase.auth.FacebookAuthProvider();
      provider.addScope('default');

      firebase.auth().signInWithRedirect(provider).then(function(result) {
        // This gives you a Facebook Access Token. You can use it to access the Facebook API.
        var token = result.credential.accessToken;
        // The signed-in user info.
        var user = result.user;
        // ...
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
</script>