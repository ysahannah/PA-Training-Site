<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png"
        href="/assets/favicon-96x96-6ec4da6ac3cf152bd928ca4d89c1ec5dff27128377439eb8d53f0fb9ef03a480.png"
        sizes="96x96" />
    <link rel="icon" type="image/png"
        href="/assets/favicon-32x32-1393e30f5ff10f6eab4f098234e60fc9ffa3931a77e4c5c5d4c73ebfba50fb19.png"
        sizes="32x32" />
    <link rel="icon" type="image/png"
        href="/assets/favicon-16x16-708d9aa9c457a21b290dcab2b3971ba9959021cd5652174c77cf2a52367b6ba0.png"
        sizes="16x16" />
    <link href="https://www.covermymeds.com/styles_r2/fonts/nunito_sans.css" rel="stylesheet" />

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png"
        href="/assets/favicon-96x96-6ec4da6ac3cf152bd928ca4d89c1ec5dff27128377439eb8d53f0fb9ef03a480.png"
        sizes="96x96" />

    <title>
        Log In | CoverMyMeds, Prior Authorization Training Site
    </title>
    <link rel="icon" href="../dummy/new_photos/LG.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token"
        content="ZcyOdWDeAvi_j5akpR8X6690q51-AVcZeLB2Y85lD_J9VcpvVNtjg6SFNIVZq4x9imojveH-D9M83WtqHXIOwg" />

    <link rel="stylesheet" href="styles_r2/login.css" />
    <link rel="stylesheet" href="request/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <script src="/assets/application-a62b82e7eb2e0335f817d1143c9e61d0fd3b96c48905729bda894179dadb739e.js" defer="defer">
    </script>
    <script src="https://chat.covermymeds.com/javascripts/bundle-customer.js"></script>
    <script>
    window.Chat = window.Chat || {};
    window.Chat.app = new window.Chat.CustomerApp({
        base: "https://chat.covermymeds.com",
        skipSetSession: true,
        currentApp: "OIDC",
        sessionApi: "api_v2/customer/session/store",
    });
    </script>
</head>

<body>
    <!-- Hidden Bootstrap Toast for invalid login -->
    <div class="toast" id="invalidLoginToast" role="alert" aria-live="assertive" aria-atomic="true"
        data-delay="5000" style="position: absolute; top: 20px; right: 20px;">
        <div class="toast-header">
            <strong class="mr-auto">Error</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Invalid username or password. Please try again.
        </div>
    </div>
    
    <div class="main">

        <nav class="mdc-top-app-bar" aria-label="header">
            <div class="mdc-top-app-bar__row">
                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
                    <a class="mdc-top-app-bar__title" href="./index.php"><img alt="OIDC" src="new_photos/PA-logo.png" style="height: 40vh;" /></a>
                </div>

                <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end">
                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled"
                        href="https://www.covermymeds.com/main/about/">
                        <div class="mdc-line-ripple">About</div>
                    </a>
                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled"
                        href="https://www.covermymeds.com/main/solutions/">
                        <div class="mdc-line-ripple">Solutions</div>
                    </a>
                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled"
                        href="https://www.covermymeds.com/main/insights/">
                        <div class="mdc-line-ripple">News &amp; Insights</div>
                    </a>
                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled"
                        href="https://www.covermymeds.com/main/support/">
                        <div class="mdc-line-ripple">Support</div>
                    </a>
                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled"
                        href="https://www.covermymeds.com/main/careers/">
                        <div class="mdc-line-ripple">Careers</div>
                    </a>
                    <div class="mdc-top-app-bar__divider">&#124;</div>

                    <a class="mdc-top-app-bar__action-item mdc-text-field mdc-text-field--filled" href="./signup.html">
                        <div class="mdc-line-ripple">Enter Key</div>
                    </a>
                    <a class="mdc-top-app-bar__action-item mdc-button" href="./signup.html">
                        <div class="mdc-button__ripple"></div>
                        <div class="mdc-button__focus-ring"></div>
                        <div class="mdc-button__label">Create a Free Account</div>
                    </a>
                </div>
            </div>
        </nav>

        <div class="mdc-top-app-bar--fixed-adjust">
            <script src="/assets/sessions/index-b3ca42dd62a7099b6cb4e2711e2d7a3b0b28a23a9937552b3e9ff3965153d0a1.js"
                defer="defer"></script>
            
            <div class="hero__quarter hero__quarter--orange flipped"></div>
                
            <div class="mdc-layout-grid">

                <main class="mdc-layout-grid__inner spacer__top--medium">
                    <div
                        class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-phone spacer__bottom--medium">
                        
                        <div class="mdc-card mdc-card--invisible">
                            <div class="mdc-layout-grid">
                                <h1>Welcome back!</h1>

                                <p class="p--large style--dark-grey">
                                    Log into your CoverMyMeds account to create new, manage
                                    existing and access pharmacy-initiated prior authorization
                                    requests for all medications and plans.
                                </p>
                                <p class="p--large style--dark-grey">
                                    Need help?
                                    <a class="style--magenta" href="https://www.covermymeds.com/main/support/">Visit our
                                        support page.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-phone fix__ie-7--left-margin">
                        <div class="mdc-card mdc-card--raised">
                            <div class="mdc-layout-grid">
                                <h1>Log in</h1>

                                <form id="login-form" class="login-form" action="process_login.php"
                                    accept-charset="UTF-8" method="post">
                                    <input type="hidden" name="authenticity_token"
                                        value="b1bzb_9fV5Itzve57v2vJRRQIlhnE1l1zwb0k91VeCN3z7d1y1o26TbEVZgSSTSzMU6qePjsAb-La-maDkJ5Ew"
                                        autocomplete="off" />

                                    <!--username input-->
                                    <div class="mdc-text-field mdc-text-field--filled mdc-text-field--full-width"
                                        data-mdc-auto-init="MDCTextField">

                                        <!--label-->
                                        <div class="mdc-line-ripple"></div>
                                        <label class="mdc-floating-label" for="username" style="padding-bottom:25px;">Username</label>
                                        
                                        <!--input-->
                                        <input type="text"
                                            class="mdc-text-field__input mdc-text-field--with-trailing-icon"
                                            required="required" 
                                            aria-describedby="username-helper-text" 
                                            name="username"
                                            id="username" />

                                        <!--error icon-->
                                        <!--<div
                        id="email error">Please fill up your username</div>-->
                                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing style--red"
                                            aria-hidden="true">error</i>
                                    </div>
                                    
                                    <!--username helper text-->
                                    <div class="mdc-text-field-helper-line">
                                        <div id="username" 
                                        name="username"
                                        class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg"
                                        aria-hidden="true">Username is required
                                        </div>
                                    </div>
                                    
                                    <!--password input-->
                                    <div class="mdc-text-field mdc-text-field--filled mdc-text-field--full-width"
                                        data-mdc-auto-init="MDCTextField">
                                        <div class="mdc-line-ripple"></div>
                                        <label class="mdc-floating-label" 
                                            for="password" 
                                            style="padding-bottom:25px;">Password</label>

                                        <input type="password"
                                            class="mdc-text-field__input mdc-text-field--with-trailing-icon"
                                            required="required" 
                                            aria-describedby="password-helper-text" 
                                            name="password"
                                            id="password" />

                                        <!--<div 
                        id="pass_error">Please fill up your password</div> -->
                                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing style--red"
                                            aria-hidden="true">error</i>
                                    </div>
                                    <div class="mdc-text-field-helper-line">
                                        <div id="password-helper-text"
                                            class="mdc-text-field-helper-text mdc-text-field-helper-text--validation-msg"
                                            aria-hidden="true">
                                            Password is required
                                        </div>
                                    </div>

                                    <!--log in button-->
                                    <div class="spacer__top--medium">
                                        <input type="submit" 
                                        name="commit" 
                                        value="Log in" 
                                        id="login-button"
                                            class="mdc-button mdc-button--raised style--width-100 spacer__bottom--small"
                                            data-disable-with="Log in" />

                                        <!--forgot password link-->
                                        <p class="style--center style--uppercase">
                                            <a class="style--magenta"
                                                href="https://account.covermymeds.com/forgot">Forgot your username or
                                                password?</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    
    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your existing script tags -->
</body>

</html>