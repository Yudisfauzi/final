<x-layout>
    <section class="home">
        <div class="container swiper">
            <div class="slider-wrapper">
                <div class="card-list swiper-wrapper">
                    <div class="first-banner swiper-slide">
                        <img class="oprec" src="img/oprec.png" alt="">
                        <div class="first-tb">
                            <div class="desc">
                                <h1>Open Recruitment Asistent Manajemen Menengah 2024</h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident, aspernatur ex aliquam quae iure? Quasi maxime, doloribus explicabo culpa, rem voluptate dolorum dignissimos a ipsa eaque quidem corrupti vitae.Dapatkan kesempatan mengembangkan potensi diri bersama kami, ayo  daftarkan dirimu sebagai calas Laboratorium Teknik Informatika sekarang.</p>
                            </div>
                            <a href="">
                                <button class="first-btn">
                                    <div class="btn-wrapper">
                                    <span>Lanjut</span>
                                    <i data-feather="arrow-right"></i> 
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="first-banner swiper-slide">
                        <img class="oprec" src="img/pakaian.png" alt="">
                        <div class="first-tb">
                            <div class="desc">
                                <h1>Open Recruitment Asistent Manajemen Menengah 2024</h1>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum provident, aspernatur ex aliquam quae iure? Quasi maxime, doloribus explicabo culpa, rem voluptate dolorum dignissimos a ipsa eaque quidem corrupti vitae.Dapatkan kesempatan mengembangkan potensi diri bersama kami, ayo  daftarkan dirimu sebagai calas Laboratorium Teknik Informatika sekarang.</p>
                            </div>
                            <button class="first-btn">
                                <a href="#"></a>
                                <div class="btn-wrapper">
                                <span>Lanjut</span>
                                <i data-feather="arrow-right"></i> 
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                    <!-- If we need navigation buttons -->
            </div>  
        </div>
    </section>
    <section class="content-tb">
        <div class="container-tb">
            <div class="left-row">
                <h4>Kalender Akademik <br>
                    <span>Laboratorium Manajemen</span>
                </h4>
                <div class="left-tbl">
                    <table>
                        <thead>
                            <tr>
                                <th class="th-left">Kegiatan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        @foreach ($home as $thome)
                        <tbody>
                            <tr>
                                <td>{{ $thome['kegiatan'] }}</td>
                                <td>{{ $thome['tanggal'] }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="right-row">
                <h4>Jadwal Session</h4>
                <table>
                    <thead>
                        <tr>
                            <th class="th-right">Hari</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>y</td>
                            <td>y</td>
                        </tr>
                        <tr>
                            <td>y</td>
                            <td>y</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="modul">
        <div class="container">
            <div class="wrapper-head">
                <div class="head-tl">
                    <hr>
                    <h2>Modul Pembelajaran</h2>
                    <p>Laboratorium Manajemen Menengah</p>
                </div>
            </div>
            <div class="container-md ">
                <div class="card-wrapper ">
                    <div class="list-card swiper-wrapper">
                        <div class="first-card swiper-slide">  
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                        <div class="first-card swiper-slide">    
                            <div class="image">
                                <img src="img/modul1.png " alt="">
                            </div>  
                            <div class="text">
                                <h3>
                                    <a href="#">Manajemen Oprasional</a>
                                </h3>
                                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, velit. Maxime corporis asperiores, quibusdam, culpa cum voluptas maiores vel, iste enim blanditiis ad eveniet aspernatur inventore. Vel molestiae officia at.</h5>    
                                <a href="">selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ytb-content">
        <div class="container-yt">
            <div class="wrap-yt">
                <div class="information">
                    <h2>Laboratorium Manajemen Menengah</h2>
                    <h4>Laboratorium Manajemen Menengah (Lab-MM) adalah suatu unit kerja yang bertanggung jawab pada kegiatan praktikum mata kuliah penunjang dan praktikum mandiri di lingkungan Universitas Gunadarma. Lab-MM ini telah melaksanakan kegiatannya sejak tahun 1994, mengembangkan program aplikasi Manajemen Keuangan, Manajemen Operasional dan Riset Operasional.</h4>
                </div>
                
                <video src="video/oprec2.mp4" controls >
                </video>
            </div>
        </div>
    </section>

</x-layout> 