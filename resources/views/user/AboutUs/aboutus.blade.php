@extends('user.user_master')
@section('user')
<div class="container text-center mt-5 mb-2">
        <h1 class="mb-0">About Us</h1></div>
    <div class="container mt-3">
        <!-- About Start -->
    <div class="container-fluid py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mt-lg-0">
                    <h5 class="m-3">
                    
For a common man in a country like India, seeking justice is a hectic journey due to the dearth of legal knowledge and the unavailability of affordable justice. In a legal system where every person is supposed to be acquainted with the law, it is lamentable that few are aware of their own rights and duties. Such a deplorable state of affairs has stimulated various legal aid and awareness activities all of which aim to reach the goal of an informed and aware citizenry. The institutions imparting legal education play a vital role in achieving this objective by not only educating the students, but also by working towards for the welfare of the society. Keeping this as a foundation, Legal Aid & Awareness Committee [“LAAC”] was started by the faculty and students of National Law University, Jodhpur with the mandate of imparting legal awareness and providing legal aid.</h5>

<h5 class="m-3">Since its inception, the LAAC has been discharging its role under the patronage of Hon’ble Vice Chancellor Dr. Poonam Pradhan Saxena and the able guidance of Prof. I. P. Massey (Dean, Faculty of Law). Established as the Centre for Legal Aid and Social Services, it initially focused on prisons across Jodhpur in collaboration with the CHRI Initiative for under-trial prisoners. Gradually, due to an increased understanding of socio-economic conditions, the LAAC has undertaken initiatives aimed at spreading legal awareness and improving the quality of life of the less privileged sections of society by helping them attain their rights under various socially beneficial legislations. The LAAC seeks to generate a respectful attitude amongst people toward fulfilling their social and legal obligations.
</h5>                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- About End -->
    <!-- Features Start -->
    <div class="container-fluid py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mt-lg-0">
                    <div class="feature-text bg-white rounded m-3">
                        <h1 class="mb-4">Our Aims</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">01</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">To impart practical knowledge and create awareness regarding basic legal rights and remedies provided under various laws.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">02</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">To act as an intermediary between a layman and the opportunities of free legal aid services present across the country.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">03</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">To facilitate better implementation of legislation and governmental schemes.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">04</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">To work towards securing the rights of women in general and under the socially beneficial legislation.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">05</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">To analyze and report on the socio-economic condition of various communities in the country.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h5 class="text-secondary m-0">06</h5>
                            </div>
                            <div class="ml-4">
                                <p class="m-0">Development of Surpura village under smart village initiative</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
       <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-appointment rounded">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-lg-6 py-5">
                        <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                            <h1 class="text-center text-white mb-4">Contact For Any Query</h1>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control border-0 p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    </div>
    @endsection