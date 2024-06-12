<body>
    <div class="container d-flex justify-content-center p-5">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <h4 class="updated_title" id="signin_title">
                        Iniciar sesión en Central de Ayuda
                        <br>
                        <br>
                        <div class="roles_new">
                            <p><a href="#" class="link-underline-primary">Cambiar al inicio de sesión de agente</a></p>
                            <i class="chevron" alt-text=""></i>
                        </div>
                    </h4>
                </div>
                <br>
                <br>
                <br>
                <div class="container">
                    <div class="mb-3">
                        <form class="">
                            <div class="row mb-3">
                                <label for="user_email" class="form-label">Correo electrónico</label>
                                <input class="form-control" autofocus="autofocus" autocomplete="on" required="required" type="email" name="user[email]" id="user_email">
                            </div>
                            <div class="row mb-3">
                                <label for="user_password" class="form-label">Contraseña</label>
                                <input class="form-control" autocomplete="off" required="required" type="password" name="user[password]" id="user_password">
                                <div class="forgot_password" id="zendesk-js-forgot-password"></div>
                            </div>
                            <div id="required-input-error-message" class="visually-hidden" ,="" aria-live="polite">
                                Missing the following required fields:
                            </div>
                            <div class="clear"></div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button name="button" type="submit" id="sign-in-submit-button" class="btn btn-primary auth-actions">Iniciar sesión</button>
                            </div>
                        </form>
                        <div class="clear"></div>
                        <div class="clear"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="new_signin_footnotes">
                        <div class="sign_up question">
                            <span class="question-text">¿Primera vez que usa Central de Ayuda?</span>
                            <a class="auth-actions" href="https://neoauto.zendesk.com/auth/v2/login/registration?auth_origin=500464%2Ctrue%2Ctrue&amp;brand_id=500464&amp;return_to=https%3A%2F%2Fcentraldeayuda.neoauto.com%2Fhc%2Fes%2Fcategories%2F201819763-Publicaciones&amp;theme=hc">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>