<!-- Modal -->
<div class="modal" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h1 class="modal-title fs-5" id="registerModalLabel">{{ 'Register' }} {{ 'to download unlimited full resolution media' }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="mb-3">
                        <button class="btn btn-outline-dark" type="button"><i
                                    class="fa-brands fa-google"></i> {{ 'Continue with Google' }}</button>
                        <button class="btn btn-outline-dark" type="button"><i
                                    class="fa-brands fa-facebook"></i> {{ 'Continue with Facebook' }}</button>
                    </div>
                    <hr><span class="text-center">{{ 'or' }}</span><hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ 'Email address' }}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">{{ 'We\'ll never share your email with anyone else.'}}</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{ 'Password' }}</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleConfirmPassword1" class="form-label">{{ 'Confirm Password' }}</label>
                        <input type="password" class="form-control" id="exampleConfirmPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input text-pixabay" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">{{ 'I agree with' }} <a href="#" class="text-pixabay">{{ 'Privacy Policy' }}</a> {{ 'and' }}
                            <a href="#" class="text-pixabay">{{ 'Terms of Use' }}</a></label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ 'Close' }}</button>
                    <button type="submit" class="btn bg-pixabay">{{ 'Register' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
