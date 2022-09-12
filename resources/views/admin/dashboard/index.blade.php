@extends('layouts\layout_admin\master_admin')

@section('title')
| Dashboard-Admin
@endsection

@section('content')
{{-- <nav class="page-breadcrumb">
<<<<<<< HEAD
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Table</li>
    </ol>
</nav> --}}

<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
        <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Users</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">
                                    {{ $users }}
                                </h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+3.3%</span>
                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Property</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">{{ $property }}</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-danger">
                                        <span>-2.8%</span>
                                        <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h6 class="card-title mb-0">Property With Ads</h6>
                            <div class="dropdown mb-2">
                                <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                                            class="icon-sm mr-2"></i> <span class="">View</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                                            class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                                            class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="printer" class="icon-sm mr-2"></i> <span
                                            class="">Print</span></a>
                                    <a class="dropdown-item d-flex align-items-center" href="#"><i
                                            data-feather="download" class="icon-sm mr-2"></i> <span
                                            class="">Download</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2">{{ $ads }}</h3>
                                <div class="d-flex align-items-baseline">
                                    <p class="text-success">
                                        <span>+2.8%</span>
                                        <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                    </p>
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->
<div class="card shadow">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Monthly sales</h6>
            <div class="dropdown mb-2">
                <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye"
                            class="icon-sm mr-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2"
                            class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash"
                            class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer"
                            class="icon-sm mr-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download"
                            class="icon-sm mr-2"></i> <span class="">Download</span></a>
                </div>
            </div>
        </div>
        <p class="text-muted mb-4">Sales are activities related to selling or the number of goods or services sold
            in a given time period.</p>
        <div class="monthly-sales-chart-wrapper">
            <canvas id="monthly-sales-chart"></canvas>
        </div>
    </div>
</div>

@endsection
=======
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
  </ol>
</nav> --}}

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">Dashboard</h6>
        {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official DataTables
            Documentation </a>for a full list of instructions and other options.</p> --}}
        <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
              </tr>
              <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
              </tr>
              <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
              </tr>
              <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
              </tr>
              <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
              </tr>
              <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
              </tr>
              <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
              </tr>
              <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
              </tr>
              <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
              </tr>
              <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
              </tr>
              <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
              </tr>
              <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
              </tr>
              <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
              </tr>
              <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
              </tr>
              <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
>>>>>>> origin/auth
