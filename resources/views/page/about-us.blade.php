@extends('template.layouts')

@section('title', 'About Éternelle Beauté Clinic')

@section('content')
    <div class="about-us-container">
        <div class="about-us">
            <h1>
                ÉT<span class="yellow-letter">E</span>RN<span class="yellow-letter">E</span>LLE
                <br>
                B<span class="yellow-letter">E</span>AUT<span class="yellow-letter">É</span>
            </h1>
        </div>
        <section class="content">
            <p>
                Founded by a Beauty Doctor who has decades of experience in the field of aesthetics and beauty.
                Éternelle Beauté Clinic is the leading aesthetic and anti-aging clinic. We provide effective medical
                beauty treatments with modern technology in the form of laser treatments, non-surgical facelifts,
                dermal fillers, facials, PRP+, non-invasive body contouring and rejuvenations for men and women.
            </p>
            <div class="image-section">
                <img src="../assets/images/about-us.jpg" alt="Doctor">
            </div>
        </section>
        <footer class="history">
            <h2>Our History</h2>
            <div class="decorative-line"></div>
            <div class="decorative-line2"></div>
                
            <input type="radio" id="year2021" name="year">
            <input type="radio" id="year2022" name="year">
            <input type="radio" id="year2023" name="year">
            <input type="radio" id="year2024" name="year">
            <input type="radio" id="year2025" name="year">
            
            <div class="slider">
                <label for="year2021" class="ellipse">2021</label>
                <label for="year2022" class="ellipse">2022</label>
                <label for="year2023" class="ellipse">2023</label>
                <label for="year2024" class="ellipse">2024</label>
                <label for="year2025" class="ellipse">2025</label>
            </div>

            <div class="description">
                <div class="content2" data-year="2021">
                    <div>
                        <h3>The Birth of Éternelle Beauté</h3>
                        <p>A renowned doctor with a passion for the beauty industry began to realize their dream
                            of building and managing a beauty clinic to address beauty and skin health issues.
                            On July 25, 2021, the first Éternelle Beauté clinic was established at Siwalankerto Permai street number 10, Surabaya, East Java.
                            The clinic focused on providing high-quality beauty treatments, especially for skincare.
                            With a small but dedicated team of experts, Éternelle Beauté quickly gained a reputation for its excellent service,
                            attracting clients from different areas of the city.
                        </p>
                    </div>
                </div>

                <div class="content2" data-year="2022">
                    <div>
                        <h3>Expanding the Treatment Range</h3>
                        <p>Éternelle Beauté expanded its range of services to meet the growing demand for specialized beauty treatments.
                            New procedures for skin rejuvenation, anti-aging, and body contouring were introduced, attracting even more clients.
                            To accommodate the increasing number of visitors, the clinic hired additional skilled professionals.
                            This helped maintain high-quality service while ensuring that each client received the attention they deserved.
                        </p>
                    </div>
                </div>

                <div class="content2" data-year="2023">
                    <div>
                        <h3>Opening New Branches</h3>
                        <p>We achieved a major milestone by opening its second branch. Located in a busy area of East Java,
                            the new clinic aimed to serve clients who had difficulty accessing the original location. 
                            With the opening of the new branch, Éternelle Beauté introduced cutting-edge beauty treatments,
                            including laser therapy and non-invasive cosmetic procedures.
                            These services set the clinic apart from other beauty centers in the region.
                        </p>
                    </div>
                </div>

                <div class="content2" data-year="2024">
                    <div>
                        <h3>A Growing Network</h3>
                        <p>Éternelle Beauté had successfully established itself as a leading beauty clinic in East Java, with plans to expand beyond the region. The clinic continued to innovate
                            by introducing advanced treatments and collaborating with international beauty experts.
                            The management team focused on improving customer experience, investing in state-of-the-art equipment, and launching exclusive beauty packages.
                            Éternelle Beauté also started offering beauty consultations with renowned dermatologists.
                        </p>
                    </div>
                </div>
                
                <div class="content2" data-year="2025">
                    <div>
                        <h3>National Recognition</h3>
                        <p>We gained national recognition as one of the top beauty clinics in Indonesia. With its consistent focus on quality and innovation, the clinic was featured in several prestigious beauty and health magazines,
                            solidifying its reputation across the country. 
                            This year also marked the launch of Éternelle Beauté's signature skincare product line. Developed by in-house dermatologists, the products were designed to complement the treatments offered at the clinic,
                            allowing clients to maintain their skin care routine at home.
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <section class="loca">
            <h2>Our Location</h2>
            <div class="decorative-line"></div>
            <div class="decorative-line2"></div>
            <div class="loca-cards">
                <div class="about-card">
                    <hr class="decorative-line-card">
                    <h3>Éternelle Surabaya</h3>
                    <img src="/assets/images/surabaya.jpg" alt="Surabaya Clinic">
                    <p>Jl. Dukuh Kupang Timur 3</p>
                    <p><b>0987785634221</b></p>
                </div>
                <div class="about-card">
                    <hr class="decorative-line-card">
                    <h3>Éternelle Surakarta</h3>
                    <img src="/assets/images/surakarta.jpg" alt="Surakarta Clinic">
                    <p>Jl. Dr Wahidin Surakarta</p>
                    <p><b>0987785634221</b></p>
                </div>
                <div class="about-card">
                    <hr class="decorative-line-card">
                    <h3>Éternelle Sidoarjo</h3>
                    <img src="/assets/images/sidoarjo.jpg" alt="Sidoarjo Clinic">
                    <p>Jl. Abdul Rahman 02</p>
                    <p><b>0987785634221</b></p>
                </div>
                <div class="about-card">
                    <hr class="decorative-line-card">
                    <h3>Éternelle Bandung</h3>
                    <img src="/assets/images/bandung.jpg" alt="Bandung Clinic">
                    <p>Jl. Mohamad Toha 08</p>
                    <p><b>0987785634221</b></p>
                </div>
            </div>
        </section>
    </div>
@endsection
