<x-layout>
    <section class="pengumuman">
        <div class="container-pm">
            <div class="post-wrapper">
                <div class="tittle">
                    <h1>PENGUMUMAN LABORATORIUM MANAJEMEN MENENGAH</h1>
                    <h5>date</h5>
                </div>
                <hr>
                @foreach ($posts as $post)
                <div class="blog-post">
                    <div class="blog-info">
                        <h3>
                            <a href="/posts/{{ $post['slug'] }}">
                                {{ $post['tittle'] }}
                            </a>
                        </h3>
                        <ul class="media">
                            <li>
                                <a href="#">
                                    <i data-feather="calendar"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="info-desc">
                            {{ Str::limit($post['body'], 100)  }}
                        </div>
                        <a href="/posts/{{ $post['slug'] }}">
                            kembali
                        </a>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>