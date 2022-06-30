@extends('welcome')


@section('content')

 <section class="jobguru-breadcromb-area">
    <div class="breadcromb-top section_100">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="breadcromb-box">
                   <h3>Submit resume</h3>
                </div>
             </div>
          </div>
       </div>
    </div>

 </section>


  <section class="jobguru-submit-resume-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="submit-resume-box">
                    <form method="POST" action="{{ route('submit') }}">
                        @csrf
                        <div class="resume-box">
                           <div class="single-resume-feild resume-avatar">
                              <div class="resume-image">
                                 <img src="assets/img/resume-avatar.jpg" alt="resume avatar" />
                                 <div class="resume-avatar-hover">
                                    <div class="resume-avatar-upload">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          upload
                                       </p>
                                       <input type="file" name="file">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <h3>Personal Information</h3>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="name">Your Name:</label>
                                 <input type="text" placeholder="Your Full Name" name="name" id="name">
                              </div>
                             
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Email">Email:</label>
                                 <input type="email" placeholder="Your Email Address" name="Email" id="Email">
                              </div>
                              <div class="single-input">
                                 <label for="Phone">Phone:</label>
                                 <input type="tel" placeholder="Phone Number" name="Phone" id="Phone">
                              </div>
                               <div class="single-input">
                                 <label for="p_title">total experience</label>
                                 <input type="text" placeholder="experience..." name="exp" id="exp">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Region">Nationality</label>
                                 <select id="Region" name="Region">
                                    <option selected>select Country</option>
                                    <option>Arab Amirats</option>
                                    <option>America</option>
                                    <option>Netherlands</option>
                                    <option>Russia</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Brazil</option>
                                    <option>Africa</option>
                                 </select>
                              </div>
                              <div class="single-input">
                                 <label for="Address">Preferred Department/Function:</label>
                                 <input type="text" placeholder="Preferred Department/Function.." id="Address" name="Address">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Bio">key skill</label>
                                 <input id="skill" placeholder="skills"  name="skill">
                              </div>
                              <div class="single-input">
                                 <label for="Bio">Preferred Industry </label>
                                 <input id="ind" placeholder="industry" name="ind">
                              </div>
                           </div>
                           <div class="single-resume-feild feild-flex-2">
                              <div class="single-input">
                                 <label for="Bio">Expected salary in USD / month </label>
                                 <input id="salary" placeholder="salary" name="salary">
                              </div>
                              <div class="single-input">
                                 <label for="Bio">remarks </label>
                                 <input id="remarks" placeholder="remarks" name="remarks">
                              </div>
                           </div>
                        </div>
                      
                        <div class="submit-resume">
                           <button type="submit">Save Resume</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

    
@endsection