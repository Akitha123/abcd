
<x-site-layout>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet SL</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Make Your Pets Happy</h1>
                    <p class="fs-4 text-white mb-lg-4"> We are a dedicated team of passionate animal lovers committed to providing the highest quality care for your beloved pets.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <!--<a href="" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a> 
                        <button type="button" class="btn-play" data-bs-toggle="modal" 
                            data-src=" https://www.youtube.com/watch?v=7Gfoij2uP7I" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                         <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="newtemp/img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4"> We are a dedicated team of passionate animal lovers committed to providing the highest quality care for your beloved pets.-</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                             <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vission</button>
                            </li> 
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0"> At PetsL Shop, our mission is to enhance the well-being and happiness of every pet in our care. We are dedicated to providing exceptional services that cater to the unique needs of each animal, ensuring a safe, loving, and stimulating environment. Our goal is to build lasting relationships with both pets and their owners through compassionate care, professional expertise, and a commitment to excellence. We strive to be a trusted partner in your pet's life, offering a wide range of services that promote health, happiness, and harmony. At PetsL Shop, we believe that every pet deserves the best, and we are here to deliver just that.</p>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">At PetsL Shop, our vision is to be the leading pet care provider, recognized for our unwavering commitment to excellence and innovation in pet care services. We aspire to create a community where every pet feels loved, healthy, and valued. By continually advancing our facilities, expanding our range of services, and fostering a culture of compassion and expertise, we aim to set new standards in the industry. Our vision is to not only meet but exceed the expectations of pet owners, ensuring that PetsL Shop is synonymous with trust, quality, and unparalleled care. We envision a future where every pet thrives and every pet owner has peace of mind knowing their furry friends are in the best hands.</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-house display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                            <p> Pet boarding provides a safe and comfortable environment for pets when their owners are away, ensuring they receive proper care, attention, and companionship.</p>
                            <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                            <p> Proper pet feeding is essential for maintaining your pet's health and well-being, requiring a balanced diet tailored to their specific nutritional needs.</p>
                            <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                            <p> Regular pet grooming is crucial for maintaining your pet's hygiene and appearance, preventing health issues, and ensuring they feel comfortable and cared for.</p>
                            <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-cat display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Training</h5>
                            <p> Pet training is essential for fostering good behavior, enhancing communication between pets and their owners, and ensuring a harmonious living environment.</p>
                            <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-dog display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                            <p> Regular pet exercise is vital for maintaining physical health, mental stimulation, and overall well-being, helping to prevent obesity and behavioral issues.</p>
                            <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                            <p> Timely pet treatments, including vaccinations, parasite control, and medical care, are crucial for preventing illnesses and ensuring your pet's long-term health and well-being.</p>
                           <!-- <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img  width = "400" src="\images\product-1.jpeg"  >
                        <h6 class="text-uppercase">PEDIGREE PETFOOD MIL K& CHICKEN 1KG </h6>
                        <h5 class="text-primary mb-0">Rs.2100.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img width = "400" src= "\images\shop2.jpeg " alt="">
                        <h6 class="text-uppercase"> HAPPY CAT SUPREME FARM LAMB (CONTAINS NO FISH) 300G</h6>
                        <h5 class="text-primary mb-0">Rs.1300.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                     <img width = "400" src= "\images\shop3.jpeg " alt="">
                        <h6 class="text-uppercase"> BLACKHAWK ADULT - LAMB AND RICE 20KG</h6>
                        <h5 class="text-primary mb-0">Rs.34 500.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img width = "400" src= "\images\shop4.jpeg " alt="">
                        <h6 class="text-uppercase"> WHISKAS ADULT OCEAN FISH (1.2KG)</h6>
                        <h5 class="text-primary mb-0">Rs.3400.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <img width = "400" src= "\images\shop5.jpeg "alt="">
                        <h6 class="text-uppercase">Timothy Naturals Rabbit food</h6>
                        <h5 class="text-primary mb-0">Rs.18000.00</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-cart"></i></a>
                            <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Special Offer</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">Save 30% on all items your first order</h1>
                    </div>
                    <p class="text-white mb-4"> "Unlock a special 30% discount on your first purchase—experience our products at unbeatable prices and join our family of satisfied customers today!"</p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                    <!-- <a href="" class="btn btn-outline-light py-md-3 px-md-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                        <h6 class="text-body mb-5">The Pocket Friendly</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rs.</small>3000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>VACCINE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>MONTHLY CHECKUP</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HEALTH RECORDING</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Standard</h2>
                        <h6 class="text-body mb-5">The Lover</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rs.</small>5000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>VACCINE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET EXERCISE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>MONTHLY CHECKUP</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Extended</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">Rs.</small>9000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>VACCINE & VITAMINS</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>24 HOUR SERVICE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TRAINING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET BORDING WITH PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 50px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img width ="400" src="images/team1.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                               <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a> -->
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Stuart Martin</h5>
                        <p class="m-0">Professional Dog breeder and Police Dog trainer</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img width="400" src="images/team2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <!--<a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a> -->
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <!--<a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Nikci Bandara</h5>
                        <p class="m-0">Diploma in Pet Managment, Certificate holder of Kennal bar association</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <imgwidth="400" src="images/team3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <!--<a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a> -->
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <!--<a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Dihansa Franki</h5>
                        <p class="m-0">Cat grooming professional, Bird trainee and Snake professional</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img width="400" src="images/team4.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a> -->
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                               <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Alex Sahas</h5>
                        <p class="m-0"> Former ZOO keeper</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img width="400" src="images/team5.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a> -->
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <!-- <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Louis Vendor</h5>
                        <p class="m-0">Diploma in Vet, Professional Pet trainee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p> I recently visited the PetsL Pet Care Center, and I couldn't be more impressed with the level of service and care provided. The staff is exceptionally knowledgeable and genuinely passionate about animals, ensuring that every pet receives personalized attention. The facility is clean, well-organized, and equipped with the latest in pet care technology. From grooming and boarding to medical check-ups and dietary consultations, PetsL offers a comprehensive range of services that cater to all pet needs. My dog came back happy, healthy, and well-groomed. I highly recommend PetsL Pet Care Center to any pet owner looking for top-notch care for their furry friends!</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Dahami Kariyawasam</h5>
                            <span>Software Engineer</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p> I recently tried the PetsL Pet Care Center, and overall, it was a decent experience. The staff was friendly and seemed knowledgeable, but there were a few areas that could use improvement. The facility was clean, but it felt a bit crowded at times, which made me wonder if my pet was getting enough individual attention. The grooming service was good, but not exceptional – my dog looked neat, but there were a few missed spots. The boarding experience was satisfactory; my pet seemed content but not as relaxed as I had hoped. Overall, PetsL provides a reliable service, but there's room for refinement to make it truly outstanding.</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Haritha Thalpe</h5>
                            <span>CEO of kithul herbals</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Latest Blog</h6>
                <h1 class="display-5 text-uppercase mb-0">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/blog-1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                    <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor</p>
                                    <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/blog-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                    <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor</p>
                                    <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
    
</x-site-layout>
