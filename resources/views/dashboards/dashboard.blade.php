<x-app-layout :assets="$assets ?? []">
   <div class="row">
      <div class="col-md-12 col-lg-12">
         <div class="row row-cols-1">
            <div class="d-slider1 overflow-hidden ">
               <ul  class="swiper-wrapper list-inline m-0 p-0 mb-2">
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                              <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Total Sales</p>
                              <h4 class="counter" style="visibility: visible;">$560K</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-02" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                              <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Total Profit</p>
                              <h4 class="counter">$185K</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-03" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                              <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Total Cost</p>
                              <h4 class="counter">$375K</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-04" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                              <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Revenue</p>
                              <h4 class="counter">$742K</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-05" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                              <svg class="card-slie-arrow " width="24px" height="24px" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Net Income</p>
                              <h4 class="counter">$150K</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-06" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                              <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Today</p>
                              <h4 class="counter">$4600</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-07" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                              <svg class="card-slie-arrow " width="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p  class="mb-2">Members</p>
                              <h4 class="counter">11.2M</h4>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <div class="swiper-button swiper-button-next"></div>
               <div class="swiper-button swiper-button-prev"></div>
            </div>
         </div>
      </div>
      
      <div>
      <div class="row">
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Impressions</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                        <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border  bg-soft-danger rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Engagements Rate</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border bg-soft-info rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Reach</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border bg-soft-success rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="text-center">AVG Transport</div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div>
                           <h2 class="counter">2.648</h2>
                        26.84%
                     </div>
                     <div class="border  bg-soft-primary rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                     </div>
                  </div>
                  <div class="mt-4">
                     <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                        <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-info">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-info rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">5600</h2>
                        Doctors
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-warning">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-warning rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">5600</h2>
                        Nurses
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-danger">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-danger rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">3500</h2>
                        Patients
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card bg-soft-primary">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-soft-primary rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                           <h2 class="counter">4500</h2>
                        Pharmacists
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-info text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Customers
                           <h2 class="counter">75</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-warning text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Products
                           <h2 class="counter">60</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-success text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        User
                           <h2 class="counter">80</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="bg-danger text-white rounded p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="currentColor">
                           <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                     </div>
                     <div class="text-end">
                        Category
                           <h2 class="counter">45</h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-primary">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Today</span>
                     </div>
                     <div>
                        <span>08:00 Hr</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-info">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Week</span>
                     </div>
                     <div>
                        <span>40:00 Hr</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-danger">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Issue</span>
                     </div>
                     <div>
                        <span class="counter">1200</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="card border-bottom border-4 border-0 border-warning">
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div>
                        <span>Worked Income</span>
                     </div>
                     <div>
                        <span class="counter">$54000</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
         
   
        
      </div>
      <!--last part-->
      <div class="row">
         <div class="col-lg-6">
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Revenue</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">$35000</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-primary">Monthly</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>Total Revenue</span>
                           </div>
                           <div>
                              <span>35%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Orders</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">2500</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-warning">Anual</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>New Orders</span>
                           </div>
                           <div>
                              <span>24%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Leads</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">$35000</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-danger">Today</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>New Leads</span>
                           </div>
                           <div>
                              <span>50%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex justify-content-between">
                           <div>
                              <span><b>Conversion</b></span>
                              <div class="mt-2">
                                 <h2 class="counter">35%</h2>
                              </div>
                           </div>
                           <div>
                              <span class="badge bg-info">This Month</span>
                           </div>
                        </div>
                        <div class="d-flex justify-content-between mt-2">
                           <div>
                              <span>This Month</span>
                           </div>
                           <div>
                              <span class="counter">30%</span>
                           </div>
                        </div>
                        <div class="mt-3">
                           <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                              <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="border-bottom text-center pb-3">
                  <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar-80 mb-4">
                  <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar-80 mb-4">
                     <div>
                        <h5 class="mb-3">Bini Jets</h5>
                     </div>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                     <button type="button" class="btn btn-info mb-2">Assign</button>
                  </div>
                  <div class="d-flex justify-content-between mt-3">
                     <div>
                           <h2 class="mb-0 counter">4500</h2>
                        <div>Operations</div>
                     </div>
                     <div>
                           <h2 class="mb-0">3.9</h2>
                        <div>Medical Rating</div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      
   </div>
</x-app-layout>
