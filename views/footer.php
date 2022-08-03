<footer class="footer">
    <div class="container">
        <span class="text-muted">&copy; Mustafa Haidari | 2022.</span>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalTitle">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" id="loginActive" name="loginActive" value="1">
                    <div class="form-group">
                        <label for="emailInput">Email address</label>
                        <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" name="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password">
                    </div>
                    <div class="modal-footer">
                        <a id="toggleLogin" class="mr-2">Sign up</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" id="loginSignupBtn" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const toggleLogin = document.querySelector('#toggleLogin');
    const loginActive = document.querySelector('#loginActive');
    const loginModalTitle = document.querySelector('#loginModalTitle');
    const loginSignupBtn = document.querySelector('#loginSignupBtn');
    let emailInput = document.querySelector('#emailInput');
    let passwordInput = document.querySelector('#passwordInput');

    toggleLogin.addEventListener('click', () => {
        if (loginActive.value === '1') {
            loginActive.value = '0';
            loginModalTitle.innerText = "Sign Up"
            loginSignupBtn.innerText = "Signup"
            toggleLogin.innerText = "Login"
        } else {
            loginActive.value = '1';
            loginModalTitle.innerText = "Login"
            loginSignupBtn.innerText = "Login"
            toggleLogin.innerText = "Sign Up"
        }
    })

    loginSignupBtn.addEventListener('click', async e => {

        let request = await fetch('/php-twitter-mvc/actions.php?action=loginSignup', {
            method: 'POST',
            // body: {
            //     email: emailInput.value,
            //     password: passwordInput.value
            // }
            body: "email=" + emailInput.vlaue + "&password=" + passwordInput.vlaue + "&loginActive=" + loginActive.value
        });
        // const response = await request.json();
        console.log(request)
    })
</script>


</body>

</html>