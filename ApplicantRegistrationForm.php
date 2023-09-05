<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Applicant Registration Form | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="userdashboard.php">
          <img src="assets/images/logo/lankabangla-logo.png" alt="logo"  height="60px"/>
        </a>
      </div>
      
      <nav class="sidebar-nav">
        <ul>
          <span class="divider"><hr /></span>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_1"
              aria-controls="ddmenu_1"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.74999 18.3333C12.2376 18.3333 15.1364 15.8128 15.7244 12.4941C15.8448 11.8143 15.2737 11.25 14.5833 11.25H9.99999C9.30966 11.25 8.74999 10.6903 8.74999 10V5.41666C8.74999 4.7263 8.18563 4.15512 7.50586 4.27556C4.18711 4.86357 1.66666 7.76243 1.66666 11.25C1.66666 15.162 4.83797 18.3333 8.74999 18.3333Z" />
                  <path
                    d="M17.0833 10C17.7737 10 18.3432 9.43708 18.2408 8.75433C17.7005 5.14918 14.8508 2.29947 11.2457 1.75912C10.5629 1.6568 10 2.2263 10 2.91665V9.16666C10 9.62691 10.3731 10 10.8333 10H17.0833Z" />
                </svg>
              </span>
              <a href="userdashboard.php"><span class="text">Dashboard</span></a>
            </a>
            
          </li>
          
          
         
          <span class="divider"><hr /></span>
          
          
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_5"
              aria-controls="ddmenu_5"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M4.16666 3.33335C4.16666 2.41288 4.91285 1.66669 5.83332 1.66669H14.1667C15.0872 1.66669 15.8333 2.41288 15.8333 3.33335V16.6667C15.8333 17.5872 15.0872 18.3334 14.1667 18.3334H5.83332C4.91285 18.3334 4.16666 17.5872 4.16666 16.6667V3.33335ZM6.04166 5.00002C6.04166 5.3452 6.32148 5.62502 6.66666 5.62502H13.3333C13.6785 5.62502 13.9583 5.3452 13.9583 5.00002C13.9583 4.65485 13.6785 4.37502 13.3333 4.37502H6.66666C6.32148 4.37502 6.04166 4.65485 6.04166 5.00002ZM6.66666 6.87502C6.32148 6.87502 6.04166 7.15485 6.04166 7.50002C6.04166 7.8452 6.32148 8.12502 6.66666 8.12502H13.3333C13.6785 8.12502 13.9583 7.8452 13.9583 7.50002C13.9583 7.15485 13.6785 6.87502 13.3333 6.87502H6.66666ZM6.04166 10C6.04166 10.3452 6.32148 10.625 6.66666 10.625H9.99999C10.3452 10.625 10.625 10.3452 10.625 10C10.625 9.65485 10.3452 9.37502 9.99999 9.37502H6.66666C6.32148 9.37502 6.04166 9.65485 6.04166 10ZM9.99999 16.6667C10.9205 16.6667 11.6667 15.9205 11.6667 15C11.6667 14.0795 10.9205 13.3334 9.99999 13.3334C9.07949 13.3334 8.33332 14.0795 8.33332 15C8.33332 15.9205 9.07949 16.6667 9.99999 16.6667Z" />
                </svg>
              </span>
              <span class="text"> Forms </span>
            </a>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
                <a href="ApplicantRegistrationForm.php"> Applicant Registration Form </a>
              </li>
            </ul>
            <ul id="ddmenu_5" class="collapse dropdown-nav">
              <li>
              <a href="nominee_one_form.php">First Nominee Form </a>
              </li>
            </ul>
          </li>
          
          <span class="divider"><hr /></span>

          
        </ul>
      </nav>
      
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                
                
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div class="image">
                          <img src="assets/images/profile/profile-image.png" alt="" />
                        </div>
                        <div>
                          <h6 class="fw-500">Samnoon Ahmed</h6>
                          <p>Admin</p>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="image">
                          <img src="assets/images/profile/profile-image.png" alt="image">
                        </div>
                        <div class="content">
                          <h4 class="text-sm">Adam Joe</h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs"
                            href="#">Email@gmail.com</a>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-alarm"></i> Notifications
                      </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                    </li>
                    <li>
                      <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0"> <i class="lni lni-exit"></i> Sign Out </a>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <!-- ========== tab components start ========== -->
      <section class="tab-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Applicant Registration Form</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Applicant Registration Form
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== form-elements-wrapper start ========== -->
          <div class="form-elements-wrapper">
          <form action="connect.php" method="post">
            <div class="row">
              <div class="col-lg-7">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">FIRST APPLICANT INFORMATION</h6>
                  <div class="input-style-1">
                    <label>Account Holder</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Full Name" name="ah_name" id="ah_name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Father's/Husband's Name</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Father's/Husband's Full Name" name="ah_fh_name" id="ah_fh_name"  />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>

                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="isfather" id="isfather"  />
                    <label class="form-check-label" for="checkbox-1">Is Father</label>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Mother Name</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Mother Name" name="ah_m_name" id="ah_m_name"/>
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Spouse</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Spouse Name" name="ah_sp_name" id="ah_sp_name"/>
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->
                  
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->
              </div>
                <!-- ======= input style start ======= -->
                  <!-- start card -->

                
               <div class="col-lg-6">
                    <!-- input style start -->
                    <div class="card-style mb-30">
                      <h6 class="mb-25">CONTACT INFORMATION</h6>
                      <div class="input-style-1">
                        <label>Phone</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="tel" placeholder="01XX-XXXXXXX"  pattern="[0-9]{11}" name="ah_phone_number" id="ah_phone_number"/>
                      </div>
                      <!-- end input -->

                      <div class="input-style-1">
                        <label>Fax</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="tel" placeholder="+88-01XX-XXXXXXX"  pattern="[0-9]{11}" name="ah_fax" id="ah_fax"/>
                      </div>
                      <!-- end input -->

                      <div class="input-style-1">
                        <label>Email</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="email" placeholder="someone@gmail.com"  name="ah_email" id="ah_email"/>
                      </div>
                      <!-- end input -->

                      <div class="input-style-1">
                        <label>e-tin</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="tel" placeholder="123456789012345" pattern="[0-9]{15}"  name="ah_etin" id="ah_etin"/>
                      </div>
                      <!-- end input -->

                      <div class="input-style-1">
                        <label>NID</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="tel" placeholder="12345678901234" pattern="[0-9]{14}"  name="ah_nid" id="ah_nid" />
                      </div>
                      <!-- end input -->

                      <div class="input-style-1">
                        <label>Birth Registration</label>
                      </div>
                      <!-- start input -->
                      <div class="input-style-2">
                        <input type="tel" placeholder=" " pattern="[0-9]{14}"  name="ah_birthrege" />
                      </div>
                      <!-- end input -->

                      <div class="select-style-1">
                        <label>Occupation</label>
                        <div class="select-position">
                          <select  name="ah_ocupation">
                          <option >Select Occupation</option>
                            <option value="Serviceprovider">Service provider</option>
                            <option value="Engineer">Engineer</option>
                            <option value="Other">Other</option>
                            <option value="Business">Business</option>
                          </select>
                        </div>
                      </div>
                      <!-- end input -->

                  <div class="input-style-1">
                    <label>Birth Date</label>
                    <input type="date" name="ah_date"/>
                  </div>
                  <!-- end input -->


                  <div class="select-style-1">
                    <label>Gender</label>
                    <div class="select-position">
                      <select name="ah_gender">
                      <option >Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                  <!-- end input -->


                  <div class="select-style-1">
                    <label>Nationality</label>
                    <div class="select-position">
                      <select name="ah_nationality">
                      <option >Select Nationality</option>
                        <option value="Bangladeshi">Bangladeshi</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                  </div>
                  <!-- end input -->

                  <div class="select-style-1">
                    <label>Residency</label>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="checkbox-1" id="checkbox-1" name="r1" />
                    <label class="form-check-label" for="checkbox-1">Resident</label>
                    <input class="form-check-input" type="checkbox" value="checkbox-1" id="checkbox-1" name="r1"  />
                    <label class="form-check-label" for="checkbox-1">Non Resident</label>
                  </div>
                  </div>



                 </div>
                  <!-- end card -->


                  <!-- ======= Bank  style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">BANK DETAILS</h6>
                  <div class="input-style-1">
                    <label>Routing No</label>
                  </div>
                  <div class="input-style-2">
                    <input type="tel" placeholder=""  pattern="[0-9]{15}" />
                  </div>
                  <div class="select-style-1">
                    <label>Bank</label>
                    <div class="select-position">
                      <select >
                        <option value="">DBBL</option>
                        <option value="">EBL</option>
                        <option value="">BRAC</option>
                        <option value="">ASIA</option>
                      </select>
                    </div>
                  </div>
                  <div class="select-style-1">
                    <label>Branch</label>
                    <div class="select-position">
                      <select >
                        <option value="">Uttara</option>
                        <option value="">Mirpur</option>
                        <option value="">Khilkhet</option>
                        <option value="">Boshundhora</option>
                      </select>
                    </div>
                  </div>
                  <div class="input-style-1">
                    <label>Account No</label>
                  </div>
                  <div class="input-style-2">
                    <input type="tel" placeholder="11112222333344445555"  pattern="[0-9]{13}" />
                  </div>

                  </div>
                <!-- ======= Bank style end ======= -->



                <!-- ======= Passport  style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">PASSPORT DETAILS</h6>
                  <div class="input-style-1">
                    <label>Passport No</label>
                  </div>
                  <div class="input-style-2">
                    <input type="text" placeholder=""  pattern="[0-9]{15}" />
                  </div>
                  <div class="input-style-1">
                    <label>Issue Place</label>
                  </div>
                  <div class="input-style-2">
                    <input type="text" placeholder=""  pattern="[0-9]{15}" />
                  </div>
                  <div class="input-style-1">
                    <label>Issue Date</label>
                  </div>
                  <div class="input-style-2">
                    <input type="date" />
                    <span class="icon"><i class="lni lni-chevron-down"></i></span>
                  </div>
                  <div class="input-style-1">
                    <label>Expiry Date</label>
                  </div>
                  <div class="input-style-2">
                    <input type="date" />
                    <span class="icon"><i class="lni lni-chevron-down"></i></span>
                  </div>
                  

                  </div>
                <!-- ======= passport style end ======= -->

                <div class="card-style mb-30">
                <div class="select-style-1">
                  <label>VALUE ADDED SERVICE</label>
                <div class="form-check checkbox-style mb-20">
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                  <label class="form-check-label" for="checkbox-1">Internet Trading</label>
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                  <label class="form-check-label" for="checkbox-1">Email Service</label>
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                  <label class="form-check-label" for="checkbox-1">SMS Service</label>
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                  <label class="form-check-label" for="checkbox-1">i-Broker Service</label>
                  <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                  <label class="form-check-label" for="checkbox-1">Insurance</label>
                </div>
                </div>
              </div>





              </div>
                <!-- ======= input style end ======= -->
              

                  <!-- end col -->



               <!-- ======= checkbox style start ======= -->
              <div class="col-lg-6">
                <div class="card-style mb-30">
                  <h6 class="mb-25">PLEASE TICK WHICHEVER IS APPLICABLE</h6>
                  <div class="input-style-1">
                    <label>Operation Type:</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Individual</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Joint Holder</label>
                  </div>
                  <!-- end checkbox -->
                  <div class="input-style-1">
                    <label>Account Type:</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Direct Trading with no Margin</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Margin Account</label>
                  </div>
                  <!-- end checkbox -->
                  <div class="input-style-1">
                    <label>Client Type:</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Regular</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Clearing</label>
                  </div>
                  <!-- end checkbox -->
                  
                </div>
                <!-- ======= checkbox style end ======= -->
                

                <!-- ======= select style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">CHOOSE PREFERRED BRANCH</h6>
                  <div class="select-style-1">
                    <label>Preferred Branch</label>
                    <div class="select-position">
                      <select >
                        <option value="">Online</option>
                        <option value="">Principal</option>
                        <option value="">Uttara</option>
                        <option value="">Gulshan</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
                <!-- end card -->
              
                <!-- ======= select style end ======= -->

                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">PRESENT ADDRESS DETAILS</h6>
                  <div class="input-style-1">
                    <label>Present Address</label>
                    <textarea placeholder="Present Address" rows="3"></textarea>
                  </div>
                  <div class="select-style-1">
                    <label>Country</label>
                    <div class="select-position">
                      <select >
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">Uk</option>
                        <option value="">USA</option>
                      </select>
                    </div>
                  </div>

                  <div class="input-style-1">
                    <label>City</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="City" />
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>State/Division</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="State/Division" />
                  </div>
                  <!-- end input -->


                  <div class="input-style-1">
                    <label>PostCode</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="tel" placeholder="PostCode"  />
                  </div>
                  <!-- end input -->

                  <!-- end textarea -->
                </div>
                <!-- ======= textarea style end ======= -->


                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">PERMANANT ADDRESS DETAILS</h6>
                  <div class="input-style-1">
                    <label>Present Address</label>
                    <textarea placeholder="Present Address" rows="3"></textarea>
                  </div>
                  <div class="select-style-1">
                    <label>Country</label>
                    <div class="select-position">
                      <select >
                        <option value="">Bangladesh</option>
                        <option value="">India</option>
                        <option value="">Uk</option>
                        <option value="">USA</option>
                      </select>
                    </div>
                  </div>

                  <div class="input-style-1">
                    <label>City</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="City" />
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>State/Division</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="State/Division" />
                  </div>
                  <!-- end input -->


                  <div class="input-style-1">
                    <label>PostCode</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="tel" placeholder="PostCode"  pattern="[0-9]{5}" />
                  </div>
                  <!-- end input -->

                  <!-- end textarea -->
                </div>
                <!-- ======= textarea style end ======= -->
                <!-- ======= INTRODUCER DEATILS  style start ======= -->
                <div class="card-style mb-30">
                  <h6 class="mb-25">INTRODUCER DEATILS</h6>
                  <div class="input-style-1">
                    <label>Introducer Code</label>
                  </div>
                  <div class="input-style-2">
                    <input type="text" placeholder=""  />
                  </div>
                  <div class="input-style-1">
                    <label>Introducer No</label>
                  </div>
                  <div class="input-style-2">
                    <input type="tel" placeholder=""  />
                  </div>
                  <div class="input-style-1">
                    <label>Introducer Email/Dealer Email</label>
                  </div>
                  <div class="input-style-2">
                    <input type="tel" placeholder="someone@gmail.com" />
                  </div>
                 

                  </div>
                <!-- ======= INTRODUCER DEATILS end ======= -->

                <div class="card-style mb-30">
                  <h6 class="mb-25">UPLOAD FIRST APPLICANT PHOTO SIGNATURE,NID</h6>
                  <div class="input-style-1">
                    <label>First Applicant Photo</label>
                  </div>
                  <div class="input-style-2">

                  <input type="file" id="pic" name="Pic" accept="image/png, image/jpeg">
                  </div>

                  <div class="input-style-1">
                    <label>First Applicant Signature</label>
                  </div>
                  <div class="input-style-2">

                    <input type="file" id="pic" name="Pic" accept="image/png, image/jpeg">
                  </div>
                  <div class="input-style-1">
                    <ul style=" display: block;
                    list-style-type: disc;
                    margin-top: 1em;
                    margin-bottom: 1 em;
                    margin-left: 0;
                    margin-right: 0;
                    padding-left: 40px;
                    color: red;">
                      <li>Photo height must not exceed 708px(7.37 inch) and width must not exceed 590px(6.13 inch), size should be less than 80KB
                      </li>
                      <li>Signature height must not exceed 80px(0.82 inch) and width must not exceed 300px(3.12 inch), size should be less than 50KB
                      </li>
                      <li>All file extension should be JPG</li>
                    </ul>
                  </div>
                  
                  </div>

            
                
              </div>
                  





              
            <!-- ======= AUTHORIZED PERSON style start ======= -->
              <div class="col-lg-7">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <h6 class="mb-25" style="color: red;">AUTHORIZED PERSON INFORMATION (OPTIONAL)</h6>
                  <div class="input-style-1">
                    <label>Name of Authorized Person</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Full Name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Father's/Husband's Name</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Father's/Husband's Full Name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>

                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="" id="checkbox-1"  />
                    <label class="form-check-label" for="checkbox-1">Is Father</label>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Date of Birth</label>
                  </div>
                  <div class="input-style-2">
                    <input type="date" />
                    <span class="icon"><i class="lni lni-chevron-down"></i></span>
                  </div>
                  <div class="input-style-1">
                    <label>Sex</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="Male" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Male</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="Female" id="checkbox-2" />
                    <label class="form-check-label" for="checkbox-2">
                      Female</label>
                  </div>
                  <div class="select-style-1">
                    <label>Nationality</label>
                    <div class="select-position">
                      <select>
                        <option value="">Bangladeshi</option>
                        <option value="">Other</option>
                      </select>
                    </div>
                  </div>
                  <div class="input-style-1">
                    <label>Present Address</label>
                    <textarea placeholder="Present Address" rows="3"></textarea>
                  </div>
                  <div class="input-style-1">
                    <label>Permanent Address</label>
                    <textarea placeholder="Permanent Address" rows="3"></textarea>
                  </div>
                  <div class="input-style-1">
                    <label>Mobile</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="tel" placeholder="01XX-XXXXXXX"  pattern="[0-9]{11}"/>
                  </div>
                  <!-- end input -->
                  <div class="input-style-1">
                    <label>Telephone</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="tel" placeholder=""  pattern="[0-9]{11}"/>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Email</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="email" placeholder="someone@gmail.com" />
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>e-tin</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="tel" placeholder="123456789012345" pattern="[0-9]{15}" />
                  </div>
                  <!-- end input -->
                  <div class="select-style-1">
                    <label>Occupation</label>
                    <div class="select-position">
                      <select>
                        <option value="">Service provider</option>
                        <option value="">Engineer</option>
                        <option value="">Other</option>
                        <option value="">Business</option>
                      </select>
                    </div>
                  </div>

                  <div class="input-style-1">
                    <label>Name of the Stock Exchange/Listed Company</label>
                  </div>
                  <!-- start input -->
                  <div class="input-style-2">
                    <input type="text" placeholder="Stock Exchange/Listed Company Name" />
                    <span class="icon"> <i class="lni lni-user"></i> </span>
                  </div>
                  <!-- end input -->

                  <div class="input-style-1">
                    <label>Authorization type</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="Male" id="checkbox-1" />
                    <label class="form-check-label" for="checkbox-1">
                      Buy</label>
                  </div>
                  <div class="form-check checkbox-style mb-20">
                    <input class="form-check-input" type="checkbox" value="Female" id="checkbox-2" />
                    <label class="form-check-label" for="checkbox-2">
                      Sale</label>
                  </div>

                  <div class="input-style-1">
                    <label>Photo</label>
                  </div>
                  <div class="input-style-2">
                  <input type="file" id="pic" name="Pic" accept="image/png, image/jpeg">
                  <span class="icon"> <i class="lni lni-user"></i> </span>

                  </div>

                  <div class="input-style-1">
                    <label>Signature</label>
                  </div>
                  <div class="input-style-2">

                    <input type="file" id="pic" name="Pic" accept="image/png, image/jpeg">
                  </div>
                  <div class="input-style-1">
                    <ul style=" display: block;
                    list-style-type: disc;
                    margin-top: 1em;
                    margin-bottom: 1 em;
                    margin-left: 0;
                    margin-right: 0;
                    padding-left: 40px;
                    color: red;">
                      <li>Photo height must not exceed 708px(7.37 inch) and width must not exceed 590px(6.13 inch), size should be less than 80KB
                      </li>
                      <li>Signature height must not exceed 80px(0.82 inch) and width must not exceed 300px(3.12 inch), size should be less than 50KB
                      </li>
                      <li>All file extension should be JPG</li>
                    </ul>
                  </div>









                  
                  
                </div>
                <!-- end card -->
                <!-- ======= input style end ======= -->
              </div>
              <!-- ======= AUTHORIZED PERSON style End ======= -->
              <div class="col-lg-6">

              <input type="submit" class="main-btn primary-btn btn-hover" value="submit">
            </div>
             





                
                <!-- ======= select style start ======= -->
                
                <div class="col-lg-6">

                

                
                
                
            
                
              
              <!-- end col -->
            </div>
            <!-- end row -->
          </form>




          <script>
        var lastChecked;

        function toggleCheckbox(checkbox) {
            if (lastChecked && lastChecked !== checkbox) {
                lastChecked.checked = false;
            }
            lastChecked = checkbox;
        }
    </script>
          </div>
          <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== tab components end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    Samnoon Ahmed
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
