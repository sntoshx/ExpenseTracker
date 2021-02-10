<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/favicon.png" />
    <link rel="stylesheet" href="./css/styles.css" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@900&display=swap" rel="stylesheet">  -->
    <title>Expense Tracker - Manage better.</title>
  </head>
  <body>
    <div class="modal">
      <div class="login-container container">
        <span class="close" onclick="closeLogin()">×</span>
        <form class='box login-box' action='login.php' method="POST">
                       <section class="form-section login login-email">
                         <label for="lemail">Email</label>  <input onblur="formcheck(this)" onfocus="formtransit(this)" type='text' id="lemail"  placeholder='Email' name='userEmail' required pattern="[a-zA-Z0-9._]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,4}$" title='Enter a valid email address!'/>
                       </section>
                       <section class = "form-section login login-email">
                         <label for="lpassword">Password</label> <input onblur="formcheck(this)" onfocus="formtransit(this)" autocomplete="new-password" type='password' id="lpassword"  placeholder='Password' name = 'userPassword' required pattern=".{6,15}" title="Enter a valid password!"/>
                       </section>
                        <section class = "form-section login login-button"><input type='submit' class='thebutton' value='Sign in'></section>
      </form>
      </div>
      <div class="signup-container container">
      <span class="close" onclick="closeSignup()">×</span>
      <form class='box signup-box' action='signup.php' method="POST">
                       <section class = "form-section signup signup-name"> <label for="name">Name</label><input onblur="formcheck(this)" onfocus="formtransit(this)" type='text' id="name" placeholder='Name (e.g. Lakshman)' name='uName' required pattern="[a-zA-Z\s.]+"  title='Enter a valid name!'/></section>
                        <section class = "form-section signup signup-email"><label for="email">Email</label><input onblur="formcheck(this)" onfocus="formtransit(this)"  type='text' id="email" placeholder='Email (e.g. abcd@domain.com)' name='uEmail' required pattern="^[a-zA-Z][a-zA-Z0-9._]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,4}$" title='Enter a valid email address!'/></section>
                       <section class = "form-section signup signup-gender"> <label for="gender">Gender</label><input onblur="formcheck(this)" onfocus="formtransit(this)" type='text'  id="gender" placeholder='Gender (Male/Female/Other)' name='uGender' required pattern="^(m|M)(a|A)(l|L)(e|E)$|^(f|F)(e|E)(m|M)(a|A)(l|L)(e|E)$|^(o|O)(t|T)(h|H)(e|E)(r|R)$" title='Enter a valid gender!'/></section>
                        <section class = "form-section signup signup-password"><label for="password">Password</label><input autocomplete="new-password" onblur="formcheck(this)" onfocus="formtransit(this)" type='password'  id="password" placeholder='Password' name=uPassword required pattern=".{6,15}" title="Enter a valid password!"/></section>
                        <section class = "form-section signup signup-button"><input type='submit' value='Sign up' class='thebutton'/></section>
                </form>
      </div>
    </div>
    <header>
      <nav>
        <div class="logo">
          <span>EXPENSE TRACKER<span style="font-weight: 100">™</span></span>
        </div>
        <ul>
          <li>
            <button class="btn login-btn" onclick="loginModal()">Sign in</button>
          </li>
          <li>
            <button class="btn signup-btn" onclick="signupModal()">
              Join us
            </button>
          </li>
        </ul>
      </nav>
    </header>
    <section class="about">
      <div class="txt about-content">
      <h1 class=notphone>Forget writing records.</h1>
       <p>Gone were those days when you had to write every expenditure in a diary and manually calculate everything. With our smart calculations and fluid user interface, we take away all your work and do it for you. <br>
        Be it anything, we have all the functionalities implemented in the application. From calculating your monthly expenditure, finding the average withdrawls and deposits; to saving all your data with an utter level of security, we do it all. </p> 
      </p>
    </div>
      <h1 class=phone>Tired<br>of<br>manually<br>writing<br>records<br>?</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 633.08 1325.74">
        <defs>
          <style>
            .cls-1,
            .cls-11 {
              fill: #fff;
            }
            .cls-1,
            .cls-2 {
              stroke: #002404;
            }
            .cls-1,
            .cls-12,
            .cls-13,
            .cls-2,
            .cls-8 {
              stroke-miterlimit: 10;
            }
            .cls-1,
            .cls-12,
            .cls-2 {
              stroke-width: 6px;
            }
            .cls-12,
            .cls-13,
            .cls-2,
            .cls-8 {
              fill: none;
            }
            .cls-3 {
              fill: #fda05e;
            }
            .cls-4 {
              fill: #000000;
            }
            .cls-5 {
              fill: #ffb760;
            }
            .cls-6 {
              fill: #000000;
            }
            .cls-7 {
              fill: #170027;
            }
            .cls-10 {
              stroke: rgb(0, 0, 0);
            }
            .cls-8 {
              stroke: rgba(36, 36, 36, 0.5);
              stroke-linecap: round;
              stroke-width: 4px;
            }
            .cls-10,
            .cls-9 {
              fill: #e13c00;
            }
            .cls-10,
            .cls-11 {
              stroke-linejoin: round;
              stroke-width: 5px;
            }
            .cls-11 {
              stroke: #100101;
            }
            .cls-12,
            .cls-13 {
              stroke: #eb9b06;
            }
            .cls-13 {
              stroke-width: 3px;
            }
          </style>
        </defs>
        <g id="Layer_2" data-name="Layer 2">
          <g id="Слой_1" data-name="Слой 1">
            <g id="_1" data-name="1">
              <g id="CHAIR">
                <rect
                  class="cls-1"
                  x="78.16"
                  y="817.11"
                  width="369.75"
                  height="79.24"
                  rx="39.62"
                />
                <path
                  class="cls-2"
                  d="M102.07,1322.74h0a2.42,2.42,0,0,1-2.45-2.71l59.62-423.68H353.52L104.23,1321.53A2.49,2.49,0,0,1,102.07,1322.74Z"
                />
                <path
                  class="cls-2"
                  d="M421.64,1322.74h0a2.4,2.4,0,0,0,2.43-2.74L354.52,896.35H160.24l259.28,425.22A2.49,2.49,0,0,0,421.64,1322.74Z"
                />
              </g>
              <g id="WOMAN">
                <g id="LEGS">
                  <g id="RIGHT_FOOT" data-name="RIGHT FOOT">
                    <path
                      class="cls-3"
                      d="M486.07,1163.3c13.48,1.34,35.3,4,61.33,1.53-6.68,25.78-9.75,50.43-14.61,72.33-3.14,14.1,16,33.19,21.8,47a4.69,4.69,0,0,0-.45-.21c-26.54-4.23-62.08,20.87-58.42-18.31C499.23,1226.42,490.4,1197.65,486.07,1163.3Z"
                    />
                    <path
                      id="SHOE"
                      class="cls-4"
                      d="M496.52,1236.8c-9.13,0-25.94,16.49-24.47,42.89a207,207,0,0,0,7.68,46h106.5c5-37.73-32.09-41.8-32.09-41.8-26.55-4.23-60.75,20.87-57.09-18.3Z"
                    />
                  </g>
                  <g id="LEFT_FOOT" data-name="LEFT FOOT">
                    <path
                      class="cls-5"
                      d="M412.07,1164.3c13.48,1.34,42.3,3,68.33.53-6.68,25.78-10.61,72.33-10.61,72.33-3.14,14.1,16,33.19,21.8,47a4.69,4.69,0,0,0-.45-.21c-26.54-4.23-62.08,20.87-58.42-18.31C436.23,1226.42,412.07,1164.3,412.07,1164.3Z"
                    />
                    <path
                      id="SHOE-2"
                      data-name="SHOE"
                      class="cls-6"
                      d="M431.52,1236.8c-9.13,0-23.94,16.49-22.47,42.89a207,207,0,0,0,7.68,46h106.5c5-37.73-32.09-41.8-32.09-41.8-26.55-4.23-60.75,20.87-57.09-18.3Z"
                    />
                  </g>
                  <g id="LEGS-2" data-name="LEGS">
                    <path
                      class="cls-7"
                      d="M198.07,595.93s-91.51,110.75-85,184.61,82.37,95.7,222,94.07c0,0,4.09,110.79,76.6,290,0,0,33.65,6.5,75,0,0,0,35,3.53,61-.17,0,0,55.44-362.35,48.7-399.1-8.93-48.7-185.4-92.63-231.08-103.18L327.1,595.93S250.42,605.67,198.07,595.93Z"
                    />
                    <path
                      class="cls-8"
                      d="M300.64,705S447,743.4,464.87,790.47s18.78,378.14,18.78,378.14"
                    />
                  </g>
                </g>
                <g id="BLOUSE">
                  <path
                    class="cls-9"
                    d="M374.63,457.34s-5.68,79.13-47.9,138.78c0,0-69,11.77-129,0,0,0-59.45-62.52-76.49-130.28,0,0-56.61-114.82-31-134.3s89.33-53,89.33-53l129.61,6.36c16,9.72,50.11,25.61,84.2,43.46Z"
                  />
                  <circle class="cls-10" cx="269.6" cy="421.72" r="9.35" />
                  <circle class="cls-10" cx="269.6" cy="459.56" r="9.35" />
                  <circle class="cls-10" cx="269.6" cy="497.39" r="9.35" />
                </g>
                <g id="RIGHT_HAND" data-name="RIGHT HAND">
                  <path
                    class="cls-9"
                    d="M393.3,328.35c34.08,17.86,134.36,247.7,92.63,272-86.66,50.53-111.3-143-111.3-143Z"
                  />
                  <path
                    class="cls-3"
                    d="M449.47,607.52c11.7,5,41.89-4.21,75.44-26.19s-4.51-36.49-4.51-36.49-44.6-17.9-71.81-5S427.06,597.87,449.47,607.52Z"
                  />
                  <polygon
                    class="cls-11"
                    points="630.58 495.39 447.4 495.39 246.4 626.96 429.57 626.96 630.58 495.39"
                  />
                  <path
                    class="cls-5"
                    d="M562.85,549.67c0-4.78-30.38-32.9-42-22.28-4.87,4.44-5.15,42.57-4.7,49.45C517.57,598.74,562.6,574.19,562.85,549.67Z"
                  />
                </g>
                <g id="LEFT_HAND" data-name="LEFT HAND">
                  <path
                    class="cls-9"
                    d="M90.16,331.54c-10.41,8.26-120.93,176.52-81.82,254C52.46,673,231.7,600.38,231.7,600.38s-22.74-7-8.13-36.22c0,0-74.16-39.46-133.81-27.69,0,0,46.26-76.7,51.13-106.73S127.5,301.92,90.16,331.54Z"
                  />
                  <line
                    class="cls-12"
                    x1="270.44"
                    y1="512.96"
                    x2="303.1"
                    y2="585.91"
                  />
                  <g id="ARM">
                    <path
                      class="cls-5"
                      d="M223.62,561.82s32.87-18.74,46-11.72c14.39,7.68,31.65,32,33.23,36.09s1.13,8.34.88,12.72-30,4.13-35.72,3.8-36.42,3.31-41.78-1.94C206.56,581.51,223.62,561.82,223.62,561.82Z"
                    />
                    <path
                      class="cls-3"
                      d="M268,602.71c5.76.33,32.06.66,35.41-2.46,6.65-6.17,2.84-15.39-.49-19-3.05-3.32-19.28-23.47-33.31-31.12,0,0,16.27,28.31-1.61,52.61"
                    />
                  </g>
                </g>
                <g id="HEAD">
                  <g id="HAIR">
                    <path
                      class="cls-6"
                      d="M213.93,67.77s-14.61-23.54,0-35.71S234.55.13,261,0c27.32-.13,38.22,21.17,50.73,19.07,17-2.85,28.92-8.33,50.51,3.06,17.28,9.12,18,43.31,35.52,41.58,13.94-1.37,29.42-.49,37.33,15,6,11.73-.4,43.42,8.52,51.94s30,11.3,31.66,33.27c2.2,29.69-28.8,34.06-20.7,57.63,10.66,31-4.38,50.46-30.84,54-18.61,2.47-51.31-25.2-63.3-6.09-10.23,16.29-31.66,23.54-58,13s-42.61-7.31-58.84-.41-36.12,16.63-49.51,4.86-29.55-12.1-47.38-4.73c-24.74,10.23-51.29-6.59-48-28.94,2.73-18.47-22.62-20.8-25.56-41.8-3.84-27.43,36.52-34.49,24.75-46.26S86.54,119,121.41,114.44c33.08-4.3,26-24.91,35.33-39C164.61,63.66,189.18,48.7,213.93,67.77Z"
                    />
                    <path
                      class="cls-13"
                      d="M83.72,158.72c-11-12.46-7.49-50.8,27.59-53.19,33.28-2.26,27.46-23.27,37.65-36.72C157.54,57.5,186.3,44,213.52,67.62"
                    />
                  </g>
                  <g id="NECK">
                    <path
                      class="cls-5"
                      d="M218.65,168.93c-.25,21,1.06,78.91-39.16,109.6,0,0,72.22,36.27,88.52,116.62,0,0,11.47-84.69,41.09-110.26,0,0-35.1-19.9-27.39-116Z"
                    />
                    <path
                      class="cls-3"
                      d="M288.32,252.15c-5,4.52-10.64,7.1-16.76,7.1-25.34,0-50.57-38.6-53-79.87.08-4.06.08-7.6.12-10.45h63.06C278.57,208,282.52,234.49,288.32,252.15Z"
                    />
                  </g>
                  <path
                    id="HEAD-2"
                    data-name="HEAD"
                    class="cls-5"
                    d="M216.37,149.93c.28-10.56,4-65.74,48.69-63.71S317,133.29,313,169.41s-26,60.46-41.39,58.84S215.15,194.57,216.37,149.93Z"
                  />
                </g>
              </g>
            </g>
          </g>
        </g>
      </svg>
    </section>
    <section class="about">
      <div class="txt2 about-content">
      <h1 class=notphone>Spend hassle-free.</h1>
        <p>Like several others, are you also scared of month-end? No problems, we have something for you. Introducing, for the first time, an <span style="color: blue; font-weight:700;">Instant Report System</span>.</br>
        With this technology, you can instantly get the complete view of where, when and how you have been spending your money with the help of instant reports. You have the power to generate reports instantly and even download them for future references.</p> 
      </p>
    </div>
    <h1 class=phone>Spend<br>money<br>without<br>worrying.</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 773.41 637.6"><defs><style>.clss-1{fill:#a79bdd;}.clss-2{fill:none;stroke:#373737;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.clss-3{fill:#f8a382;}.clss-4{fill:#494949;}.clss-5{fill:#241bcc;}.clss-6{fill:#5c5c5c;}.clss-7{fill:#513eff;}.clss-8{fill:#ffb897;}.clss-9{fill:#241bcc;}.clss-10{fill:#000000;}</style></defs><title>shopping-cart-colour</title><g id="Layer_2" data-name="Layer 2"><g id="vector"><path class="clss-1" d="M549.08,50.34c80,19.2,145.79,103.31,144.77,186.24-1,82.75-68.82,164.32-125.57,242.82-56.59,78.51-101.79,154-159,158C352,641.34,282.8,573.71,225.54,528.85,168.1,484,122.73,461.9,83.65,422.48s-71.71-96.18-64.07-147,55.57-95.67,105.7-120.14c50.3-24.64,102.63-28.89,176-53.87S469,31,549.08,50.34Z"/><path class="clss-2" d="M508.59,434.14,404,227.65c-3.19-1.86-16-10.09-16-10.09"/><path class="clss-2" d="M396.5,244c-1.25-4.13-5-12.64-5-12.64-2.29-.14-18.23-8.34-18.23-8.34"/><line class="clss-2" x1="368.71" y1="223.78" x2="418.27" y2="203.56"/><polygon points="12.74 539.2 0 550.97 30.58 591.07 40.04 582.7 25.48 547.02 12.74 539.2"/><polygon points="259.67 502.6 249.14 522 275.28 562.7 286.29 559.86 279.07 506.74 259.67 502.6"/><ellipse class="clss-3" cx="378.84" cy="216.04" rx="15.56" ry="11.61"/><path class="clss-4" d="M171.19,228.3c-7,10-160.83,312.08-160.83,312.08L27.76,551l203-219.68Z"/><path class="clss-3" d="M303.72,155c4,3.42,15.72,16.72,19.55,19.14s47.76,29.82,56,32.24S370,216,370,216s-57.23-12.69-61.46-15.51-29.3-23-29.3-28.41S303.72,155,303.72,155Z"/><path class="clss-5" d="M270.19,129c12.77-13.85,37.71,19,37.17,23.83S289.18,177.92,278,177.92C274.65,177.92,261.22,138.73,270.19,129Z"/><path class="clss-6" d="M169.21,231.34c-3,4-16,36-16,47,0,75,111.82,94.46,127.88,94.46-2.32,10.47-26.92,129.39-25.76,132s21.57,7.94,25.76,7.25c16-8.71,67.65-130,63.77-147.25-5.45-24.17-91-94.86-103.36-101.9S169.21,231.34,169.21,231.34Z"/><path class="clss-7" d="M243.08,98c86.07,0,19.39,161.78,4.25,170.55-10,5.78-72-16.2-78.64-38.25C166.42,222.77,195.52,98,243.08,98Z"/><ellipse class="clss-8" cx="365.74" cy="221.51" rx="15.56" ry="11.61"/><path class="clss-8" d="M215.61,172.7c.21,8.16,2.94,45.61,6.33,46.74,41,13.68,112,7.65,124.26,6.83s20.12-9.45,19.51-11.5S326.54,197,259.6,195.15c-1.24-7.56,1.73-30.41-1.33-32.45S215.61,172.7,215.61,172.7Z"/><path class="clss-9" d="M227,104.93c35.61-7.28,42,59.2,38.58,64.1s-48.79,11.83-54.71,7.55S200,110.44,227,104.93Z"/><path class="clss-3" d="M251.23,56.66c-1.64,6.26-12.83,42.1-12.14,44s16.09,10.28,22,9.36c.23-2.73,2.74-17.35,7.88-26.14S251.23,56.66,251.23,56.66Z"/><ellipse class="clss-8" cx="274.54" cy="53.27" rx="34.87" ry="23.17" transform="matrix(0.1, -0.99, 0.99, 0.1, 193.7, 320.99)"/><path class="clss-10" d="M248.74,56.66c-2.62-1.44-7.59-9.92-7.59-17.8,0-12.33,12.29-19.35,20.58-23C268,13.05,273.33,0,287.61,0,299,0,299.76,11.47,305,11.91c13.58,1.13,21.2,1.64,21.2,11.51,0,7.25-9.3,27-28.27,27,0-3.66-1.23-12.75-3.26-17.12-11.4.57-20.68,15.22-36.49,15.16C254.79,48.4,248.74,56.66,248.74,56.66Z"/><ellipse class="clss-8" cx="254.71" cy="54.23" rx="7.02" ry="8.57"/><path class="clss-2" d="M760.12,512.06H433.4V441.17c17.87-1.58,271.89-25.58,271.89-25.58V261.46L396.5,244l36.9,197.19"/><circle class="clss-2" cx="459.66" cy="536.07" r="15.16"/><circle class="clss-2" cx="755.75" cy="536.07" r="15.16"/><line class="clss-2" x1="408.56" y1="308.43" x2="705.29" y2="308.43"/><line class="clss-2" x1="416.76" y1="352.25" x2="705.29" y2="352.25"/><line class="clss-2" x1="343.62" y1="234.01" x2="368.71" y2="223.78"/><path class="clss-2" d="M441.87,352.25c-3.25-9.19-37.73-107.84-37.73-107.84"/></g></g></svg>
    </section>
    <footer>
      <span>© 2020 Santosh Pandey</span>
      <span> all rights reserved.</span>
    </footer>
    <script src="./js/main.js"></script>
  </body>
</html>