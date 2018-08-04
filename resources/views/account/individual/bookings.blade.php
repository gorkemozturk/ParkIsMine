@extends('layouts.account')

@section('content')
<!-- Bookings: The Begin -->
<table class="ui celled table">
  <thead>
    <tr>
      <th class="center aligned" colspan="7">
        <h4 class="ui header">BOOKING</h4>
      </th>
    </tr>
  </thead>
  <thead>
    <tr>
      <th colspan="8">
        <div class="ui icon input">
          <i class="search icon"></i>
          <input type="text" placeholder="Search...">
        </div>
        <a class="ui circular icon right floated button">
          <i class="sort icon"></i>
        </a>
      </th>
    </tr>
  </thead>
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
      <td>Alsancak Katlı Otopark</td>
      <td>Daily</td>
      <td>C1</td>
      <td>29,90 TRY</td>
      <td>May 20, 2018 - 14:36 PM</td>
      <td>
        <a class="ui icon circular green verifying button">
          <i class="unhide icon"></i>
        </a>
      </td>
    </tr>
    <tr class="center aligned">
      <td class="left aligned">ID: 32854</td>
      <td>Migros Bahçeler Arası</td>
      <td>Weekly</td>
      <td>C1</td>
      <td>19,90 TRY</td>
      <td>May 20, 2018 - 14:36 PM</td>
      <td>
        <a class="ui icon circular green verifying button">
          <i class="unhide icon"></i>
        </a>
      </td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th class="right aligned" colspan="7">
        <a class="ui small button">
          <i class="download icon"></i>
          Download as a Spreadsheet
        </a>
      </th>
    </tr>
  </tfoot>
</table>
<!-- Bookings: The End -->
@endsection
