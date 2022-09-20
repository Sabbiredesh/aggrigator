@extends('layouts.landinglayouts')

@section('title','Dashboard')
@section('landingpage_content')

    {{--bg-banner-one--}}
    <section class="banner " id="solution">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-6 col-md-8 col-10 m-auto pb-5">
                    <input class="w-100 p-2 shadow " type="text" id="landingsearch"
                           placeholder="Track Your Parcel Here"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 m-auto py-3">
                    <h1>Powerful Shipping Platform to</h1>
                    <h4 class="banner-text">Grow Business Internationally</h4>
                    <p>The cloud shipping software of choice for growing businesses. Get the lowest rates with a
                        shipping and tracking experience customers love.</p>
                    <button class="button-primary mt-4">Get Started For Free</button>
                </div>
                <div class="col-lg-6 col-md-6 col-10 mt-4 bg">

                    <div id="background-wrap">
                        <div id="background-wrap">

                            <div class="bubble x1 bg-primary d-flex justify-content-center ">
                                <div class="align-self-center text-dark">
                                    <h2>-65%</h2>
                                </div>
                            </div>

                            <div class="bubble x2 bg-primary d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>-75%</h2>
                                </div>
                            </div>

                            <div class="bubble x3 bg-primary d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>+25%</h2>
                                </div>
                            </div>

                            <div class="bubble x4 bg-primary d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x5 bg-primary d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x6 d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x7 d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x8 d-flex justify-content-center">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x9 d-flex justify-content-center ">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                            <div class="bubble x10 d-flex justify-content-center ">
                                <div class="align-self-center text-dark">
                                    <h2>05%</h2>
                                </div>
                            </div>

                        </div>


                        <img class="w-100" src="{{asset('Landingpage/images/bg-image1.jpg')}}">
                        {{--                    <div class="img-banner">--}}

                        {{--                    </div>--}}
                    </div>

                </div>


            </div>
    </section>

    <section class="banner-cercle " id="features">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-8 col-md-10 col-10 m-auto p-0 text-center">
                    <h2>Supercharge Your Shipping.</h2>
                    <h2> Grow Business Internationally.</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6 col-10 mt-4">
                    <img class="w-50" src="{{asset('Landingpage/images/Group 14.jpg')}}">
                    {{--                    <div class="img-banner">--}}

                    {{--                    </div>--}}
                </div>

                <div class="col-lg-6 col-md-6 col-10 m-auto py-3">
                    <h3>Supercharge Your Shipping. Grow Business Internationally.</h3>
                    <h4 class="banner-text">Grow Business Internationally</h4>
                    <p>Stop overpaying for shipping. Our rates remain unbeaten and are
                        available to everybody. See how you can save up to 89% on top couriers.
                        With 250+ courier services from USPS, UPS, DHL and more,
                        we have the right courier for your needs. See available couriers and shipping rates.</p>

                </div>

            </div>
        </div>
    </section>


    <section class=" banner-body ">
        <div class="container">
            <div class="row ">
                {{--                <div class=" col-lg-6 col-md-8 col-10 m-auto p-0">--}}
                {{--                    <input class="w-100 p-2 shadow " type="text" id="landingsearch"--}}
                {{--                           placeholder="Track Your Parcel Here"/>--}}
                {{--                </div>--}}
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 m-auto py-3">
                    <h1>Unlock Global Growth</h1>
                    <h4 class="banner-text">Grow Business Internationally</h4>
                    <p>Boost revenue by selling worldwide, seamlessly.
                        Easyship does the hard work by integrating with leading international couriers,
                        calculating tax and duty costs and preparing the right paperwork for smooth customs clearance
                        and delivery.
                        Learn how Easyship handles customs clearance.</p>
                    {{--                    <button class="button-primary mt-4">Get Started For Free</button>--}}
                </div>
                <div class="col-lg-6 col-md-6 col-10 mt-4">
                    <img class="w-100" src="{{asset('Landingpage/images/image 1.jpg')}}">
                    {{--                    <div class="img-banner">--}}

                    {{--                    </div>--}}
                </div>

            </div>


        </div>
    </section>


    <section class="banner-body ">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-8 col-md-10 col-10 m-auto p-0 text-center">
                    <h1>Supercharge Your Shipping. Grow Business Internationally.</h1>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6 col-10 mt-4">
                    <img class="w-50" src="{{asset('Landingpage/images/Group 14.jpg')}}">
                    {{--                    <div class="img-banner">--}}

                    {{--                    </div>--}}
                </div>

                <div class="col-lg-6 col-md-6 col-10 m-auto py-3">
                    <h1>Supercharge Your Shipping. Grow Business Internationally.</h1>
                    <h4 class="banner-text">Grow Business Internationally</h4>
                    <p>Stop overpaying for shipping. Our rates remain unbeaten and are
                        available to everybody. See how you can save up to 89% on top couriers.
                        With 250+ courier services from USPS, UPS, DHL and more,
                        we have the right courier for your needs. See available couriers and shipping rates.</p>

                </div>

            </div>
        </div>
    </section>



    <section class="banner-body ">
        <div class="container">
            <div class="row ">
                <div class=" col-lg-6 col-md-8 col-10 m-auto p-0">
                    {{--                    <input class="w-100 p-2 shadow " type="text" id="landingsearch"--}}
                    {{--                           placeholder="Track Your Parcel Here"/>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 m-auto py-3">
                    <h1>Unlock Global Growth</h1>
                    <h4 class="banner-text">Grow Business Internationally</h4>
                    <p>Boost revenue by selling worldwide, seamlessly. Easyship does the hard work by integrating with
                        leading international couriers, calculating tax and duty costs and preparing the right paperwork
                        for smooth customs clearance and delivery. Learn how Easyship handles customs clearance.</p>
                    {{--                    <button class="button-primary mt-4">Get Started For Free</button>--}}
                </div>
                <div class="col-lg-6 col-md-6 col-10 mt-4">
                    <img class="w-75" src="{{asset('Landingpage/images/image 1.jpg')}}">
                    {{--                    <div class="img-banner">--}}

                    {{--                    </div>--}}
                </div>

            </div>


        </div>
    </section>

    <section class="banner-body ">
        <div class="container">
            <div class="row ">

                <div class="col-lg-6 col-md-6 col-10 mt-2 mx-auto  ">
                    <img class="w-75  " src="{{asset('Landingpage/images/image 2.jpg')}}" alt="image">
                </div>
                <div class="col-lg-6 col-md-6 col-10 ">
                    <h2 class="banner-text">Enhance Your Storage No Physical Space Required</h2>
                    <p class="mb-3">Increase checkout conversion rates with dynamic rates at checkout. Show
                        the best selection of couriers, in addition to delivery times and fully landed costs.
                        <a class="banner-text" href="">Learn how checkout drives conversions.</a>
                    </p>
                    <p>
                        Easyship is seamlessly integrated with leading eCommerce platforms and marketplaces.
                        You can manage all your shipments without writing a single line of code.
                    </p>
                </div>


            </div>


        </div>
    </section>

    <section class="banner-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 ">
                    <h4>Never Waste Time on Shipping Again</h4>
                    <p>One tool to manage and automate all your shipping needs.
                        Compare shipping quotes, generate labels, schedule pickups,
                        and monitor finances through our intuitive cloud-based shipping software.
                        Explore our shipping software.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-10 mt-4 m-auto">
                    <img class="w-75" src=" {{asset('Landingpage/images/image 4.jpg')}} " alt="">
                </div>
            </div>
        </div>
    </section>

    <section class=" banner-body">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 mt-2 mx-auto  ">
                    <img class="w-75  " src="{{asset('Landingpage/images/image 3.jpg')}}" alt="image">
                </div>

                <div class="col-lg-6 col-md-6 col-10 ">
                    <p> Access Our Network of Global Warehouses
                        Improving transit times, lowering shipping costs, and reducing tariff exposure
                        has never been easier than with our global network of 3PL partners. Our shipping consultants
                        will tailor a
                        fulfillment strategy perfect for your business. Learn more about our fulfillment network.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <section class="banner-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 m-auto">
                    <p>
                        Delight Your CustomersExceed <br> your customer’s expectations with a curated delivery
                        experience.
                        Keep your customers informed with shipment tracking pages and emails that match your branding,
                        and customized packing slips for a personal touch.
                        Learn how to brand your delivery experience.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-10 mt-4 m-auto">
                    <img class="w-75" src=" {{asset('Landingpage/images/image 5.jpg')}} " alt="">
                </div>

            </div>
        </div>

    </section>


    <section class="">
        <div class="container">
            <div class="row corner-banner-1  " style="">
                <div class="col-lg-6 col-md-6 col-10 m-auto banner-height position-relative  ">
                    <img class="corner-image-2" src=" {{asset('Landingpage/images/Rectangle 10.jpg')}} " alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-10 m-auto text-start align-items-self-center ">
                    <h3>About Us</h3>

                    <p class="text-dark">
                        E-desh Limited, a concern of Express Group started to engage in complete logistics services and
                        solutions for
                        e-commerce and online business industry to play an integral part of the booming growth with all
                        the business and
                        industry potentials for the upcoming years and decades. Express Group board consists of highly
                        experienced Management
                    </p>
                    <p class="text-dark">
                        E-desh Limited is the first company in Bangladesh that has the experience, capabilities,
                        functional expertise,
                        technological embedment for integrated logistics solutions or One Umbrella Solutions to the
                        e-commerce industry.
                    </p>

                </div>
            </div>

        </div>

    </section>



    <section class="banner-body">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-10 m-auto  ">
                    <img class="w-75" src=" {{asset('Landingpage/images/image 6.jpg')}} " alt="">
                </div>

                <div class="col-lg-6 col-md-6 col-10 m-auto ">
                    <p>
                        You are In Good Hands We're happy when our customers are happy.
                        We pride ourselves on going above and beyond.
                    </p>
                    <br>
                    <P>
                        You are In Good Hands
                        Get the Help You Need, 24/7
                        We work around the clock to get your shipments to the right place at the right time. Our support
                        center is second-to-none. See our support center.
                    </P>
                    <br>
                    <P>
                        Become a Shipping Expert
                        Our resource library has everything you've ever wanted to know about shipping. Explore resource
                        hub.
                    </P>
                </div>

            </div>

        </div>

    </section>



    <section class=" ">
        <div class="container">
            <div class="row corner-banner-2  " style="">

                <div class="col-lg-6 col-md-6 col-10 m-auto">
                    <h3>Start Shipping in
                        Minutes
                    </h3>
                    <p class="text-dark">You can try us for free. Everyone loves free.</p>
                    <button class="btn btn-primary">Get Started For Free</button>
                    <p class="text-dark">
                        Already at scale? Our shipping and logistics experts can build the perfect global
                        logistics setup for your needs.
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-10 banner-height positon-relative ">
                    <img class="corner-image-1" src=" {{asset('Landingpage/images/Rectangle 9.jpg')}} " alt="">
                </div>
            </div>

        </div>

    </section>

@endsection
