@extends('layouts.account')

@section('content')
<div class="ui basic relaxed segment">
  <div class="ui small container">
    <!-- Statistics: The Begin -->
    <div class="ui four column grid">
      <div class="column">
        <div class="ui segment">
          <div class="ui normal green header">
            <i class="bookmark outline icon"></i>
            <div style="text-align: right; width: 100%" class="content">
              <div class="sub header">Total Bookings</div>
              14 Books
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <div class="ui green normal header">
            <i class="fire icon"></i>
            <div style="text-align: right; width: 100%" class="content">
              <div class="sub header">Active Bookings</div>
              1 Books
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <div class="ui green normal header">
            <i class="heart outline icon"></i>
            <div style="text-align: right; width: 100%" class="content">
              <div class="sub header">Favorites</div>
              32 Carparks
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="ui segment">
          <div class="ui green normal header">
            <i class="inbox icon"></i>
            <div style="text-align: right; width: 100%" class="content">
              <div class="sub header">New Messages</div>
              12 Messages
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Statistics: The End -->

    <div class="ui two column grid">
      <!-- Recent Messages: The Begin -->
      <div class="column">
        <div class="ui segments">
          <div class="ui secondary center aligned segment">
            <h4 class="ui header">RECENT MESSAGES</h4>
          </div>
          <div style="height: 250px" class="ui pushable segment">
            <div class="pusher">
              <div class="ui middle aligned block list">
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Some Question About Booking
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Send by Mehmet Tanrıverdi</div>
                  </div>
                  <div class="right floated content">
                    <div class="mini ui green label">
                      New
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Good Choice
                    </div>
                    <div class="meta">
                      32 min ago
                    </div>
                    <div class="description">Send by Ali Gürbüz</div>
                  </div>
                  <div class="right floated content">
                    <div class="mini ui green label">
                      New
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ui secondary right aligned segment">
            <a class="ui small button">
              <i class="unhide icon"></i>
              View More
            </a>
          </div>
        </div>
      </div>
      <!-- Recent Messages: The End -->

      <!-- Recent Transaction: The Begin -->
      <div class="column">
        <div class="ui segments">
          <div class="ui secondary center aligned segment">
            <h4 class="ui header">RECENT TRANSACTIONS</h4>
          </div>
          <div style="height: 250px" class="ui pushable segment">
            <div class="pusher">
              <div class="ui middle aligned block list">
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      ATM Withdrawl
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Approved</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="red angle left icon"></i>
                      32,45 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Weekly Usage Payment
                    </div>
                    <div class="meta">
                      30 min ago
                    </div>
                    <div class="description">Paid by Görkem ÖZTÜRK</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="green angle right icon"></i>
                      144,65 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      ATM Withdrawl
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Approved</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="red angle left icon"></i>
                      32,45 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Weekly Usage Payment
                    </div>
                    <div class="meta">
                      30 min ago
                    </div>
                    <div class="description">Paid by Görkem ÖZTÜRK</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="green angle right icon"></i>
                      144,65 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      ATM Withdrawl
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Approved</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="red angle left icon"></i>
                      32,45 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Weekly Usage Payment
                    </div>
                    <div class="meta">
                      30 min ago
                    </div>
                    <div class="description">Paid by Görkem ÖZTÜRK</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="green angle right icon"></i>
                      144,65 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      ATM Withdrawl
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Approved</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="red angle left icon"></i>
                      32,45 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Weekly Usage Payment
                    </div>
                    <div class="meta">
                      30 min ago
                    </div>
                    <div class="description">Paid by Görkem ÖZTÜRK</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="green angle right icon"></i>
                      144,65 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      ATM Withdrawl
                    </div>
                    <div class="meta">
                      46 min ago
                    </div>
                    <div class="description">Approved</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="red angle left icon"></i>
                      32,45 TRY
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="left floated content">
                    <div class="header">
                      Weekly Usage Payment
                    </div>
                    <div class="meta">
                      30 min ago
                    </div>
                    <div class="description">Paid by Görkem ÖZTÜRK</div>
                  </div>
                  <div class="right floated content">
                    <div class="header">
                      <i class="green angle right icon"></i>
                      144,65 TRY
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ui secondary right aligned segment">
            <a class="ui small button">
              <i class="unhide icon"></i>
              View More
            </a>
          </div>
        </div>
      </div>
      <!-- Recent Transaction: The End -->
    </div>

    <!-- Recent Bookings: The Begin -->
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">
          RECENT BOOKINGS
        </h4>
      </div>
      <div class="ui secondary clearing segment">
        <div style="width: 50%" class="ui icon input">
          <input type="text" placeholder="Search...">
          <i class="search icon"></i>
        </div>
        <a class="ui icon circular right floated button">
          <i class="sort icon"></i>
        </a>
      </div>
      <div class="ui segment">
        <table class="ui very basic celled table">
          <thead>
            <tr class="center aligned">
              <th class="left aligned">BOOKING ID</th>
              <th>OWNER</th>
              <th>LICENCE PLATE</th>
              <th>USAGE TYPE</th>
              <th>SLOT</th>
              <th>TOTAL</th>
              <th>DATE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr class="center aligned">
              <td class="left aligned">ID: 32425</td>
              <td>Görkem Öztürk</td>
              <td>35 V 456</td>
              <td>Daily</td>
              <td>C1</td>
              <td>29,90 TRY</td>
              <td>May 20, 2018 - 14:36 PM</td>
              <td>
                <a class="ui icon circular green verifying button">
                  <i class="check icon"></i>
                </a>
                <a class="ui icon circular red rejecting button">
                  <i class="close icon"></i>
                </a>
              </td>
            </tr>
            <tr class="center aligned">
              <td class="left aligned">ID: 32854</td>
              <td>M. Ali Alabora</td>
              <td>34 KH 2246</td>
              <td>Weekly</td>
              <td>C1</td>
              <td>19,90 TRY</td>
              <td>May 20, 2018 - 14:36 PM</td>
              <td>
                <a class="ui icon circular green verifying button">
                  <i class="check icon"></i>
                </a>
                <a class="ui icon circular red rejecting button">
                  <i class="close icon"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="ui secondary right aligned segment">
        <a class="small ui button">
          <i class="download icon"></i>
          Download as a Spreadsheet
        </a>
      </div>
    </div>
    <!-- Recent Bookings: The Begin -->

    <!-- Bookings: The Begin -->
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">
          BOOKINGS
        </h4>
      </div>
      <div class="ui segment">
        <table class="ui very basic celled table">
          <thead>
            <tr class="center aligned">
              <th class="left aligned">BOOKING ID</th>
              <th>PARKING LOT</th>
              <th>USAGE TYPE</th>
              <th>SLOT</th>
              <th>TOTAL</th>
              <th>DATE</th>
              <th>ACTION</th>
            </tr>
          </thead>
          <tbody>
            <tr class="center aligned">
              <td class="left aligned">ID: 32425</td>
              <td>Car Park on Southampton Buildings</td>
              <td>Daily</td>
              <td>J4</td>
              <td>29,90 TRY</td>
              <td>May 20, 2018 - 14:36 PM</td>
              <td>
                <a class="ui icon circular green button">
                  <i class="unhide icon"></i>
                </a>
              </td>
            </tr>
            <tr class="center aligned">
              <td class="left aligned">ID: 32854</td>
              <td>Car Park on Southampton Buildings</td>
              <td>Daily</td>
              <td>A1</td>
              <td>19,90 TRY</td>
              <td>May 20, 2018 - 14:36 PM</td>
              <td>
                <a class="ui icon circular green button">
                  <i class="unhide icon"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="ui secondary right aligned segment">
        <a class="small ui button">
          <i class="download icon"></i>
          Download as a Spreadsheet
        </a>
      </div>
    </div>
    <!-- Bookings: The Begin -->

    <!-- Settings: The Begin -->
    <div class="ui segments">
      <div class="ui secondary center aligned segment">
        <h4 class="ui header">
          SETTINGS
        </h4>
      </div>
      <div class="ui secondary center aligned segment">
        <div class="mini ui compact secondary menu">
          <a class="active item" data-tab="profile">
            <i class="user outline icon"></i>
            PROFILE SETTINGS
          </a>
          <a class="item" data-tab="vehicle">
            <i class="car icon"></i>
            VEHICLE SETTINGS
          </a>
          <a class="item" data-tab="payment">
            <i class="credit card icon"></i>
            PAYMENT SETTINGS
          </a>
          <a class="item" data-tab="slot">
            <i class="road icon"></i>
            SLOT SETTINGS
          </a>
        </div>
      </div>
      <div class="ui fitted segment">
        <!-- Profile Settings: The Begin -->
        <div class="ui active tab segments" data-tab="profile">
          <div class="ui segment">
            <form class="ui form">
              <div class="ui horizontal divider">
                Account Information
              </div>
              <div class="two fields">
                <div class="field">
                  <label>First Name</label>
                  <input type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="field">
                  <label>Last Name</label>
                  <input type="text" name="last-name" placeholder="Last Name">
                </div>
              </div>
              <div class="field">
                <label>Date of Birth</label>
                <div class="three fields">
                  <div class="field">
                    <select class="ui fluid search dropdown" name="">
                      <option value="">Day</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="field">
                    <select class="ui fluid search dropdown" name="">
                      <option value="">Month</option>
                      <option value="1">January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                  <div class="field">
                    <select class="ui fluid search dropdown" name="">
                      <option value="">Year</option>
                      <option value="1">1999</option>
                      <option value="2">2000</option>
                      <option value="3">2001</option>
                      <option value="4">2002</option>
                      <option value="5">2003</option>
                      <option value="6">2004</option>
                      <option value="7">2005</option>
                      <option value="8">2006</option>
                      <option value="9">2007</option>
                      <option value="10">2008</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="field">
                <label>Reset the Password</label>
                <div class="three fields">
                  <div class="field">
                    <a class="ui small fluid reset password button">
                      <i class="sync alternate icon"></i>
                      Reset the Password
                    </a>
                  </div>
                </div>
              </div>

              <br>
              <div class="ui horizontal divider">
                Contact Information
              </div>
              <div class="two fields">
                <div class="field">
                  <label>E-Mail Address</label>
                  <input type="text" name="mail" placeholder="E-Mail Address">
                </div>
                <div class="field">
                  <label>Mobile/Cell Number</label>
                  <input type="text" name="cell" placeholder="Mobile/Cell Number">
                </div>
              </div>
              <div class="three fields">
                <div class="field">
                  <label>Country</label>
                  <input type="text" name="first-name" placeholder="Country">
                </div>
                <div class="field">
                  <label>City</label>
                  <input type="text" name="last-name" placeholder="City">
                </div>
                <div class="field">
                  <label>Province</label>
                  <input type="text" name="first-name" placeholder="Province">
                </div>
              </div>
              <div class="field">
                <label>Address</label>
                <textarea rows="2"></textarea>
              </div>
            </form>
          </div>
          <div class="ui secondary right aligned segment">
            <button type="button" class="ui green small button">
              <i class="save icon"></i>
              Save Your Settings
            </button>
            <button type="button" class="ui small button">
              <i class="history icon"></i>
              Reset
            </button>
          </div>
        </div>
        <!-- Profile Settings: The End -->

        <!-- Vehicle Settings: The Begin -->
        <div style="margin: 0" class="ui tab segments" data-tab="vehicle">
          <div class="ui segment">
            <div class="ui horizontal divider">
              Vehicle Details
            </div>
            <h4 class="ui normal header">Licence Plates</h4>
            <h3 style="margin: 0" class="disabled ui normal header">No saved license plates.</h3>
          </div>
          <div class="ui secondary right aligned segment">
            <button type="button" class="ui small green button">
              <i class="add square icon"></i>
              Add a Licence Plate
            </button>
          </div>
        </div>
        <!-- Vehicle Settings: The End -->

        <!-- Payment Settings: The Begin -->
        <div style="margin: 0" class="ui tab segments" data-tab="payment">
          <div class="ui segment">
            <div class="ui horizontal divider">
              Payment Details
            </div>
            <h4 class="ui normal header">Credit Cards</h4>
            <h3 style="margin: 0" class="disabled ui normal header">No saved any credit card.</h3>
          </div>
          <div class="ui secondary right aligned segment">
            <button type="button" class="ui green small button">
              <i class="add square icon"></i>
              Add a Credit Card Plate
            </button>
          </div>
        </div>
        <!-- Payment Settings: The End -->

        <!-- Slot Settings: The Begin -->
        <div style="margin: 0" class="ui tab segments" data-tab="slot">
          <div class="ui segment">
            <div class="ui horizontal divider">
              Slot Details
            </div>
            <div class="ui four column grid">
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot teal button">
                  <i class="gem outline icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot button">
                  <i class="road icon"></i>
                  A1
                </a>
              </div>
              <div class="column">
                <a class="ui fluid mini icon labeled slot orange button">
                  <i class="exclamation triangle icon"></i>
                  A1
                </a>
              </div>
            </div>
            <div class="ui basic horizontally fitted center aligned segment">
              <div class="small ui horizontal list">
                <div class="item">
                  <i class="grey circle icon"></i>
                  Enable Slot
                </div>
                <div class="item">
                  <i class="orange circle icon"></i>
                  Disable Slot
                </div>
                <div class="item">
                  <i class="teal circle icon"></i>
                  Private Slot
                </div>
              </div>
            </div>
          </div>
          <div class="ui secondary right aligned segment">
            <button type="button" class="ui green small button">
              <i class="add square icon"></i>
              Add a New Slot
            </button>
          </div>
        </div>
        <!-- Slot Settings: The End -->
      </div>
    </div>
    <!-- Settings: The End -->
  </div>
</div>
@endsection
