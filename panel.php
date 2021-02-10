<?php
session_start();
if($_SESSION['Name']==NULL)
header("location:index.php")
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="./images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Dosis:wght@400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./css/panelstyle.css" />
    <title>Expense Tracker - Dashboard</title>
  </head>
  <body>
    <div class="modal">
      <div class="login-container container-modal">
        <div class="close" onclick="closeLogin()">×</div>
        <div class="gender"><span>Salutation : </span><?php if($_SESSION['Gender']=="Male")
        {echo "Mr/Shri";} else if($_SESSION['Gender']=="Female"){
          echo "Miss/Mrs";} else {
            echo "Dear";
          
        } ?></div>       
          <div class="name"> <span>Full name : </span><?php echo $_SESSION['Name'] ?></div>
         <div class="email"> <span>Email : </span><?php echo $_SESSION['Email'] ?></div>
        </div>
    </div>
    <div class="grid-container">
      <div class="grid-content header">
        <div class="logo">
          <span
            >EXPENSE TRACKER<span style="font-weight: 100; margin: 0 !important"
              >™
            </span>
          </span>
        </div>
        <ul>
          <li><?php echo $_SESSION['Name'] ?></a></li>
 
          <hr / style="margin:3.3vw 0 0 0;  border:none;border-bottom: rgb(248, 221, 180) .7vw groove;">
          <li><a href="faq.html" target="_blank">FAQs</a></li>
          <li><a href="#" onclick="loginModal()">Details</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        <div class="burger-container" onclick="settings()">
          <div class="burger one"></div>
          <div class="burger two"></div>
        </div>
      </div>
      <div class="grid-content transaction-box">
        <div class="transact-container">
          <h1>Transaction<br />Panel</h1>
          <form action="payments.php" method="POST">
            <div class="money-box">
              <select name="currency" id="currency">
                <option value="Rupee" selected>₹</option>
                <option value="Dollar">$</option>
                <option value="Euro">€</option>
                <option value="Pounds">£</option>
              </select>
              <input
                type="number"
                id="amount"
                placeholder="Enter an amount"
                name="amount"
                required
                min="1"
              />
            </div>
            <div class="pay-method">
              <section class="deposit">
                <label for="deposit">Deposit</label>
                <input type="radio" id="deposit" value="deposit" name="mode" />
              </section>
              <section class="withdrawl">
                <label for="withdrawl">Withdrawl</label>
                <input
                  type="radio"
                  id="withdrawl"
                  value="withdrawl"
                  name="mode"
                  required
                />
              </section>
            </div>
            <div class="reason">
              <label for="payment-category"> Select the purpose : </label>
              <select name="payment-category" id="payment-category">
                <option value="domestic" selected>Domestic</option>
                <option value="shopping">Shopping</option>
                <option value="others">Others</option>
              </select>
            </div>
            <section class="btns">
              <input type="reset" value="CLEAR" />
              <input type="submit" value="CONFIRM" />
            </section>
          </form>
        </div>
      </div>

      <div class="grid-content history">
      <?php
        $conn=mysqli_connect("127.0.0.1","root","","expensetracker");
        $_SESSION['Table']="table".$_SESSION['Id'];
        $tmp = $_SESSION['Table'];
        $sql = "SELECT * FROM $tmp ORDER BY tr_id DESC";
        $result = mysqli_query($conn, $sql);
        if(!$result || (mysqli_num_rows($result)==0))
        {
          echo "<span style='position:absolute;margin:auto;font-family:poppins;font-size:2.05975vw;'>No transactions yet!</span>";
        }
        else{
          echo '<button value="OFF" id="rec-tog" onclick="toggleTable()"> Hide / show </button>';
          $rowcount = mysqli_num_rows($result);
          $it;
          if($rowcount>=5)
           $it = 5;
          //  $it = $rowcount;

          else
           $it = $rowcount;
          echo '<table><tr>
              <th colspan=2>Time of transaction</th>
              <th>Activity</th>
              <th>Purpose</th>
              </tr>';
          for($i=0;$i<$it;$i++)
          {
              $row=mysqli_fetch_assoc($result);
              $symb = $row['tr_amt'];
              if($symb[0] == "+")
              echo '<tr style="background:var(--green);">
              <td>'.$row['tr_date'].'</td>
              <td>'.$row['tr_time'].'</td>
              <td>'.$row['tr_amt'].'</td>
              <td>'.$row['tr_reason'].'</td>
              </tr>';
              else
              echo '<tr style="background:var(--red);">
              <td>'.$row['tr_date'].'</td>
              <td>'.$row['tr_time'].'</td>
              <td>'.$row['tr_amt'].'</td>
              <td>'.$row['tr_reason'].'</td>
              </tr>';
          }
          echo '</table>';
          
         

      }

?>
      </div>
      <div class="grid-content reports">
      <h6>View custom records</h6>
      <form action="report.php" method="POST">
      <section>
        <label for="from">Start :</label><input type="date" id="from" name="duration-from" required>
      </section>
      <section>
        <label for="to">End :</label> <input type="date" id="to" name="duration-to" required>
      </section>
      <section id="report_btns">
        <input type="submit" value="View"/>
        <input type="reset" value="Clear"/>
      </section>
      <hr style="border:none;border-bottom:.05vw solid rgb(0,0,0,0.4);width:110%; margin-top:.7vw;">
      <section id = "total_amt">
        <div class="dep_class">
                <span style="font-size:1.2vw !important;"> Total deposit </span><br>
        <?php
         $deposit = "NIL";
          $withdrawl = "NIL";
          $tmp = $_SESSION['Table'];
          $res = mysqli_query($conn, "SELECT SUM(AMT) as 'total_deposit' from $tmp where tr_amt LIKE '+%'");
          if(!$res)
          {
            $deposit = "NIL";
            $withdrawl = "NIL"; 
          }
          else
          {
          $deposit = mysqli_fetch_assoc($res)['total_deposit'];
          $res = mysqli_query($conn, "SELECT SUM(AMT) as 'total_withdrawl' from $tmp where tr_amt LIKE '-%'");
          $withdrawl = mysqli_fetch_assoc($res)['total_withdrawl'];
        }
        echo $deposit; ?>
        </div>
        <div class="wd_class">
         <span style="font-size:1.2vw !important;"> Total withdrawl </span><br>
        <?php
        echo $withdrawl;
         ?>
        </div>
      </section>
      </form>

      </div>
      <div class="grid-content friend-pay">
        <form class="pay-menu" method="POST" action="friends.php">
          <span class="back-btn" onclick="backMenu()">
            <svg
              version="1.1"
              id="Layer_1"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              x="0px"
              y="0px"
              width="91.5px"
              height="54px"
              viewBox="0 0 91.5 54"
              enable-background="new 0 0 91.5 54"
              xml:space="preserve"
            >
              <line
                fill="none"
                stroke="#000000"
                stroke-width="10"
                stroke-linecap="round"
                stroke-miterlimit="10"
                x1="10.667"
                y1="26.833"
                x2="85.667"
                y2="26.833"
              />
              <line
                fill="none"
                stroke="#000000"
                stroke-width="10"
                stroke-linecap="round"
                stroke-miterlimit="10"
                x1="6.6"
                y1="27.086"
                x2="27.518"
                y2="6.17"
              />
              <line
                fill="none"
                stroke="#000000"
                stroke-width="10"
                stroke-linecap="round"
                stroke-miterlimit="10"
                x1="27.579"
                y1="48.102"
                x2="6.662"
                y2="27.187"
              />
            </svg>
          </span>
          <svg
            version="1.1"
            id="hand-money"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            width="512px"
            height="512px"
            viewBox="0 0 512 512"
            enable-background="new 0 0 512 512"
            xml:space="preserve"
          >
            <path
              fill="#FF9765"
              d="M499.79,341c-57.91,42.12-117.29,76.79-178.04,104.79c-44.13,26.83-88.25,25.92-132.33,0l-65.13-33.62
	V258.33h69.21c29.33,5.25,56.42,13.21,85.75,31.67l56,7.96c41.583,1.54,37.08,26.12,13.42,42.33
	c-18.84,13.83-43.71,13.04-69.21,10.75c-17.58-0.87-18.34,22.75,0,22.84c6.37,0.5,13.29-1,19.33-1c31.79-0.05,58-6.13,74.04-31.26
	l8.05-18.79l79.95-39.62C500.83,270.04,529.29,311.88,499.79,341z"
            />
            <path
              fill="none"
              d="M417.96,136.33l-197.84-53c-3.37,12.63-16.41,20.13-29,16.75l-16.37,61.17c12.63,3.37,20.13,16.37,16.75,28.96
	l197.88,53c3.33-12.63,16.37-20.13,28.95-16.75l16.38-61.17C422.08,161.96,414.58,148.92,417.96,136.33z M350.33,175.92
	c-6.75,25.16-32.54,40.08-57.71,33.33c-25.16-6.75-40.08-32.54-33.33-57.71c6.71-25.16,32.5-40.08,57.71-33.33
	C342.17,124.96,357.08,150.75,350.33,175.92z"
            />
            <g id="animator-hand">
              <path
                fill="gold"
                d="M176.71,46.46l-41.46,154.71l297.54,79.71l41.46-154.71L176.71,46.46z M418.33,226.46
		c-12.58-3.38-25.62,4.12-28.95,16.75l-197.88-53c3.38-12.59-4.12-25.59-16.75-28.96l16.37-61.17c12.59,3.38,25.63-4.12,29-16.75
		l197.84,53c-3.38,12.59,4.12,25.63,16.75,28.96L418.33,226.46z"
              />
              <path
                fill="orange"
                d="M350.33,175.92c-6.75,25.16-32.54,40.08-57.71,33.33c-25.16-6.75-40.08-32.54-33.33-57.71
		c6.71-25.16,32.5-40.08,57.71-33.33C342.17,124.96,357.08,150.75,350.33,175.92z"
              />
            </g>
            <rect y="243.54" fill="brown" width="124.46" height="184.08" />
          </svg>
          <div class="money-box">
            <select name="currency" id="currency">
              <option value="Rupee" selected>₹</option>
              <option value="Dollar">$</option>
              <option value="Euro">€</option>
              <option value="Pounds">£</option>
            </select>
            <input
              type="number"
              id="amount"
              placeholder="0"
              name="amount"
              required
              min="1"
            />
          </div>
          <input
            type="email"
            placeholder="Friend's email"
            name="friends-email"
            id="friends-email"
            required
            pattern="[a-zA-Z0-9._]+@[a-zA-Z0-9.]+\.[a-zA-Z]{2,4}$"
          />
          <input type="submit" value="Transfer" />
        </form>
        <div class="container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 705.23 649.23">
            <defs>
              <style>
                .cls-1 {
                  fill: var(--sec-background);
                }
                .cls-2 {
                  fill: var(--skin1);
                }
                .cls-3 {
                  fill: var(--bright);
                }
                .cls-4 {
                  fill: var(--dark);
                }

                .cls-6 {
                  fill: none;
                  stroke: rgb(0, 0, 0);
                  stroke-width: 2px;
                }
                .cls-6 {
                  stroke-linecap: round;
                }
              </style>
            </defs>
            <g id="Layer_2" data-name="Layer 2">
              <g id="Vector">
                <path
                  class="cls-1"
                  d="M497.44,15.78c82.39,11.67,185.76,56,204.53,121.3,18.78,65.47-47,151.75-109.62,220.78C529.75,427.05,470.37,479,397.62,514c-72.74,34.85-158.69,53-216.54,20.13C123.39,501.49,94,417.92,59.77,344.32c-34.34-73.76-73.59-137.71-55-182.54C23.4,117.12,99.87,91.57,157.39,75.5s95.92-22.84,146-36.54C353.3,25.08,414.88,4.11,497.44,15.78Z"
                />
                <path
                  class="cls-2"
                  d="M235.25,35.51c-13.21,0-17.34,20.64-17.34,28.89,0,14,14.86,71.82,28.89,71.82s28.9-57,28.9-63.56S258.36,35.51,235.25,35.51Z"
                />
                <rect
                  class="cls-3"
                  x="226.09"
                  y="15.8"
                  width="253.06"
                  height="444.29"
                  rx="25.35"
                  ry="25.35"
                  transform="translate(52.42 -63.45) rotate(11.1)"
                />
                <path
                  class="cls-4"
                  d="M449.19,30.59l-2.51,12.79a12.06,12.06,0,0,1-14.13,9.49l-85.62-16.8a12.07,12.07,0,0,1-9.49-14.13L340,9.15"
                />
                <line
                  class="cls-5"
                  x1="175.09"
                  y1="386.56"
                  x2="445.73"
                  y2="439.67"
                />
                <circle class="cls-4" cx="310.67" cy="434.45" r="10.03" />
                <path
                  class="cls-2"
                  d="M219.57,147c-17.34,0-28.9,13.2-28.9,27.24,0,46.22,26.42,84.19,38,84.19,24.76,0,33.84-13.21,33.84-22.29C262.49,229.49,259.19,147,219.57,147Z"
                />
                <path
                  class="cls-2"
                  d="M210.49,268.29c4.95,4.95,42.92,45.4,42.92,73.46,0,19-4.13,33.84-38.8,33.84-16.51,0-62.73-65.21-62.73-91.62,0-14.86,9.08-49.53,34.67-49.53,7.43,0,23.94,13.21,26.41,16.51a92.46,92.46,0,0,0,8.08,7.43C220,263.75,214.26,292,214.26,292"
                />
                <path
                  class="cls-6"
                  d="M222.65,281.88s-11.75-14.83-19.18-21.43"
                />
                <path
                  class="cls-2"
                  d="M204.32,434.35c-2.47,6.61-4.15,70.43,3.28,105.92-5,25.59-24.77,109-24.77,109H362l18.16-72.64S490.72,480,501.45,462.68,537.36,344.23,537,334.74c-.29-6.6-120.52-108.14-123.82-112.27s-61.36,54,35.22,120.9c-.83,8.25-.78,44.69-.78,44.69s-67.18,23.09-74,28.07-19.87,40.07-22.23,47.94C342.26,462.29,204.32,434.35,204.32,434.35Z"
                />
                <path
                  class="cls-6"
                  d="M337.31,505.43c2.25-8.6,13.16-39.49,15.87-46.86"
                />
              </g>
            </g>
          </svg>
          <h1>Pay your friends.</h1>
          <p>Pay money to your friends in few clicks. Click continue.</p>
          <button onclick="payMenu()">Continue</button>
        </div>
      </div>
    </div>
    <script src="./js/panelscript.js"></script>
  </body>
</html>
